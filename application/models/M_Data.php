<?php 

class M_Data extends CI_Model
{
	
	public function save($ket, $tabel)
	{
		$data = [
			"ket"	=> $ket,
		];

		$insert = $this->db->insert($tabel, $data);
		$new_jumlah = 0;
		
		if ($insert) {
		    $jumlah = $this->db->get('tb_jumlah')->row();
		    
		    
		   if ($jumlah) {
		        if ($tabel == 'tb_masuk') {
    		        $new_jumlah = $jumlah->jumlah + 1;
    		    } else {
    		         $new_jumlah = $jumlah->jumlah - 1;
    		    }
    		    
    		    $update_jumlah = [
    		        'jumlah'    => $new_jumlah
    		    ];
    		    
    		    //echo json_encode($update_jumlah); die;
		    
    		    
    		    $this->db->where('id_alat', $jumlah->id_alat);
    		    return $this->db->update('tb_jumlah', $update_jumlah);
		   }
		}
	}
}

 ?>