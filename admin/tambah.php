<?php

    session_start();
    if ( !isset($_SESSION['loginBro']) ) {
        header('location: otentikasi/index.php');
        exit;
    }

    require "../koneksi.php";
    require "../template/header.php";
    require "../template/sidebar.php";
    require "../template/navbar.php";

?>


<form action="proses-karyawan.php" method="post" class="form">
    <div class="row">
        <div class="col-md-12 d-block">
            <div class="ml-3 d-block">
                <label for="namaLengkap" class="form-label">Nama HRD</label>
                <input type="text" class="form-control" name="namaLengkap" id="namaLengkap" placeholder="Nama Lengkap...">
            </div>
            <div class="m-3 d-block">
                <label for="ttl" class="form-label">email</label>
                <input type="email" class="form-control" name="ttl" id="ttl" placeholder="Tempat Tanggal Lahir...">
            </div>
            <div class="m-3 d-block">
                <label for="tanggal_masuk" class="form-label">password</label>
                <input type="password" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk...">
            </div>
            <button type="submit" class="ml-3 bg-primary text-white border-0" name="tambah">Tambah</button>
        </div>
    </div>
</form>


<?php
    require "../template/footer.php";
?>