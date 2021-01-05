<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->isLogin()) redirect("/");
        array_push($this->js, base_url() . 'assets/js/custom/login.js');

    }

    public function index()
    {
        $this->parseData['javascript'] = $this->js;
        $this->load->view('login', $this->parseData);
    }

    public function authLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $body = [
            'username' => $username,
            'password' => $password,
        ];

        $req = $this->request_API_POST($body, $this->BaseUrl('development').'auth/login');
        $statusLogin = false;

        if ($req->status)
        {
            $statusLogin = true;
            $dataSession = [
                'name' => $req->data->fullname,
                'email' => $req->data->email,
                'user_id' => $req->data->id,
                'userIsLogin' => true,
            ];
            $this->session->set_userdata($dataSession);

        }

        echo json_encode(["status" => $statusLogin, "message" => $req->message ,"data" => $body, 'response' => $req]);
    }
}