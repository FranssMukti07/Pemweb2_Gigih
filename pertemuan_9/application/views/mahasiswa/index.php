<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card-body utama font-weight-bold text-center border m-2">
            <div class="container">
                <div class="row">
                    <div class="mt-lg-3 mx-auto">
                        <h3 class="text-center display-4">
                            Daftar Mahasiswa STT-NF
                        </h3>
                        <table class="table table-hover table-striped text-center mt-lg-3">
                            <thead class="bg-info">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>IPK</th>
                                    <th>Program Studi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style="border-bottom: 1px solid white; border-right: 1px solid white; border-left: 1px solid white;">
                                <?php
                                $nomor = 1;
                                foreach ($isi_db as $row) {
                                ?>
                                    <tr>
                                        <td><?= $nomor ?></td>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->ipk ?></td>
                                        <td><?= $row->prodi_kode ?></td>
                                        <td>
                                            <a class="btn btn-info" href="<?= base_url(); ?>mahasiswa/detail/<?= $row->id; ?>">Detail</a>
                                            <a class="btn btn-success" href="<?= base_url(); ?>mahasiswa/halaman_edit/<?= $row->id; ?>">Edit</a>
                                            <a class="btn btn-danger" href="<?= base_url(); ?>mahasiswa/delete_mahasiswa/<?= $row->id; ?>" onclick="return hapus('Yakin ingin menghapus data <?= $row->nama; ?>')">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="<?= base_url(); ?>mahasiswa/form" class="btn btn-success mx-auto" style="font-size: 20px;"><i class="bi bi-plus-circle-dotted"></i><strong class="ml-2">Tambah</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>