<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 mt-lg-3">
            <h3 class="text-center">
                Daftar Dosen
            </h3>
            <table class="table table-hover table-striped text-lg-center mt-lg-3">
                <thead class="bg-info">
                    <tr>
                        <th>#</th>
                        <th>NIDN</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Pendidikan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($list_dsn as $dsn) {
                    ?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $dsn->nidn ?></td>
                            <td><?= $dsn->nama ?></td>
                            <td><?= $dsn->gender ?></td>
                            <td><?= $dsn->pendidikan ?></td>
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