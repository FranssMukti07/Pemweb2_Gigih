<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-lg-3">
            <div class="col-lg-9 input-data mx-auto border-success p-3 rounded-lg" style="border: 3px dashed;">
                <form action="<?= base_url(); ?>mahasiswa/index" method="post">
                    <h3 class="text-lg-center">Form Data Mahasiswa</h3>
                    <div class="input-group flex-nowrap d-flex flex-column" style="gap: 5px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Name</span>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="addon-wrapping" required pattern="[A-Za-z ]{0,}" title="Hanya Huruf">
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">IPK</span>
                            <input type="text" name="ipk" class="form-control" placeholder="IPK" aria-label="Username" aria-describedby="addon-wrapping" required>
                        </div>
                        <div class="card-body text-center rounded-lg" style="color: black;">
                            <label class="">GENDER</label>
                            <div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="gender_0" type="radio" required="required" class="custom-control-input gender" value="L">
                                    <label for="gender_0" class="custom-control-label">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="gender_1" type="radio" required="required" class="custom-control-input gender" value="P">
                                    <label for="gender_1" class="custom-control-label">Female</label>
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-success w-25 mx-auto" type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div class="output-table mt-3">
                <h3 class="text-center">
                    Daftar Mahasiswa
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_mhs as $mhs) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= ($mhs->ipk == '') ? '' : '0'.$nomor.'0001' ?></td>
                                <td><?= $mhs->nama ?></td>
                                <td><?= $mhs->gender ?></td>
                                <td><?= $mhs->ipk ?></td>
                                <td><?= $mhs->predikat() ?></td>
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
</div>