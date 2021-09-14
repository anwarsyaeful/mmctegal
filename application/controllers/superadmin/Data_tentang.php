<?php 

class Data_tentang extends CI_Controller{
    
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
		$data['tentang'] = $this->M_Mmc->get_data('tentang_mmc')->result();
		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/data_tentang',$data);
		$this->load->view('templates_superadmin/footer');
	
	}

	public function update($id)
	{
		$where = array ('id' => $id);
		$data['tentang'] = $this->db->query("SELECT * FROM tentang_mmc WHERE id ='$id'")->result();

		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/form_update_tentang',$data);
		$this->load->view('templates_superadmin/footer');
	}

	public function update_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->update();
		}else{
			$id 				= $this->input->post('id');
			$jasa				= $this->input->post('jasa');
			$service			= $this->input->post('service');
			$berita				= $this->input->post('berita');
			}
			
			$data = array(
				'jasa'			=> $jasa,
				'service'		=> $service,
				'berita'		=> $berita,
			);

			$where = array(
				'id' => $id
			);

			$this->M_Mmc->update_data('tentang_mmc',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Profil Berhasil diupdate!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('superadmin/data_tentang');
	}


	public function _rules()
	{
		$this->form_validation->set_rules('jasa','jasa','required');
		$this->form_validation->set_rules('service','service','required');
		$this->form_validation->set_rules('berita','berita','required');
	}

}
