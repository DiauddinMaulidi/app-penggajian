<?php
    
    require "../koneksi.php";

    if ( isset($_POST["tambah"]) ) {
        $namaLengkap = trim(htmlspecialchars($_POST["namaLengkap"]));
        $ttl = $_POST["ttl"];
        $tanggal_masuk = $_POST["tanggal_masuk"];
        $jabatan = trim(htmlspecialchars($_POST["jabatan"]));
        $jumlah_gaji = $_POST["jumlah_gaji"];
        $alamat = $_POST["alamat"];

        $result = mysqli_query($conn, "INSERT INTO tb_karyawan VALUES ('', '$namaLengkap', '$ttl', '$alamat', '$tanggal_masuk', '$jabatan', '$jumlah_gaji') ");

        echo "<script>
            alert('Data berhasil ditambah');
            window.location = 'index.php';
        </script>";

    }

?>