<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-lg-3">
            <div class="col-lg-9 input-data mx-auto border-success p-3 rounded-lg" style="border: 3px dashed;">
                <form action="<?= base_url(); ?>matkul/index" method="post">
                    <h3 class="text-lg-center">Form Mata Kuliah STT-NF</h3>
                    <div class="input-group flex-nowrap d-flex flex-column" style="gap: 5px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Nama Matkul</span>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Mata Kuliah" aria-label="Username" aria-describedby="addon-wrapping" required pattern="[A-Za-z ]{0,}" title="Hanya Huruf">
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Kode</span>
                            <input type="text" name="kode" class="form-control" placeholder="Kode Mata Kuliah" aria-label="Username" aria-describedby="addon-wrapping" required pattern="[A-Z0-9]{5,7}" title="Kode Terdiri dari 2-4 Huruf dan 3 digit angka">
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">SKS</span>
                            <input type="text" name="sks" class="form-control" placeholder="Jumlah SKS" aria-label="Username" aria-describedby="addon-wrapping" required pattern="[0-9]{1,2}" title="Jumlah SKS terdiri dari 1-2 digit angka">
                        </div>
                        <input class="btn btn-success w-25 mx-auto" type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div class="mt-lg-3">
                <h3 class="text-center">
                    Daftar Mata Kuliah
                </h3>
                <table class="table table-hover table-striped text-center mt-lg-3">
                    <thead class="bg-info">
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Nama Mata Kuliah</th>
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
</div>