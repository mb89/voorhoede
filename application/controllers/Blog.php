<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index()
	{
		$data['json'] = get_api('blog','');
		$data['json2'] = get_api('posts','');

		$data['title'] = "Blog | ";

    $this->load->view('templates/header', $data);
    $this->load->view('blog');
    $this->load->view('templates/footer');
	}
}
