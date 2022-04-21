<?php
require_once 'class_BMI.php';
require_once 'class_pasien.php';
require_once 'index1.php';

$_bb = $_POST['bb'];
$_tb = $_POST['tb'];
$_gender = $_POST['gender'];
$_nama = $_POST['nama'];

class BMIPasien extends BMI
{
    public $id;
    public $bmi;
    public $tanggal;
    public $pasien;

    function __construct($nama, $gender, $bb, $tb, $tanggal)
    {
        parent::__construct($nama, $gender, $bb, $tb);
        $this->tanggal = $tanggal;
    }
}

$psn1 = new BMIPasien("Nelan", "L", 80, 195, date("d-m-Y"));
$psn2 = new BMIPasien("Sakura Beban", "P", 65, 163, date("d-m-Y"));
$psn3 = new BMIPasien("Dhodi", "L", 58, 165, date("d-m-Y"));
$psn4 = new BMIPasien($_nama, $_gender, $_bb, $_tb, date("d-m-Y"));

$ar_pasien = [$psn1, $psn2, $psn3, $psn4];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <table class="table table-striped table-hover">
        <thead class="text-center">
            <th>Nomor</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender Pasien</th>
            <th>Berat (kg)</th>
            <th>Tinggi (cm)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </thead>
        <tbody style="text-align: center;">
            <?php $nomer = 1;?>
            <?php foreach ($ar_pasien as $obj): ?>
                <tr>
                    <td><?=$nomer?></td>
                    <td><?=$obj->tanggal?></td>
                    <td><?= "P00". $nomer++?></td>
                    <td><?=$obj->nama?></td>
                    <td><?=$obj->gender?></td>
                    <td><?=$obj->berat?></td>
                    <td><?=$obj->tinggi?></td>
                    <td><?=$obj->nilaiBMI()?></td>
                    <td><?=$obj->statusBMI()?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>

</html>