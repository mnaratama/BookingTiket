<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminlte extends CI_Controller {

	public function index()
	{
		$this->load->view('adminlte');
	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
