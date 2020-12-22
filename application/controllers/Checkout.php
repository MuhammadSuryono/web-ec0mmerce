<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends My_Controller
{
    public function checkoutProduct(string $code_checkout)
    {
        $this->parseData['title_tab'] = $code_checkout;
        $this->parseData['content'] = 'content/checkout/index';
        $this->load->view('index', $this->parseData);
    }
}