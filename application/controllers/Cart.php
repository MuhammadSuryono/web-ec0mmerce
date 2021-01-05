<?php


class Cart extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->parseData['isLogin'] = $this->isLogin();

    }

    public function cartByUser()
    {
        $cart = $this->request_API_GET([], $this->BaseUrl('development').'cart/'.$this->session->userdata('user_id'));
        $data = $this->request_API_GET([], $this->BaseUrl('development').'category', []);

        $this->parseData['title_tab'] = 'Cart';
        $this->parseData['content'] = 'content/cart/index';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['carts'] = $cart->data;
        $this->parseData['category'] = $data->data;

        $this->load->view('index', $this->parseData);
    }
}