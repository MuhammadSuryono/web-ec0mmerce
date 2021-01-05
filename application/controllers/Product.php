<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->parseData['isLogin'] = $this->isLogin();
        array_push($this->js, base_url() . 'assets/js/custom/detail.js');
    }

    public function productById(string $product_id=null)
    {
        $data = $this->request_API_GET([], $this->BaseUrl('development').'category', []);
        $product = $this->request_API_GET([], $this->BaseUrl('development').'product/'.$product_id, []);
        $realted = $this->request_API_GET(["category_id" => $product->data->category_id], $this->BaseUrl('development').'product/category', []);


        $this->parseData['category'] = $data->data;
        $this->parseData['product'] = $product->data;
        $this->parseData['relatedProduct'] = $realted->data;
        $this->parseData['title_tab'] = 'Detail Product';
        $this->parseData['content'] = 'content/detail/detail';
        $this->parseData['javascript'] = $this->js;

        $this->load->view('index', $this->parseData);
    }
}