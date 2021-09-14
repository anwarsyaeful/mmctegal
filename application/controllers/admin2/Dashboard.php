<?php 

class Dashboard extends CI_Controller {

	public function index()
	{

		$this->load->view('templates_admin2/header');
		$this->load->view('templates_admin2/sidebar');
		$this->load->view('admin2/dashboard');
		$this->load->view('templates_admin2/footer');
	}

}

?>
