<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="card-body utama font-weight-bold border m-2">
            <div class="card mx-auto" style="width: 30rem;">
                <div class="card-header text-center" style="font-size: 40px; border-bottom: 1px solid grey;">
                    <?= $prd['nama'] ?>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        <h6><strong>Kode</strong></h6>
                        <h6><?= $prd['kode'] ?></h6>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <h6><strong>Kaprodi</strong></h6>
                        <h6><?= $prd['kaprodi'] ?></h6>
                    </li>
                </ul>
            </div>
            <div class="mt-3 d-flex align-content-start">
                <a href="<?= base_url(); ?>prodi/index" class="btn btn-secondary" style="font-size: 15px;"><i class="bi bi-box-arrow-in-left"></i><strong class="ml-2">Back</strong></a>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>