<?php
class Model_barang extends ci_model
{
    function tampil_data()
    {
        $this->db->select('mn.id_mn,mn.nama_mn,mn.foto_mn,mn.ket_mn,mn.harga_mn,km.nama_kat');
        $this->db->from('menu as mn');
        $this->db->join('kategori_menu as km', 'mn.id_kat=km.id_kat');
        $data = $this->db->get();
        return $data;
    }
    function tampil_data_edit($id)
    {
        $this->db->select('mn.id_mn,mn.nama_mn,mn.foto_mn,mn.ket_mn,mn.harga_mn,km.nama_kat,km.id_kat');
        $this->db->from('menu as mn');
        $this->db->join('kategori_menu as km', 'mn.id_kat=km.id_kat');
        $this->db->where('id_mn', $id);
        $data = $this->db->get();
        return $data;
    }

    function get_option()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $query = $this->db->get();
        return $query->result();
    }

    function post($data)
    {
        $this->db->insert('menu', $data);
    }

    function get_one($id)
    {
        $param  =   array('id_mn' => $id);
        return $this->db->get_where('menu', $param);
    }

    function edit($data, $id)
    {
        $this->db->where('id_mn', $id);
        $this->db->update('menu', $data);
    }


    function delete($id)
    {
        $this->db->where('id_mn', $id);
        $this->db->delete('menu');
    }
}
