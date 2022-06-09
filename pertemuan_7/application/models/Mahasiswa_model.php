<?php
class Mahasiswa_model extends CI_Model
{
    public $id;
    public $nama;
    public $nim;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;

    public function predikat()
    {
        if ($this->ipk == '') {
            $predikat = '';
        } elseif ($this->ipk >= 3.5) {
            $predikat = 'Sangat Baik';
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.5) {
            $predikat = 'Baik';
        } elseif ($this->ipk >= 2.5 && $this->ipk < 3.0) {
            $predikat = 'Cukup';
        } else {
            $predikat = 'Kurang';
        }
        return $predikat;
    }
}
