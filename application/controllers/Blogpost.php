<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogpost extends CI_Controller {
	public function index()
	{
    $data['json'] = get_api('posts/' . $this->input->get('slug'),'');

		$data['title'] = $data['json']->title . " | ";

    $this->load->view('templates/header', $data);
    $this->load->view('blogpost');
    $this->load->view('templates/footer');
	}
}
