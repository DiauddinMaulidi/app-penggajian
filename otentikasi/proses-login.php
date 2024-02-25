<?php
    session_start();
    
    require "../koneksi.php";

    if ( isset($_POST['login']) ) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $cekUser = mysqli_query($conn, "SELECT * FROM tb_karyawan WHERE email='$email' ");

        if ( mysqli_num_rows($cekUser) ) {
            $rows = mysqli_fetch_assoc($cekUser);
            if ( $rows["jabatan"] === "HRD" || $rows["jabatan"] === "hrd" ) {
                
                if ( password_verify($password, $rows["password"]) ) {

                    // session
                    $_SESSION["loginBro"] = true;
                    $_SESSION["userLogin"] = $email;
                    
                    echo "<script>
                            alert('anda berhasil login');
                            window.location = '../index.php';
                    </script>";
                    exit;

                } else {
                    echo "<script>
                            alert('password anda salah');
                            window.location = 'index.php';
                    </script>";
                    exit;
                }
            } else {
                echo "<script>
                        alert('anda bukan HRD');
                        window.location = 'index.php';
                </script>";
                exit;
            }
        } else {
            echo "<script>
                    alert('anda tidak punya akun');
                    window.location = 'index.php';
            </script>";
            exit;
        }
        
    }

?>
