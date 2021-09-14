<?php 

class Data_customer extends CI_Controller{
    
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
		$data['customer'] = $this->M_Mmc->get_data('customer')->result();

		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/data_customer',$data);
		$this->load->view('templates_superadmin/footer');
	}

	public function tambah_customer()
	{
		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/form_tambah_customer');
		$this->load->view('templates_superadmin/footer');
	}

	public function tambah_customer_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_customer();
		}else {
			$nama					= $this->input->post('nama');
			$username				= $this->input->post('username');
			$alamat					= $this->input->post('alamat');
			$gender					= $this->input->post('gender');
			$no_telepon				= $this->input->post('no_telepon');
			$no_ktp					= $this->input->post('no_ktp');
			$password				= md5($this->input->post('password'));
			

			$data = array(
				'nama'				=> $nama,
				'username'			=> $username,
				'alamat'			=> $alamat,
				'gender'			=> $gender,
				'no_telepon'		=> $no_telepon,
				'no_ktp'			=> $no_ktp,
				'password'			=> $password
			);

			$this->M_Mmc->insert_data($data,'customer');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Admin Berhasil ditambahkan!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('superadmin/data_customer');
		}
	}

	public function update_customer($id)
	{
		$where = array ('id_customer' => $id);
		$data['customer'] = $this->db->query("SELECT * FROM customer WHERE id_customer ='$id'")->result();

		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/form_update_customer',$data);
		$this->load->view('templates_superadmin/footer');

	}

	public function update_customer_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->update_customer();
		}else{
			$id 					= $this->input->post('id_customer');
			$nama					= $this->input->post('nama');
			$username				= $this->input->post('username');
			$alamat					= $this->input->post('alamat');
			$gender					= $this->input->post('gender');
			$no_telepon				= $this->input->post('no_telepon');
			$no_ktp					= $this->input->post('no_ktp');
			$password				= md5($this->input->post('password'));
			

			$data = array(
				'nama'				=> $nama,
				'username'			=> $username,
				'alamat'			=> $alamat,
				'gender'			=> $gender,
				'no_telepon'		=> $no_telepon,
				'no_ktp'			=> $no_ktp,
				'password'			=> $password
			);

			$where = array(
				'id_customer' => $id
			);

			$this->M_Mmc->update_data('customer',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Admin Berhasil diupdate!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('superadmin/data_customer');
		}
	}


	public function _rules()
	{
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('no_telepon','no. telepon','required');
		$this->form_validation->set_rules('no_ktp','no. ktp','required');
		$this->form_validation->set_rules('password','password','required');
	}

	public function detail_customer($id)
	{
		$data['customer'] = $this->M_Mmc->ambil_id_customer($id);
		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/detail_customer',$data);
		$this->load->view('templates_superadmin/footer');
	}

	public function delete_customer($id)
	{
		$where = array('id_customer' => $id);
		$this->M_Mmc->delete_data($where, 'customer');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Data Admin Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('superadmin/data_customer');
	}

}

 ?>