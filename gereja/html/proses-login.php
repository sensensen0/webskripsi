<?php
    include "koneksi.php";
    
    $idadmin = $_POST['idadmin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = $_POST['login'];

    $data = mysqli_query($con,"select * from tbadmin where username='$username' and password='$password'");
    $cek = mysqli_num_rows($data);

    if($cek > 0 ) {

    } else {
        header("location:login.php");    }
    
?>