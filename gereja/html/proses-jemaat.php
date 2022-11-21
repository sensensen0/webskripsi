<?php
    include "koneksi.php";
    
    $idjemaat = $_POST['idjemaat'];
    $tanggalmasuk = $_POST['tanggalmasuk'];
    $namajemaat = $_POST['namajemaat'];
    $tgllahir = $_POST['tgllahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];
    $cmd = $_POST['cmd'];

    if ($cmd == "Simpan"){
        mysqli_query($con, "insert into tbjemaat (tanggalmasuk, namajemaat, tgllahir, jk, alamat, nohp, status, pekerjaan) values('$tanggalmasuk', '$namajemaat', '$tgllahir', '$jk', '$alamat', '$nohp', '$status', '$pekerjaan')");
        echo "###simpan";
    }else if($cmd == "Ubah")

    if($cek > 0 ) {

    } else {
        header("location:login.php");    }
    
?>