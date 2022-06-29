<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 mt-lg-3">
            <div class="output-table mt-lg-3">
                <h3 class="text-center">
                    <?= $table; ?>
                </h3>
                <table class="table table-hover table-striped text-center mt-lg-3">
                    <thead class="bg-info">
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                            <?php if ($role == 1) : ?>
                                <th>Action</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($prodi as $prd) : ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $prd->kode ?></td>
                                <td><?= $prd->nama ?></td>
                                <td><?= $prd->kaprodi ?></td>
                                <!-- jika role_id = 1, buat button action -->
                                <?php if ($role == 1) : ?>
                                    <td>
                                        <a class="btn btn-info" href="<?= base_url(); ?>prodi/detail/<?= $prd->id; ?>">Detail</a>
                                        <a class="btn btn-warning" href="<?= base_url(); ?>prodi/halaman_edit/<?= $prd->id; ?>">Edit</a>
                                        <a class="btn btn-danger" href="<?= base_url(); ?>prodi/delete_prodi/<?= $prd->id; ?>" onclick="return hapus('Yakin ingin menghapus data <?= $prd->nama; ?>')">Delete</a>
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