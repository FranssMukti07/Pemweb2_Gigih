<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 mt-lg-3">
            <div class="output-table mt-lg-3">
                <h3 class="text-center">
                    <?= $table; ?>
                </h3>
                <table class="table table-hover table-striped text-lg-center mt-lg-3">
                    <thead class="bg-info">
                        <tr>
                            <th>#</th>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Pendidikan</th>
                            <?php if ($role == 1) : ?>
                                <th>Action</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($dosen as $dsn) : ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= '1020' . $dsn->nidn ?></td>
                                <td><?= $dsn->nama ?></td>
                                <td><?= $dsn->gender ?></td>
                                <td><?= $dsn->pendidikan_akhir ?></td>
                                <!-- jika role_id = 1, buat button action -->
                                <?php if ($role == 1) : ?>
                                    <td>
                                        <a class="btn btn-info" href="<?= base_url(); ?>dosen/detail/<?= $dsn->id; ?>">Detail</a>
                                        <a class="btn btn-warning" href="<?= base_url(); ?>dosen/halaman_edit/<?= $dsn->id; ?>">Edit</a>
                                        <a class="btn btn-danger" href="<?= base_url(); ?>dosen/delete_dosen/<?= $dsn->id; ?>" onclick="return hapus('Yakin ingin menghapus data <?= $dsn->nama; ?>')">Delete</a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                            <?php $nomor++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>