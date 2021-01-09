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
            $dataSession = [
                'name' => $fullname,
                'email' => $email,
                'user_id' => $req->data->id_user,
                'userIsLogin' => true,
            ];
			
			$body['user_id'] = $req->data->id_user;
            $this->session->set_userdata($dataSession);

        }
        echo json_encode(["status" => $statusRegister, "message" => $req->message ,"data" => $body, 'response' => $req]);
    }
}