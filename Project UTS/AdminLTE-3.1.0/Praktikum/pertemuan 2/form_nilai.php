<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai</title>
    <style>
        body {
            background-color: #DFF6FF;
        }

        form {
            width: 30%;
            margin: auto;
            margin-top: 1cm;
            margin-bottom: 1cm;
            border: 2px dashed black;
            padding: 10px;
        }

        label {
            font-weight: bold;
        }

        hr {
            border: 1px solid grey;
        }

        header {
            padding: 10px;
            background-color: whitesmoke;
            border-bottom: 1px solid grey;
        }

        footer {
            padding: 10px;
            background-color: whitesmoke;
            border-top: 1px solid grey;
            font-size: small;
        }

        a {
            text-decoration: none;
            color: grey;
        }

        .main {
            display: flex;
        }

        main {
            margin: auto;
            border: 2px dashed black;
            padding: 10px;
        }
    </style>
    <script>
        function start() {
            document.getElementById('hasil').innerHTML = "<strong>RESULT HERE!!</strong>"
        }
        function hasil() {      
            document.getElementById('hasil').innerHTML = "<strong>RESULT HERE!!</strong>"
        }
    </script>
</head>

<body>
    <header class="text-dark">Sistem Penilaian</header>
    <div class="main">
        <form style="background-color: #6E85B2;" method="GET" action="./form_nilai.php">
            <h4><strong>Form Nilai Siswa</strong></h4>
            <hr />
            <div class="form-group">
                <label for="text">Nama Lengkap</label>
                <input id="text" name="nama" value="" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label for="select">Mata Kuliah</label>
                <div>
                    <select id="select" name="matkul" required="required" class="custom-select">
                        <option value="Basis Data">Basis Data</option>
                        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                        <option value="Statistika dan Probabilitas">Statistika dan Probabilitas</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="text1">Nilai UTS</label>
                <input id="text1" name="nilai_uts" placeholder="Nilai UTS" type="text" required="required" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="text2">NIlai UAS</label>
                <input id="text2" name="nilai_uas" placeholder="Nilai UAS" type="text" required="required" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="text3">Nilai Tugas/Praktikum</label>
                <input id="text3" name="nilai_tugas" placeholder="Nilai Tugas" type="text" required="required" value="" class="form-control">
            </div>
            <div class="form-group">
                <button name="proses" value="" type="submit" class="btn btn-primary">Simpan</button>
                <button name="proses" value="" type="reset" onclick="hasil()" class="btn btn-warning">Reset</button>
            </div>
        </form>
        <main id="hasil" class="bg-cyan">
            <?php
            $nama_siswa = $_GET['nama'];
            $matkul = $_GET['matkul'];
            $uts = $_GET['nilai_uts'];
            $uas = $_GET['nilai_uas'];
            $tugas = $_GET['nilai_tugas'];

            echo '<strong>RESULT</strong>';
            echo '<br/>Nama : ' . $nama_siswa;
            echo '<br/>Mata Kuliah : ' . $matkul;
            echo '<br/>Nilai UTS : ' . $uts;
            echo '<br/>Nilai UAS : ' . $uas;
            echo '<br/>Nilai Tugas/Praktikum : ' . $tugas;
            ?>
        </main>
    </div>
    <footer class="text-muted">Develop By @<a href="#">FranssMukti</a> ©2022</footer>
</body>

</html>