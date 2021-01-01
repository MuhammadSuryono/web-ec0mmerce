<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $data = $this->request_API_GET([], $this->BaseUrl('development').'category', []);
        $product = $this->request_API_GET([], $this->BaseUrl('development').'product', []);
		$this->parseData['title_tab'] = 'Home';
		$this->parseData['content'] = 'content/dashboard/dashboard';
		$this->parseData['category'] = $data->data;
		$this->parseData['products'] = $product->data;
		$this->parseData['isLogin'] = $this->session->userdata('isLogin');
		$this->load->view('index', $this->parseData);
	}
}
