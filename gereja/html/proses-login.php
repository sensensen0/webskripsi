<?php
    include "koneksi.php";
    
    $idadmin = $_POST['idadmin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = $_POST['login'];

    $sql = mysqli_query($con, "select * from tbadmin");
    while($data = mysqli_fetch_array($sql)){
        $idadmin = $data[0];
        $username= $data[1];
        $password = $data[2];

        if($username == "username" && $password == "password") {
            echo "Berhasil login"
        } else {
            echo "Gagal login";
        }
    }

?>