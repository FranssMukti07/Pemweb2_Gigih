<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-lg-3">
            <h3 class="text-center">
                Daftar Mata Kuliah
            </h3>
            <table class="table table-hover table-striped text-center mt-lg-3">
                <thead class="bg-info">
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>SKS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($list_mk as $mk) {
                    ?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $mk->kode ?></td>
                            <td><?= $mk->nama ?></td>
                            <td><?= $mk->sks ?></td>
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