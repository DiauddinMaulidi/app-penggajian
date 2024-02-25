<?php
    
    require "../koneksi.php";

    if ( isset($_POST["tambah"]) ) {
        $email = trim(htmlspecialchars($_POST["email"]));
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $namaLengkap = trim(htmlspecialchars($_POST["namaLengkap"]));
        $ttl = $_POST["ttl"];
        $tanggal_masuk = $_POST["tanggal_masuk"];
        $jabatan = trim(htmlspecialchars($_POST["jabatan"]));
        $jumlah_gaji = $_POST["jumlah_gaji"];
        $alamat = $_POST["alamat"];

        $result = mysqli_query($conn, "INSERT INTO tb_karyawan VALUES ('', '$email', '$password', '$namaLengkap', '$ttl', '$alamat', '$tanggal_masuk', '$jabatan', '$jumlah_gaji') ");

        echo "<script>
            alert('Data berhasil ditambah');
            window.location = 'index.php';
        </script>";

    }


    if ( isset($_POST["update"]) ) {
        $id = $_POST['id'];
        $namaLengkap = trim(htmlspecialchars($_POST["namaLengkap"]));
        $ttl = $_POST["ttl"];
        $tanggal_masuk = $_POST["tanggal_masuk"];
        $jabatan = trim(htmlspecialchars($_POST["jabatan"]));
        $jumlah_gaji = $_POST["jumlah_gaji"];
        $alamat = $_POST["alamat"];

        $hasilUpdate = mysqli_query($conn, "UPDATE tb_karyawan SET
                                            nama_karyawan = '$namaLengkap',
                                            ttl = '$ttl',
                                            alamat = '$alamat',
                                            tanggal_masuk = '$tanggal_masuk',
                                            jabatan = '$jabatan',
                                            jumlah_gaji = '$jumlah_gaji'
                                            WHERE id_karyawan = '$id'
                                            ");

        echo "<script>
            alert('Data berhasil diupdate');
            window.location = 'index.php';
        </script>";

    }

    if ( isset($_GET["aksi"]) == "hapus-karyawan" ) {
        $id = $_GET["id"];

        $hapusRows = mysqli_query($conn, "DELETE FROM tb_karyawan WHERE id_karyawan='$id' ");
        echo "<script>
            alert('Data berhasil hapus');
            window.location = 'index.php';
        </script>";

    }


?>