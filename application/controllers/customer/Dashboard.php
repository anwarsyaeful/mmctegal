<?php 

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['identitas'] = $this->M_Mmc->get_data('identitas')->result();
		$data['tentang'] = $this->M_Mmc->get_data('tentang_mmc')->result();
		
		$this->load->view('templates_customer/header');
		$this->load->view('customer/dashboard',$data);
		$this->load->view('templates_customer/footer');
	}
	
}

?>
