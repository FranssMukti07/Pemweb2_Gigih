    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="card-body utama font-weight-bold text-center border m-2">
                <div class="container">
                    <div class="row">
                        <div class="mt-lg-3 mx-auto">
                            <h3 class="text-center">
                                Edit Data Dosen STT-NF
                            </h3>
                            <div class="col-lg-12 input-data mx-auto border-success p-3 rounded-lg" style="border: 3px dashed;">
                                <form action="<?= base_url('dosen/edit_dosen'); ?>" method="post">
                                    <h3 class="text-lg-center">Form Data Dosen</h3>
                                    <div class="input-group flex-nowrap d-flex flex-column" style="gap: 5px;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">NIDN</span>
                                            <input type="text" name="id" class="form-control" placeholder="Nomer Induk Mahasiswa" aria-label="Username" aria-describedby="addon-wrapping" value="<?= $query_dosen_detail->id; ?>" hidden>
                                            <input type="text" name="nidn" class="form-control" placeholder="Nomer Induk Mahasiswa" aria-label="Username" aria-describedby="addon-wrapping" value="<?= $query_dosen_detail->nidn; ?>" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Nama</span>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="addon-wrapping" value="<?= $query_dosen_detail->nama; ?>" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Gender</span>
                                            <input type="text" name="gender" class="form-control" placeholder="Jenis Kelamin" aria-label="Username" aria-describedby="addon-wrapping" value="<?= $query_dosen_detail->gender; ?>" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Tempat Lahir</span>
                                            <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" aria-label="Username" aria-describedby="addon-wrapping" value="<?= $query_dosen_detail->tmp_lahir; ?>" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Tanggal Lahir</span>
                                            <input type="date" name="tgl_lahir" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<?= $query_dosen_detail->tgl_lahir; ?>" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Pendidikan Terakhir</span>
                                            <input type="text" name="pendidikan_akhir" class="form-control" placeholder="Indeks Prestasi Kumulatif" aria-label="Username" aria-describedby="addon-wrapping" value="<?= $query_dosen_detail->pendidikan_akhir; ?>" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Program Studi</span>
                                            <input type="text" name="prodi_kode" class="form-control" placeholder="Program Studi" aria-label="Username" aria-describedby="addon-wrapping" value="<?= $query_dosen_detail->prodi_kode; ?>" required>
                                        </div>
                                        <input class="btn btn-success w-25 mx-auto" type="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>