<?php 
    include "koneksi.php";

    session_start();
    
    $idDaftarPemberkatan = $_POST['idDaftarPemberkatan'];
    $tanggalDaftar = date("d-m-Y");
    $username = $_SESSION['username'];
    $namaPasangan = $_POST['namaPasangan'];
    $tanggalPemberkatan = $_POST['tanggalPemberkatan'];
    $waktuPemberkatan = $_POST['waktuPemberkatan'];
    $namaOrtuPria = $_POST['namaOrtuPria'];
    $namaOrtuWanita = $_POST['namaOrtuWanita'];
    $statusVerifikasi = 0;
    $cmd = $_POST['cmd'];

    if($cmd == "Daftar") {

        $fileNameImage = "";
        
        if(isset($_FILES['lampirSuratBaptis']) && !empty($_FILES['lampirSuratBaptis'])){

            // Get the uploaded file details
            $file = $_FILES['lampirSuratBaptis'];
            $originalFileName = $file['name'];
            $tmpFilePath = $file['tmp_name'];
            

            // Generate a random string for the filename
            $randomString = uniqid();
            $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $fileNameImage = $randomString . '.' . $extension;

            // Move the uploaded file to a desired location
            $uploadDirectory = '../backend/uploads/suratbaptis/'; // Specify the directory where you want to save the uploaded image
            $destinationPath = $uploadDirectory . $fileNameImage;
            if (!move_uploaded_file($tmpFilePath, $destinationPath)) {
                $response = array('error' => 'Error moving the uploaded image.');
                echo json_encode($response);
            }
        } else $fileNameImage = "";
        
        if(isset($_FILES['lampirSertifikatPranikah']) && !empty($_FILES['lampirSertifikatPranikah'])){

            // Get the uploaded file details
            $file = $_FILES['lampirSertifikatPranikah'];
            $originalFileName = $file['name'];
            $tmpFilePath = $file['tmp_name'];
            

            // Generate a random string for the filename
            $randomString = uniqid();
            $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $fileNameImage = $randomString . '.' . $extension;

            // Move the uploaded file to a desired location
            $uploadDirectory = '../backend/uploads/sertifikatpranikah/'; // Specify the directory where you want to save the uploaded image
            $destinationPath = $uploadDirectory . $fileNameImage;
            if (!move_uploaded_file($tmpFilePath, $destinationPath)) {
                $response = array('error' => 'Error moving the uploaded image.');
                echo json_encode($response);
            }
        }
        
        $sql = "insert into tbdaftarpemberkatan (tanggalDaftar, username, namaPasangan, lampirSuratBaptis, lampirSertifikatPranikah, tanggalPemberkatan, waktuPemberkatan, namaOrtuPria, namaOrtuWanita, statusVerifikasi) 
        values('$tanggalDaftar', '$username', '$namaPasangan', '$fileNameImage', '$fileNameImage', '$tanggalPemberkatan', '$waktuPemberkatan', '$namaOrtuPria', '$namaOrtuWanita', '$statusVerifikasi')";

        mysqli_query($con, $sql);
        echo "###daftar";
    }
    mysqli_query($con, "UPDATE tbdaftarpemberkatan SET tanggalDaftar = CURDATE() WHERE tanggalDaftar = '0000-00-00'");
?>