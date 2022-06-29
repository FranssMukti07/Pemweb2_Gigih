<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 mt-lg-3">
            <div class="output-table mt-3">
                <h3 class="text-center">
                    <?= $table ?>
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
                            <?php if ($role == 1) : ?>
                                <th>Action</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($mahasiswa as $mhs): ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= ($mhs->ipk == '') ? '' : '011022' . $mhs->nim ?></td>
                                <td><?= $mhs->nama ?></td>
                                <td><?= $mhs->gender ?></td>
                                <td><?= $mhs->ipk ?></td>
                                <td><?= $predikat ?></td>
                                <!-- jika role_id = 1, buat button action -->
                                <?php if ($role == 1) : ?>
                                    <td>
                                        <a class="btn btn-info" href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs->id; ?>">Detail</a>
                                        <a class="btn btn-warning" href="<?= base_url(); ?>mahasiswa/halaman_edit/<?= $mhs->id; ?>">Edit</a>
                                        <a class="btn btn-danger" href="<?= base_url(); ?>mahasiswa/delete_mahasiswa/<?= $mhs->id; ?>" onclick="return hapus('Yakin ingin menghapus data <?= $mhs->nama; ?>')">Delete</a>
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