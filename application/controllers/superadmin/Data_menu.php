<?php
class Data_menu extends CI_Controller
{

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
		$this->load->model('Model_barang', 'm_barang');
	}


	public function index()
	{
		$data['kategori_menu'] = $this->M_Mmc->get_data('kategori_menu')->result();
		// $data['menu'] = $this->M_Mmc->get_data('menu')->result();
		$data['menu'] = $this->m_barang->tampil_data()->result();

		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/data_menu', $data);
		$this->load->view('templates_superadmin/footer');
	}

	public function tambah_menu()
	{
		$data['kategori_menu'] = $this->M_Mmc->get_data('kategori_menu')->result();

		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/form_tambah_menu', $data);
		$this->load->view('templates_superadmin/footer');
	}

	public function tambah_menu_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_menu();
		} else {
			$id_kat		= $this->input->post('id_kat');
			$nama_mn		= $this->input->post('nama_mn');
			$harga_mn		= $this->input->post('harga_mn');
			$ket_mn			= $this->input->post('ket_mn');
			$foto_mn		= $_FILES['foto_mn']['name'];
			if ($foto_mn = '') {
			} else {
				$config['upload_path']   = './assets/upload';
				$config['allowed_types'] = 'jpg|jpeg|png|tiff|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto_mn')) {
					echo "Foto Gagal Diupload";
				} else {
					$foto_mn = $this->upload->data('file_name');
				}
			}

			$data = array(
				'id_kat'		=> $id_kat,
				'nama_mn'		=> $nama_mn,
				'harga_mn'		=> $harga_mn,
				'ket_mn'		=> $ket_mn,
				'foto_mn'		=> $foto_mn
			);

			$this->M_Mmc->insert_data($data, 'menu');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil ditambahkan!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('superadmin/data_menu');
		}
	}

	public function update_menu($id)
	{
		$where = array('id_mn' => $id);
		// $data['menu'] = $this->db->query("SELECT * FROM menu mn, kategori_menu kat_mn WHERE mn.nama_kat=kat_mn.nama_kat AND mn.id_mn='$id'")->result();
		$data['menu'] = $this->m_barang->tampil_data_edit($id)->row();
		$data['kategori_menu'] = $this->M_Mmc->get_data('kategori_menu')->result();

		$this->load->view('templates_superadmin/header');
		$this->load->view('templates_superadmin/sidebar');
		$this->load->view('superadmin/form_update_menu', $data);
		$this->load->view('templates_superadmin/footer');
	}

	public function update_menu_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update_menu();
		} else {
			$id 			= $this->input->post('id_mn');
			$id_kat		= $this->input->post('id_kat');
			$nama_mn		= $this->input->post('nama_mn');
			$harga_mn		= $this->input->post('harga_mn');
			$ket_mn			= $this->input->post('ket_mn');
			$foto_mn		= $_FILES['foto_mn']['name'];
			if ($foto_mn) {
				$config['upload_path']   = './assets/upload';
				$config['allowed_types'] = 'jpg|jpeg|png|tiff|gif';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto_mn')) {
					$foto_mn = $this->upload->data('file_name');
					$this->db->set('foto_mn', $foto_mn);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'id_kat'		=> $id_kat,
				'nama_mn'		=> $nama_mn,
				'harga_mn'		=> $harga_mn,
				'ket_mn'		=> $ket_mn
			);

			$where = array(
				'id_mn' => $id
			);

			$this->M_Mmc->update_data('menu', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil diupdate!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('superadmin/data_menu');
		}
	}


	public function _rules()
	{
		$this->form_validation->set_rules('id_kat', 'id', 'required');
		$this->form_validation->set_rules('nama_mn', 'nama_mn', 'required');
		$this->form_validation->set_rules('harga_mn', 'harga_mn', 'required');
		$this->form_validation->set_rules('ket_mn', 'ket_mn', 'required');
	}

	public function delete_menu($id)
	{
		$where = array('id_mn' => $id);
		$this->M_Mmc->delete_data($where, 'menu');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Data Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('superadmin/data_menu');
	}
}
