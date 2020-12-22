<?php


class Cart extends My_Controller
{
    public function cartByUser()
    {
        $this->parseData['title_tab'] = 'Cart';
        $this->parseData['content'] = 'content/cart/index';
        $this->load->view('index', $this->parseData);
    }
}