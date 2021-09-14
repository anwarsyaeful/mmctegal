<?php 

class Setting_counter extends CI_Controller{
    
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
		$data['counter'] = $this->M_Mmc->get_data('tb_jumlah')->result();
		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/setting_counter',$data);
		$this->load->view('templates_superadmin/footer');
	
	}

	public function update($id)
	{
		$where = array ('id_alat' => $id);
		$data['counter'] = $this->db->query("SELECT * FROM tb_jumlah WHERE id_alat ='$id'")->result();

		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/form_setting_counter',$data);
		$this->load->view('templates_superadmin/footer');
	}

	public function update_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->update();
		}else{
			$id 					= $this->input->post('id_alat');
			$jumlah			        = $this->input->post('jumlah');
			}
			
			$data = array(
				'jumlah'		=> $jumlah,
			);

			$where = array(
				'id_alat' => $id
			);

			$this->M_Mmc->update_data('tb_jumlah',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Setting Counter Berhasil diupdate!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('superadmin/setting_counter');
	}


	public function _rules()
	{
		$this->form_validation->set_rules('jumlah','jumlah','required');
	}

}
