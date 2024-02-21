<?php
    session_start();

    if ( isset($_SESSION['loginBro']) ) {
        header("location: ../index.php");
        exit();
    }
    
    require "template/header.php";
    require "template/navbar.php";

?>

<!-- section -->
<section class="hero" id="home">
    <main class="content">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div id="carouselExampleIndicators" class="carousel slide carou" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <h4>HRDGAJI</h4>
                                    <p>Aplikasi yang digunakan untuk mengelola dan mengatur pembayaran gaji karyawan. Melalui aplikasi ini, penyaluran gaji karyawan akan lebih mudah.</p>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <h4>FLEXIBLE</h4>
                                    <p>Sangat mudah untuk mengelola karyawan, pekerja harian, relawan, karyawan outsourcing, magang di perusahaan atau proyek Anda</p>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <h4>AUTOMATIC</h4>
                                    <p>Lakukan absensi, pengajuan cuti, kasbon, kalkulasi gaji, asuransi, pph 21 dan administrasi hrd lainnya secara otomatis dan realtime</p>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <h4>CLOUD TECHNOLOGY</h4>
                                    <p>Menggunakan teknologi Cloud sehingga aplikasi dan data bisa diakses dari mana saja dan kapan saja</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center text-white">
                        <h3>Memiliki Akun?</h3>
                        <p>Login jika sudah memiliki akun</p>
                    </div>
                    <form action="proses-login.php" method="post">
                        <div class="mb-4">
                            <input type="email" name="email" class="form-control rounded-4 w-75" id="email" aria-describedby="emailHelp" placeholder="email">
                        </div>
                        <div class="mb-5">
                            <input type="password" name="password" class="form-control rounded-4 w-75" id="password" placeholder="password">
                        </div>
                        <button type="submit" class="btn btn-primary rounded-4 w-75" name="login">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</section>
<!-- close section -->

<!-- fitur -->
<section class="fitur" id="fitur">
    <div class="container text-center tag-fitur">
        <div class="row">
            <div class="col-md-12">
                <h3><img src="../assets/img/medical.png" class="logo me-1" alt="penggajian">Hrdgaji</h3>
                <p>Dapatkan semua fitur Hrdpintar yang akan memudahkan perusahaan dalam manajemen sumber daya manusia dan keuangan perusahaan</p>
            </div>
        </div>
        <div class="row child">
            <div class="col-md-3 mb-4">
            <div class="card" style="width: 15rem;">
                <i class="fa-solid fa-users-gear icon-100"></i>
                <div class="card-body">
                    <h5 class="card-title">Biodata</h5>
                    <p class="card-text">Kemudahan dalam mengelola data karyawan & pelamar di perusahaan</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card" style="width: 15rem;">
                <i class="fa-solid fa-calendar-check icon-100"></i>
                <div class="card-body">
                    <h5 class="card-title">Jadwal Kerja (Shifting)</h5>
                    <p class="card-text">Jadwal jam kerja atau shifting diatur dengan mudah dan tidak rumit</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card" style="width: 15rem;">
                <i class="fa-solid fa-money-check-dollar icon-100"></i>
                <div class="card-body">
                    <h5 class="card-title">Gaji</h5>
                    <p class="card-text">Kalkulasi insentif, potongan hingga gaji final lebih akurat secara realtime dan otomatis</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card" style="width: 15rem;">
                <i class="fa-solid fa-calendar-xmark icon-100"></i>
                <div class="card-body">
                    <h5 class="card-title">Cuti & Izin</h5>
                    <p class="card-text">Pengajuan dan persetujuan cuti & izin jadi lebih mudah</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card" style="width: 15rem;">
                <i class="fa-regular fa-calendar-check icon-100"></i>
                <div class="card-body">
                    <h5 class="card-title">Kehadiran</h5>
                    <p class="card-text">Absensi & visit karyawan lebih mudah dengan smartphone karyawan</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card" style="width: 15rem;">
                <i class="fa-regular fa-face-tired icon-100"></i>
                <div class="card-body">
                    <h5 class="card-title">Lembur</h5>
                    <p class="card-text">Overtime dan jam kerja tambahan mudah untuk dihitung & diajukan</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- close fitur -->

<!-- Customor kami -->
<section class="customor" id="customor">
    <h3>OUR CUSTOMOR</h3>
    <p><b>HRDGAJI</b> telah memudahkan pengelolaan administrasi karyawan di berbagai perusahaan dan UKM</p>
    <div class="container mt-5 text-center">
        
        <div class="row">
            <div class="col">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner thumb1">
                        <?php for ($i=1; $i <= 3; $i++) { ?>
                            <div class="carousel-item active" data-bs-interval="4000">
                                <img src="../assets/img/meeting<?= $i ?>.jpg" class="d-block  w-100">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner thumb2">
                        <?php for ($i=4; $i <= 6; $i++) { ?>
                            <div class="carousel-item active" data-bs-interval="4000">
                                <img src="../assets/img/meeting<?= $i ?>.jpg" class="d-block  w-100">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Clode Customor kami -->


<?php
    require "template/footer.php";
?>