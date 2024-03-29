<?php
    session_start();
    if ( !isset($_SESSION['loginBro']) ) {
        header('location: otentikasi/index.php');
        exit;
    }

    require "koneksi.php";

    $row = mysqli_query($conn, "SELECT * FROM tb_karyawan");
    $jmlhKaryawan = mysqli_num_rows($row);

    require "template/header.php";
    require "template/sidebar.php";
    require "template/navbar.php";

?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Karyawan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlhKaryawan; ?> orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Masuk hari ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">48 orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-calendar-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Pengeluaran bulan ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">50.000.000 Juta</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->


<?php require "template/footer.php"; ?>