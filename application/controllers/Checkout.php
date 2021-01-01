<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends My_Controller
{
    public function checkoutProduct(string $code_checkout)
    {
        $city = $this->request_API_GET([], $this->BaseUrl('development').'ongkir/city');
        $this->parseData['title_tab'] = 'Checkout | '.$code_checkout;
        $this->parseData['content'] = 'content/checkout/index';
        $this->parseData['city'] = $city->data;
        $this->load->view('index', $this->parseData);
    }
}