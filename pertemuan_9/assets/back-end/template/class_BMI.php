<?php
require_once 'class_pasien.php';


class BMI extends Pasien
{
    public $berat;
    public $tinggi;

    function __construct($nama, $gender, $bb, $tb)
    {
        parent::__construct($nama, $gender);
        $this->berat = $bb;
        $this->tinggi = $tb;
    }

    function nilaiBMI()
    {
        $rumus = $this->berat / pow(($this->tinggi / 100), 2);
        $hasilBMI = sprintf("%.1f", $rumus);
        return $hasilBMI;
    }

    function statusBMI()
    {
        if (self::nilaiBMI() < 18.5) {
            $status = "Kekurangan Berat Badan";
        } elseif (self::nilaiBMI() >= 18.5 && self::nilaiBMI() <= 24.9) {
            $status = "Normal(ideal)";
        } elseif (self::nilaiBMI() >= 25.0 && self::nilaiBMI() <= 29.9) {
            $status = "Kelebihan Berat Badan";
        } elseif (self::nilaiBMI() >= 30.0) {
            $status = "Kegemukan(Obesitas)";
        }
        return $status;
    }
}
// $psn1 = new BMI(52, 165);
// echo "Nilai BMI adalah " . $psn1->nilaiBMI() . PHP_EOL;
// echo "Keterangan : " . $psn1->statusBMI();
