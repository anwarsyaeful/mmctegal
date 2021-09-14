<?php
class Kategori_menu extends CI_Controller {
    
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
		$data['kategori_menu'] = $this->M_Mmc->get_data('kategori_menu')->result();
		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/kategori_menu',$data);
		$this->load->view('templates_superadmin/footer');
	}

	public function tambah_kategori()
	{
		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/form_tambah_kategori');
		$this->load->view('templates_superadmin/footer');
	}

	public function tambah_kategori_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_kategori();
		}else {
			$nama_kat			= $this->input->post('nama_kat');
	
			$data = array(
				'nama_kat'		=> $nama_kat,
			);

			$this->M_Mmc->insert_data($data,'kategori_menu');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil ditambahkan!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('superadmin/kategori_menu');
		}
	}

	public function update_kategori($id)
	{
		$where = array ('id_kat' => $id);
		$data['kategori_menu'] = $this->db->query("SELECT * FROM kategori_menu WHERE id_kat ='$id'")->result();

		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/form_update_kategori',$data);
		$this->load->view('templates_superadmin/footer');

	}

	public function update_kategori_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->update_kategori();
		}else{
			$id 					= $this->input->post('id_kat');
			$nama_kat				= $this->input->post('nama_kat');
			
			$data = array(
				'nama_kat'			=> $nama_kat,
			);

			$where = array(
				'id_kat' => $id
			);

			$this->M_Mmc->update_data('kategori_menu',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil diupdate!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('superadmin/kategori_menu');
		}
	}


	public function _rules()
	{
		$this->form_validation->set_rules('nama_kat','nama_kat','required');		
	}

	public function delete_kategori($id)
	{
		$where = array('id_kat' => $id);
		$this->M_Mmc->delete_data($where, 'kategori_menu');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Data Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('superadmin/kategori_menu');
	}

}

?>
