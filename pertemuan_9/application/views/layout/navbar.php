<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark sticky-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url() ?>" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="w-100 d-flex justify-content-center">
                    <div class="input-group input-group-sm w-75">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link">
        <img src="<?= base_url('assets/back-end/template/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WebAdmin 3.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/back-end/template/') ?>dist/img/kafe3.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <!-- tampilkan nama yang sedang login, nama mengambil dari database -->
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('name') ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item text-center">
                    <a href="<?= base_url('landing/index') ?>" class="nav-link border border-info bg-info">
                        <i class="nav-icon bi bi-house-door text-white"></i>
                        <p class="text-white">
                            Landing Pages
                        </p>
                    </a>
                </li>
                <li class="nav-item border border-info" style="border-radius: 5px;">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-plus"></i>
                        <p>
                            Data Kampus
                            <i class="right fas fa-angle-left"></i>
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>prodi/" class="nav-link <?= ($title == 'Web Admin | Data Prodi') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Program Studi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>dosen/" class="nav-link <?= ($title == 'Web Admin | Data Dosen') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>mahasiswa/" class="nav-link <?= ($title == 'Web Admin | Data Mahasiswa') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Mahasiswa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mt-5 d-flex flex-column-reverse align-content-start">
                    <a href="<?= base_url('auth/logout') ?>" class="nav-link border border-warning text-center bg-warning">
                        <i class="nav-icon bi bi-box-arrow-left text-white"></i>
                        <p class="text-white">
                            LOGOUT
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>