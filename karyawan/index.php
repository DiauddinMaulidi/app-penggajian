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

    $row = mysqli_query($conn, "SELECT * FROM tb_karyawan");
    // $rowHead = mysqli_num_rows($row);

?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Karyawan</h1>
   
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="tombolTambah mb-4">
                        <a href="tambah.php" class="text-decoration-none text-white me-5">Tambah Karyawan
                            <i class="fa-solid fa-user-plus"></i>
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Nama Karyawan</th>
                                    <th>TTL</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Jabatan</th>
                                    <th>Gaji</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $plus = 1;
                                    while ($hasil = mysqli_fetch_assoc($row)) {
                                ?>
                                    <tr>
                                        <td><?= $plus++ ?></td>
                                        <td><?= $hasil["nama_karyawan"] ?></td>
                                        <td><?= waktuIndo($hasil["ttl"]) ?></td>
                                        <td><?= $hasil["alamat"] ?></td>
                                        <td><?= waktuIndo($hasil["tanggal_masuk"]) ?></td>
                                        <td><?= $hasil["jabatan"] ?></td>
                                        <td><?= $hasil["jumlah_gaji"] ?></td>
                                        <td>
                                            <a href="edit.php?id=<?= $hasil["id_karyawan"] ?>" class="text-decoration-none text-success" title="edit" > <i class="fa-solid fa-pen-to-square"></i> </a>
                                            |
                                            <a href="proses-karyawan.php?id=<?= $hasil['id_karyawan'] ?>&aksi=hapus-karyawan" class="text-danger" title="hapus" > <i class="fa-solid fa-trash"></i> </a>
                                            
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </div>
    <!-- /.container-fluid -->

<?php require "../template/footer.php" ?>