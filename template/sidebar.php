<?php

        $email = $_SESSION['userLogin'];
        $row = mysqli_query($conn, "SELECT * FROM tb_login WHERE email='$email' ");
        // if ( mysqli_num_rows($row) ) {
            $result = mysqli_fetch_assoc($row);
        // }

        $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $hasil = explode("/", $uri_path);
        $theUri = $hasil[2];

?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= $result['nama_lengkap'] ?></div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $theUri == 'index.php' ? 'active' : null ?>">
                <a class="nav-link" href="<?= $theUrl ?>index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item <?= $theUri == 'karyawan' ? 'active' : null ?>">
                <a class="nav-link" href="<?= $theUrl ?>karyawan/index.php">
                    <i class="fa-solid fa-users-gear"></i>
                    <span>Data Karyawan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-database"></i>
                    <span>Data Absensi</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="kehadiran.php">Kehadiran</a>
                        <a class="collapse-item" href="lembur.php">Lembur</a>
                        <a class="collapse-item" href="cuti.php">Cuti</a>
                        <a class="collapse-item" href="sakit.php">Sakit</a>
                        <a class="collapse-item" href="izin.php">Izin</a>
                        <a class="collapse-item" href="alpha.php">Alpha</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= $theUri == 'tables' ? 'active' : null ?>">
                <a class="nav-link" href="<?= $theUrl ?>tables/tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->