<?php 

class Data_pengunjung extends CI_Controller{
    
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
		$data['pengunjung'] = $this->M_Mmc->get_data('tb_masuk')->result();

		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/data_pengunjung',$data);
		$this->load->view('templates_superadmin/footer');
	}

	public function delete_pengunjung($id)
 	{
 		$where = array('id_alat' => $id);
		$this->M_Mmc->delete_data($where, 'tb_masuk');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Data Pengunjung Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('superadmin/data_pengunjung');
	}
	
	public function delete_semua()
 	{
 		$where = array('id_alat');
		$this->M_Mmc->delete_data($where, 'tb_masuk');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Data Pengunjung Berhasil Dihapus Semua
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('superadmin/data_pengunjung');
	}
}

 ?>