<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$data['json'] = get_api('contact','language=en');

		$data['title'] = "Contact | ";
		
    $this->load->view('templates/header', $data);
    $this->load->view('contact');
    $this->load->view('templates/footer');
	}
}
