<?php 

class Feedback extends CI_Controller {

	public function index()
	{
		$data['identitas'] = $this->M_Mmc->get_data('identitas')->result();
		$data['hubungi'] = $this->M_Mmc->get_data('hubungi')->result();
		
		$this->load->view('templates_customer/header');
		$this->load->view('customer/feedback',$data);
		$this->load->view('templates_customer/footer');
	}

	public function kirim_pesan()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}else {
			$id 		 				   	 = $this->input->post('id');
			$nama							 = $this->input->post('nama');
			$email				 			 = $this->input->post('email');
			$masukan 						 = $this->input->post('masukan');
			$cabang 						 = $this->input->post('cabang');

			$data = array (
				'nama'		=> $nama,
				'email'		=> $email,
				'masukan'	=> $masukan,
				'cabang' 	=> $cabang
			
			);

			$this->M_Mmc->insert_data($data, 'hubungi');
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible" role="alert">
				Pesan berhasil terkirim !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('customer/feedback/index');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('masukan','masukan','required');
		$this->form_validation->set_rules('cabang','cabang','required');
	}

}

?>
