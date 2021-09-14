<?php
class Model_transaksi extends ci_model
{

    function simpan_barang($data)
    {
        $this->db->insert('transaksi_detail', $data);
    }

    function tampilkan_detail_transaksi()
    {
        $this->db->select('td.t_detail_id,td.qty,td.tanggal_transaksi,td.harga_mn,mn.nama_mn');
        $this->db->from('transaksi_detail as td');
        $this->db->join('menu as mn', 'td.id_mn = mn.id_mn');
        $this->db->where('td.status', '0');
        return $this->db->get();
    }

    function hapusitem($id)
    {
        $this->db->where('t_detail_id', $id);
        $this->db->delete('transaksi_detail');
    }


    // function fetch_year()
    // {
    //     $query = "SELECT transaksi.transaksi_id as id, transaksi.tanggal_transaksi as tanggal, transaksi_detail.barang_id,
    //     SUM(transaksi_detail.harga) as harga, SUM(transaksi_detail.qty) as qty,sum(transaksi_detail.harga*qty) as total,barang.nama_barang as nama  
    //     FROM transaksi,transaksi_detail,barang WHERE transaksi.transaksi_id = transaksi_detail.transaksi_id and transaksi_detail.barang_id = barang.barang_id 
    //     GROUP BY transaksi.transaksi_id ORDER BY transaksi.tanggal_transaksi ASC";
    //     return $this->db->query($query);
    //     // var_dump($query);
    // }

    // function fetch_chart_data($tanggal_transaksi)
    // {
    //     $query = "SELECT transaksi.transaksi_id as id, transaksi.tanggal_transaksi as tanggal, transaksi_detail.barang_id,
    //     SUM(transaksi_detail.harga) as harga, SUM(transaksi_detail.qty) as qty,sum(transaksi_detail.harga*qty) as total,barang.nama_barang as nama  
    //     FROM transaksi,transaksi_detail,barang WHERE transaksi.transaksi_id = transaksi_detail.transaksi_id and transaksi_detail.barang_id = barang.barang_id 
    //     GROUP BY transaksi.transaksi_id ORDER BY transaksi.tanggal_transaksi ASC";
    //     return $this->db->query($query);
    //     // var_dump($query);
    // }


    function selesai_belanja($data)
    {
        $this->db->insert('transaksi', $data);
        $insertIdTransaksi = $this->db->insert_id();

        $data = array(
            'transaksi_id' => $insertIdTransaksi,
            'status' => '1'
        );
        $this->db->update('transaksi_detail', $data, array('status' => '0'));
    }

  function getTransaksi(){
       $query ="SELECT transaksi.transaksi_id,transaksi.tanggal_transaksi ,transaksi.waktu ,transaksi_detail.qty, transaksi.tanggal_transaksi, sum(transaksi_detail.harga_mn*transaksi_detail.qty) as rega FROM `transaksi` join 
       transaksi_detail ON transaksi.transaksi_id = transaksi_detail.transaksi_id GROUP BY transaksi.transaksi_id";
        return $this->db->query($query);
    }
    
     function getDetail($id){
        $this->db->select('td.t_detail_id,td.qty,td.harga_mn,mn.nama_mn');
        
        $this->db->from('transaksi_detail as td');
        $this->db->join('menu as mn', 'td.id_mn = mn.id_mn');
        $this->db->where('transaksi_id', $id);
        return $this->db->get();
     }

    function laporan_default()
    {
        $this->db->select('transaksi.transaksi_id as id, transaksi.tanggal_transaksi as tanggal, transaksi_detail.id_mn,menu.nama_mn as nama,sum(transaksi_detail.harga_mn*transaksi_detail.qty) as total');
        $this->db->select_sum('transaksi_detail.harga_mn', 'harga_mn');
        $this->db->select_sum('transaksi_detail.qty', 'qty');
        $this->db->from('transaksi');
        $this->db->join('transaksi_detail', 'transaksi.transaksi_id = transaksi_detail.transaksi_id');
        $this->db->join('menu', 'transaksi_detail.id_mn = menu.id_mn');
        $this->db->group_by('transaksi.transaksi_id');
        $this->db->order_by('transaksi.tanggal_transaksi', 'ASC');
        $data = $this->db->get();
        return $data;
    }

    function laporan_periode($daterange)
    {
        if (isset($daterange)) {
            $query = "SELECT transaksi.tanggal_transaksi AS tanggal, SUM(transaksi_detail.harga_mn) AS harga_mn, 
                     SUM(transaksi_detail.qty) AS qty,sum(transaksi_detail.harga_mn*qty) AS total, menu.nama_mn AS nama FROM 
                     transaksi,transaksi_detail,menu WHERE tanggal_transaksi BETWEEN '$daterange[0]' AND '$daterange[1]' AND transaksi.transaksi_id = transaksi_detail.transaksi_id AND transaksi_detail.id_mn = menu.id_mn 
                     GROUP BY transaksi.transaksi_id ORDER BY transaksi.tanggal_transaksi ASC";
        } else {
            $query = "SELECT transaksi.transaksi_id as id, transaksi.tanggal_transaksi as tanggal, transaksi_detail.id_mn,
                    SUM(transaksi_detail.harga_mn) as harga_mn, SUM(transaksi_detail.qty) as qty,sum(transaksi_detail.harga*qty) as total,menu.nama_mn as nama  
                    FROM transaksi,transaksi_detail,menu WHERE transaksi.transaksi_id = transaksi_detail.transaksi_id and transaksi_detail.id_mn = menu.id_mn 
                    GROUP BY transaksi.transaksi_id ORDER BY transaksi.tanggal_transaksi ASC";
        }
        return $this->db->query($query);
    }
}