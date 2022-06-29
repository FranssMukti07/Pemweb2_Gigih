    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="card-body utama font-weight-bold text-center border m-2">
                <div class="col-lg-5 input-data mx-auto border-success p-3 rounded-lg" style="border: 3px dashed;">
                    <form action="<?= base_url('prodi/create'); ?>" method="post">
                        <h3 class="text-lg-center">Form Data Program Studi</h3>
                        <div class="input-group flex-nowrap d-flex flex-column" style="gap: 5px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Kode</span>
                                <input type="text" name="kode" pattern="[A-Z]{2}" title="Hanya 2/3 Huruf!!" class="form-control" placeholder="Kode Prodi" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Nama</span>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Program Studi" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Kaprodi</span>
                                <input type="text" name="kaprodi" class="form-control" placeholder="Nama Kepala Program Studi" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <input class="btn btn-success w-25 mx-auto" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="mt-3 d-flex align-content-start">
                    <a href="<?= base_url(); ?>prodi/index" class="btn btn-secondary" style="font-size: 15px;"><i class="bi bi-box-arrow-in-left"></i><strong class="ml-2">Back</strong></a>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->