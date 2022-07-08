<!-- Buat model untuk mengambil data dari database dbrentalmobil -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mobil_model extends CI_Model
{
    public function get_all_data()
    {
        $query = $this->db->get('mobil');

        return $query->result();
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where('mobil', ['id' => $id]);
        return $query->row();
    }

    public function get_by_merk_id($merk_id)
    {
        $query = $this->db->get_where('mobil', ['merk_id' => $merk_id]);
        return $query->result();
    }
}
?>