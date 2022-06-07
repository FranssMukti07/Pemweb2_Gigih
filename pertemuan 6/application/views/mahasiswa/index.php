<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-lg-3">
            <h3 class="text-center">
                Daftar Mahasiswa
            </h3>
            <table class="table table-hover table-striped mt-lg-3">
                <thead class="bg-info">
                    <tr>
                        <th>#</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>IPK</th>
                        <th>Predikat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($list_mhs as $mhs) {
                    ?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $mhs->nim ?></td>
                            <td><?= $mhs->nama ?></td>
                            <td><?= $mhs->gender ?></td>
                            <td><?= $mhs->ipk ?></td>
                            <td><?= $mhs->predikat() ?></td>
                        </tr>
                    <?php
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>