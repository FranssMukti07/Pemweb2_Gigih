<!-- Buat model untuk mengambil data dari database dbrentalmobil -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Merk_model extends CI_Model
{
    public function get_all_data()
    {
        $query = $this->db->get('merk');

        return $query->result();
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where('merk', ['id' => $id]);
        return $query->row();
    }
}
?>