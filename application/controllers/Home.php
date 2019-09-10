<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['json'] = get_api('home','language=en');

		$data['title'] = "We are ";

    $this->load->view('templates/header', $data);
    $this->load->view('home');
    $this->load->view('templates/footer');
	}
}
