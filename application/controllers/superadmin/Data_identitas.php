<?php 

class Data_identitas extends CI_Controller{
    
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
		$data['identitas'] = $this->M_Mmc->get_data('identitas')->result();
		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/data_identitas',$data);
		$this->load->view('templates_superadmin/footer');
	
	}

	public function update($id)
	{
		$where = array ('id_identitas' => $id);
		$data['identitas'] = $this->db->query("SELECT * FROM identitas WHERE id_identitas ='$id'")->result();

		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/form_update_identitas',$data);
		$this->load->view('templates_superadmin/footer');
	}

	public function update_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->update();
		}else{
			$id 					= $this->input->post('id_identitas');
			$operasional			= $this->input->post('operasional');
			$email					= $this->input->post('email');
			$telp					= $this->input->post('telp');
			}
			
			$data = array(
				'operasional'		=> $operasional,
				'email'				=> $email,
				'telp'				=> $telp,
			);

			$where = array(
				'id_identitas' => $id
			);

			$this->M_Mmc->update_data('identitas',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Identitas Berhasil diupdate!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('superadmin/data_identitas');
	}


	public function _rules()
	{
		$this->form_validation->set_rules('operasional','operasional','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('telp','telepon','required');
	}

}
