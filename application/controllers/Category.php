<?php


class Category extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->parseData['isLogin'] = $this->isLogin();

    }

    public function categoryById($category_id)
    {
        $data = $this->request_API_GET([], $this->BaseUrl('development').'category', []);
        $product = $this->request_API_GET(["category_id" => $category_id], $this->BaseUrl('development').'product/category', []);

        $this->parseData['category'] = $data->data;
        $this->parseData['product'] = $product->data;

        $this->parseData['title_tab'] = 'Cart';
        $this->parseData['javascript'] = $this->js;

        $this->parseData['content'] = 'content/category/index';
        $this->load->view('index', $this->parseData);
    }

}