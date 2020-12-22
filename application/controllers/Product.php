<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends My_Controller
{
    public function productById(string $product_id=null)
    {
        $this->parseData['title_tab'] = 'Detail Product';
        $this->parseData['content'] = 'content/detail/detail';
        $this->load->view('index', $this->parseData);
    }
}