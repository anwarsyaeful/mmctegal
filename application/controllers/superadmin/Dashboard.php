<?php 

class Dashboard extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();

		if($this->session->userdata('role_id') != '1')
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
		$data['pengunjung'] = $this->M_Mmc->get_data('tb_jumlah')->row();
		
        $feedback = $this->db->query("SELECT * FROM hubungi");
        $data['hubungi'] = $feedback->num_rows();

		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/dashboard', $data);
		$this->load->view('templates_superadmin/footer');
	}
	
	public function realtime() {
	    $data = $this->M_Mmc->get_data('tb_jumlah')->row();
        
	    echo json_encode($data);
	}

}

?>
