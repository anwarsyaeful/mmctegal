<?php 

class Data extends CI_Controller
{
	
	public function save()
	{
		$this->load->model('M_Data', 'data');

		$ket = $this->input->get('ket');
		$tabel = $this->input->get('table_insert');

		$this->data->save($ket, $tabel);

		echo 'Sukses insert data';
	}
    
    public function get_jumlah() {
        $ket = $this->input->get('ket');
		
		$jumlah = $this->db->get('tb_jumlah')->row()->jumlah;
		
		echo $jumlah;
    }
}

?>