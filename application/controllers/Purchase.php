<?php


class Purchase extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->parseData['isLogin'] = $this->isLogin();
        array_push($this->js, base_url() . 'assets/js/custom/purchase.js');

    }

    public function purchaseByUser()
    {
        $data = $this->request_API_GET([], $this->BaseUrl('development').'category', []);
        $orders = $this->request_API_POST(["user_id" => $this->session->userdata("user_id")], $this->BaseUrl('development').'order/by-user', null);

        $this->parseData['title_tab'] = 'Purchase';
        $this->parseData['content'] = 'content/purchase/index';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['category'] = $data->data;
        $this->parseData['orders'] = $orders->data;

        $this->load->view('index', $this->parseData);
    }

    public function purchaseByOrderId($orderId)
    {
        $data = $this->request_API_GET([], $this->BaseUrl('development').'category', []);
        $orders = $this->request_API_GET(null, $this->BaseUrl('development').'order/order-id/'.$orderId, null);

        $this->parseData['title_tab'] = 'Purchase '.$orderId;
        $this->parseData['content'] = 'content/purchase/detail';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['category'] = $data->data;
        $this->parseData['orders'] = $orders->data;

        $this->load->view('index', $this->parseData);
    }

    public function updateStatus($orderId)
    {
        
    }
}