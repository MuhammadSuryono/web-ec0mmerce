<?php


class Category extends My_Controller
{
    public function categoryById()
    {
        $this->parseData['title_tab'] = 'Cart';
        $this->parseData['content'] = 'content/category/index';
        $this->load->view('index', $this->parseData);
    }

}