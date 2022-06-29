<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="<?= base_url('landing/') ?>">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Home Page') ? 'active' : '' ?>" href="<?= base_url('landing/') ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Mahasiswa Page') ? 'active' : '' ?>" href="<?= base_url('landing/mahasiswa') ?>">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Dosen Page') ? 'active' : '' ?>" href="<?= base_url('landing/dosen') ?>">Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Prodi Page') ? 'active' : '' ?>" href="<?= base_url('landing/prodi') ?>">Program Studi</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <!-- Apabila role_id = 1, maka ada button admin page -->
            <?php if ($this->session->userdata('role_id') == 1) : ?>
                <a href="<?= base_url('Pages/index') ?>" class="btn btn-outline-primary my-2 my-sm-0 mr-2">Admin Page</a>
            <?php endif; ?>
            <a class="btn btn-outline-danger my-2 my-sm-0" href="<?= base_url('auth/logout') ?>">Logout</a>
        </form>
    </div>
</nav>