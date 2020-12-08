<?php

class My_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public $parseData = [
        'navbar' => 'parts/header',
        'sidebar' => 'parts/sidebar',
        'modal' => 'parts/modal',
        'content' => 'errors/error',
        'footer' => 'parts/footer',
        'menu_wrapper' => 'parts/menu_wrapper',

        'title_budge' => 'Not Found!',
        'title_tab' => 'Not Found!',
        'app_name' => 'Web Penjualan'
    ];
}
