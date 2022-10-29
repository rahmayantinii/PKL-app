<body id="page-top"> 

    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-dollar-sign fa-2x text-gray-100"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Uang kas</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/index'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('jabatan/index'); ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Jabatan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/index'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('siswa/index') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Siswa</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('aset/index') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Aset</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pendataan
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="index" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pemasukan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('uangkas/index'); ?>">
                        Data Uang Kas</a>
                        
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTri"
                    aria-expanded="true" aria-controls="collapseTri">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Pengeluaran</span>
                </a>
                <div id="collapseTri" class="collapse" aria-labelledby="headingTri" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('pengeluaran/index'); ?>">
                        Data Pengeluaran</a>
                        <a class="collapse-item" href="<?= base_url('r_pengeluaran/index'); ?>">Riwayat Pengeluaran</a>
                    </div>
                </div>
            </li>

            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
    </div>
</body>