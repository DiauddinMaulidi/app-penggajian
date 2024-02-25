<?php

    require "../koneksi.php";
    
    if ( isset($_POST['register']) ) {
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
        $namaLengkap = trim(htmlspecialchars($_POST["namaLengkap"]));
        $ttl = $_POST["ttl"];
        $alamat = $_POST["alamat"];
        $tanggal_masuk = $_POST["tanggal_masuk"];
        $jabatan = trim(htmlspecialchars($_POST["jabatan"]));
        $jumlah_gaji = $_POST["jumlah_gaji"];

        $cekEmail = mysqli_query($conn, "SELECT * FROM tb_karyawan WHERE email='$email' ");

        if ( mysqli_num_rows($cekEmail) >= 1 ) {
            echo "<script>
                alert('Maaf, email yang anda gunakan sudah ada');
            </script>";
        } else {
            mysqli_query($conn, "INSERT INTO tb_karyawan VALUES ('', '$email', '$password', '$namaLengkap', '$ttl', '$alamat', '$tanggal_masuk', '$jabatan', '$jumlah_gaji') ");
            
            echo "<script>
                alert('Anda berhasil mendaftar');
                location.href = 'index.php';
            </script>";
            exit;
        }


    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="bg-daftar">
    <div class="wrapper">
        <div class="container formulir">
            
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" action="" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" id="exampleInputEmail" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="namaLengkap" id="exampleInputEmail" placeholder="namaLengkap">
                                    </div>
                                    <div class="m-3 d-block">
                                        <label for="ttl" class="form-label">TTL</label>
                                        <input type="date" class="form-control" name="ttl" id="ttl" placeholder="Tempat Tanggal Lahir...">
                                    </div>
                                    <div class="m-3 d-block">
                                        <label for="exampleInputEmail1" class="form-label d-block">Alamat</label>
                                        <textarea name="alamat" id="alamat" cols="50" rows="5"></textarea>
                                    </div>
                                    <div class="m-3 d-block">
                                        <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                                        <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk...">
                                    </div>
                                    <div class="ml-3 d-block">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan...">
                                    </div>
                                    <div class="m-3 d-block">
                                        <label for="jumlah_gaji" class="form-label">Jumlah Gaji</label>
                                        <input type="number" class="form-control" name="jumlah_gaji" id="jumlah_gaji" placeholder="Jumlah Gaji...">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="register">Register</button>
                                    </div>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="index.php">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>