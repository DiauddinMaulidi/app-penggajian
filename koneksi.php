<?php
    
    $conn = mysqli_connect("localhost", "root", "", "app_penggajian") or die("database error");

    $theUrl = "http://localhost/aplikasi-penggajian/";



    function waktuIndo($data) {
        $pecah = explode("-", $data);

        echo $pecah[2] . "-" . $pecah[1] . "-" . $pecah[0];

    }


    
?>