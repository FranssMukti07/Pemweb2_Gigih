<?php

class Belanja
{
    var $produk;
    var $nama;
    var $total;
    var $jumlah;

    public function __construct($nama, $produk, $jumlah)
    {
        $this->nama = $nama;
        $this->produk = $produk;
        $this->jumlah = $jumlah;
    }

    public function hargaBarang()
    {
        if ($this->produk == "TV") {
            $harga = 4200000;
        } elseif ($this->produk == "KULKAS") {
            $harga = 3100000;
        } elseif ($this->produk == "MESIN CUCI") {
            $harga = 3800000;
        }
        $this->total = $this->jumlah * $harga;
        return $this->total;
    }

    public function cetak()
    {
        echo "Nama Customer : " . $this->nama;
        echo "<br/>Produk yang di Beli : " . $this->produk;
        echo "<br>Jumlah Barang : " . $this->jumlah;
        echo "<br>Total Belanja : Rp " . number_format($this->total, 2, ",", ".");
    }
}
