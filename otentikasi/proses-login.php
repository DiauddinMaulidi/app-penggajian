<?php
    session_start();
    
    require "../koneksi.php";

    if ( isset($_POST['login']) ) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $cekUser = mysqli_query($conn, "SELECT * FROM tb_login WHERE email='$email' ");
        if ( mysqli_num_rows($cekUser) ) {
            $row = mysqli_fetch_assoc($cekUser);
            
            if ( password_verify($password, $row["password"])) {

                // set session
                $_SESSION['loginBro'] = true;
                $_SESSION['userLogin'] = $email;

                echo "<script>
                    alert('anda berhasil login');
                    window.location = '../index.php';
                </script>";
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
