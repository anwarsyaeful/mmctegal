<?php 

class Daftar_menu extends CI_Controller {

	public function index()
	{
		$data['kategori_menu'] = $this->M_Mmc->get_data('kategori_menu')->result();
		$data['menu'] = $this->M_Mmc->get_data('menu')->result();
		
		$this->load->view('templates_customer/header');
		$this->load->view('customer/daftar_menu',$data);
		$this->load->view('templates_customer/footer');
	}

}

?>
