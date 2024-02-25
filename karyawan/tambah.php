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
        <div class="col-md-6 d-block">
            <div class="ml-3 d-block">
                <label for="namaLengkap" class="form-label">Nama Karyawan</label>
                <input type="text" class="form-control" name="namaLengkap" id="namaLengkap" placeholder="Nama Lengkap...">
            </div>
            <div class="m-3 d-block">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email...">
            </div>
            <div class="m-3 d-block">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password...">
            </div>
            <div class="m-3 d-block">
                <label for="ttl" class="form-label">TTL</label>
                <input type="date" class="form-control" name="ttl" id="ttl" placeholder="Tempat Tanggal Lahir...">
            </div>
            <div class="m-3 d-block">
                <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk...">
            </div>
        </div>
        <div class="col-md-6 d-block kanan">
            <div class="ml-3 d-block">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan...">
            </div>
            <div class="m-3 d-block">
                <label for="jumlah_gaji" class="form-label">Jumlah Gaji</label>
                <input type="number" class="form-control" name="jumlah_gaji" id="jumlah_gaji" placeholder="Jumlah Gaji...">
            </div>
            <div class="m-3 d-block">
                <label for="exampleInputEmail1" class="form-label d-block">Alamat</label>
                <textarea name="alamat" id="alamat" cols="50" rows="5"></textarea>
            </div>
            <button type="submit" class="ml-3 bg-primary text-white border-0" name="tambah">Tambah</button>
        </div>
    </div>
</form>


<?php
    require "../template/footer.php";
?>