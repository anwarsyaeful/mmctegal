<?php 

class Dashboard extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct(); 

		if($this->session->userdata('role_id') != '2')
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Anda Belum Login!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('auth/login');
		}
	}

	public function index()
	{
		// $data['tb_masuk'] = $this->M_Mmc->get_data('tb_masuk')->result();

		$this->load->view('templates_admin1/header');
		$this->load->view('templates_admin1/sidebar');
		$this->load->view('admin1/dashboard');
		$this->load->view('templates_admin1/footer');
	}

}

?>
