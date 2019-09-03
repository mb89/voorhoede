<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
	public function index()
	{
		$data['json'] = get_api('team','language=en');

		$data['title'] = "Team | ";

    $this->load->view('templates/header', $data);
    $this->load->view('team');
    $this->load->view('templates/footer');
	}
}
