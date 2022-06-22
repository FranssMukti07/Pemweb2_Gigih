<?php
class Prodi_model extends CI_Model
{
    public $kode;
    public $nama;
    public $kaprodi;
    
    public function get_all_data()
    {
        $query = $this->db->get('prodi');

        return $query->result();
    }

    public function get_by_id($id){
        $query = $this->db->get_where('prodi', ['id' => $id]);
        return $query->row();
    }
    
    public function detailProdi($id){
        $query = $this->db->get_where('prodi', ['id' => $id]);
        return $query->row_array();
    }    

    public function save($data)
    {
        $sql = "INSERT INTO prodi (kode,nama,kaprodi) VALUES (?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();

        return $this->get_by_id($insert_id);
    }

    public function edit($id, $data){
        $this->db->where('id', $id);

        $this->db->update('prodi', $data);
    }

    public function delete($data)
    {
        $sql = "DELETE FROM prodi WHERE id=?";
        $this->db->query($sql, $data);
    }
}
