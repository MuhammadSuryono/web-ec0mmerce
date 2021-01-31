<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Register extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->isLogin()) redirect("/");
        array_push($this->js, base_url() . 'assets/js/custom/register.js');

    }

    public function index()
    {
        $this->parseData['javascript'] = $this->js;
        $this->load->view('register', $this->parseData);
    }

    public function authRegister()
    {
        $fullname = $this->input->post('fullname');
        $email = $this->input->post('email');
        $npwp = $this->input->post('npwp');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $body = [
          'fullname' => $fullname,
          'email' => $email,
          'npwp' =>  $npwp,
          'username' => $username,
          'password' => $password,
        ];

        $req = $this->request_API_POST($body, $this->BaseUrl('development').'customer/register');
        $statusRegister = false;

        if ($req->status)
        {
            $statusRegister = true;

        }
        echo json_encode(["status" => $statusRegister, "message" => $req->message ,"data" => $req->data, 'response' => $req]);
    }

    public function validateOtp()
    {
        $code_otp = $this->input->post('code_otp');
        $id_user = $this->input->post('id_user');

        $body = [
            'code_otp' => $code_otp,
            'id_user' => $id_user,
        ];

        $req = $this->request_API_POST($body, $this->BaseUrl('development').'otp/validate');
        $statusRegister = false;

        if ($req->status)
        {
            $statusRegister = true;
            $dataSession = [
                'name' => $req->data->fullname,
                'email' => $req->data->email,
                'user_id' => $req->data->id,
                'userIsLogin' => true,
            ];

            $this->session->set_userdata($dataSession);

        }
        echo json_encode(["status" => $statusRegister, "message" => $req->message ,"data" => $req->data, 'response' => $req]);
    }
}