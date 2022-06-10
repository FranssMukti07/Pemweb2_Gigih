<?php
    $nama_siswa = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['nilai_uts'];
    $uas = $_POST['nilai_uas'];
    $tugas = $_POST['nilai_tugas'];
    $proses = $_POST['proses'];
    $total = (0.3 * $uts) + (0.35 * $uas) + (0.35 * $tugas);

    if (!empty($proses)) {
        echo '<strong>RESULT</strong>';
        echo '<br/>Nama : ' . $nama_siswa;
        echo '<br/>Mata Kuliah : ' . $matkul;
        echo '<br/>Nilai UTS : ' . $uts;
        echo '<br/>Nilai UAS : ' . $uas;
        echo '<br/>Nilai Tugas/Praktikum : ' . $tugas;
    }
    if ($total > 55) {
        echo '<br/>SISWA LULUS!!';
    } else {
        echo '<br/>SISWA TIDAK LULUS!!';
    }

    if ($total > 0 and $total <= 35) {
        $grade = "E";
    } elseif ($total > 35 and $total <= 55) {
        $grade = "D";
    } elseif ($total > 55 and $total <= 69) {
        $grade = "C";
    } elseif ($total > 69 and $total <= 84) {
        $grade = "B";
    } elseif ($total > 84 and $total <= 100) {
        $grade = "A";
    } else {
        $grade = "I";
    }

    switch ($grade) {
        case 'A':
            $predikat = "Sangat Memuaskan";
            break;
        case 'B':
            $predikat = "Memuaskan";
            break;
        case 'C':
            $predikat = "Cukup";
            break;
        case 'D':
            $predikat = "Kurang";
            break;
        case 'E':
            $predikat = "Sangat Kurang";
            break;
        default:
            $predikat = "Tidak Ada";
            break;
    }
    
    echo '<br/>Dengan Nilai ' . $total . ', Maka Grade Siswa adalah ' . $grade . " dengan Predikat <strong>$predikat</strong>";
?>