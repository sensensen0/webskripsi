<?php

include 'koneksi.php';

$idkelas = $_GET['idkelas'];

$sqlSesiKelas = "SELECT * FROM tbsesikelas WHERE idkelas = '$idkelas'";
$querySesiKelas = mysqli_query($con, $sqlSesiKelas);
$resultSesiKelas = mysqli_fetch_all($querySesiKelas, MYSQLI_ASSOC);

echo json_encode($resultSesiKelas);

?>