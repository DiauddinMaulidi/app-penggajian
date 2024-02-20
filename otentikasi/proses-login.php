<?php
    
    require "../koneksi.php";

    if ( isset($_POST['login']) ) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $cekUser = mysqli_query($conn, "SELECT * FROM tb_login WHERE email='$email' ");
        if ( mysqli_num_rows($cekUser) === 1 ) {
            $row = mysqli_fetch_assoc($cekUser);
            
            if ( $row["password"] === $password ) {
                header("location: ../index.php");
                exit;
            } else {
                echo "<script>
                    alert('password salah');
                    window.location = 'index.php';
                </script>";
            }
        } else {
            echo "<script>
                alert('login gagal');
                window.location = 'index.php';
            </script>";
        }
        
    }

?>

<!-- 
    echo "<script>
            alert('berhasil')
        </script>;
        ";
-->