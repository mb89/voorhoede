<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {
	public function index()
	{
		$data['json'] = get_api('work','language=en');

		$data['title'] = "Cases | ";

    $this->load->view('templates/header', $data);
    $this->load->view('cases');
    $this->load->view('templates/footer');
	}
}
