    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="card-body utama font-weight-bold text-center border m-2">
                <div class="col-lg-6 input-data mx-auto border-success p-3 rounded-lg" style="border: 3px dashed;">
                    <form action="<?= base_url('mahasiswa/create'); ?>" method="post">
                        <h3 class="text-lg-center">Form Data Mahasiswa</h3>
                        <div class="input-group flex-nowrap d-flex flex-column" style="gap: 5px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">NIM</span>
                                <input type="text" name="nim" class="form-control" placeholder="Nomer Induk Mahasiswa" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Nama</span>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Gender</span>
                                <input type="text" name="gender" class="form-control" placeholder="Jenis Kelamin" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Tempat Lahir</span>
                                <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Tanggal Lahir</span>
                                <input type="date" name="tgl_lahir" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">IPK</span>
                                <input type="text" name="ipk" class="form-control" placeholder="Indeks Prestasi Kumulatif" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Program Studi</span>
                                <input type="text" name="prodi_kode" class="form-control" placeholder="Program Studi" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <a href="<?= base_url(); ?>mahasiswa/index"><input class="btn btn-success w-25 mx-auto" type="submit" value="Submit"></a>
                        </div>
                    </form>
                </div>
                <div class="mt-3 d-flex align-content-start">
                    <a href="<?= base_url(); ?>mahasiswa/index" class="btn btn-secondary" style="font-size: 15px;"><i class="bi bi-box-arrow-in-left"></i><strong class="ml-2">Back</strong></a>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->