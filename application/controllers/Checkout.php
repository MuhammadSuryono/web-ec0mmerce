<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->parseData['isLogin'] = $this->isLogin();
        array_push($this->js, base_url() . 'assets/js/custom/checkout.js');
    }
    public function checkoutProduct(string $code_checkout)
    {
        $city = $this->request_API_GET([], $this->BaseUrl('development') . 'ongkir/city');
        $this->parseData['title_tab'] = 'Checkout | ' . $code_checkout;
        $this->parseData['content'] = 'content/checkout/index';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['city'] = $city->data;
        $this->load->view('index', $this->parseData);
    }
}
