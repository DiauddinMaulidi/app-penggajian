<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Penggajian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Poppins:ital,wght@0,400;0,500;0,700;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg nav">
        <div class="container-fluid tinggi-nav">
            <a class="navbar-brand ms-5" href="#home">
                <h3><img src="assets/img/medical.png" class="logo me-2" alt="penggajian">Hrdgaji</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse position-absolute end-0 m-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item m-3">
                    <a class="nav-link" href="#fitur">Fitur</a>
                </li>
                <li class="nav-item m-3">
                    <a class="nav-link" href="#">Custumor Kami</a>
                </li>
                <li class="nav-item m-3">
                    <a class="nav-link" href="#">Kemitraan</a>
                </li>
                <li class="nav-item m-3">
                    <a class="nav-link daftar text-center text-white" href="#">Daftar</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- close navbar -->
    
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
                                        <h4>FLEXIBEL</h4>
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
                        <form action="" method="post">
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control rounded-4 w-75" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                            </div>
                            <div class="mb-5">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control rounded-4 w-75" id="exampleInputPassword1" placeholder="password">
                            </div>
                            <button type="submit" class="btn btn-primary rounded-4 w-75">Masuk</button>
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
                    <h3><img src="assets/img/medical.png" class="logo me-1" alt="penggajian">Hrdgaji</h3>
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












    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>