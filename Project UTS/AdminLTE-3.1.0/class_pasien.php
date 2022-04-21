<?php

    class Pasien{
        public $id;
        public $kode;
        public $nama;
        public $tmp_lahir;
        public $tgl_lahir;
        public $email;
        public $gender;

        function __construct($nama, $gender)
        {
            $this->nama = $nama;
            $this->gender = $gender;
        }
    }

?>