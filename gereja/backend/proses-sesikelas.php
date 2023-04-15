<?php
    include "koneksi.php";
    error_reporting(0);

    $idSesiKelas = $_POST['idSesiKelas'];
    $idKelas = $_POST['idKelas'];
    $namaSesi = $_POST['namaSesi'];
    $hariSesi = $_POST['hariSesi'];
    $waktuMulai = $_POST['waktuMulai'];
    $waktuAkhir = $_POST['waktuAkhir'];
    $cmd = $_POST['cmd'];

    if ($cmd == "Simpan"){
        $query = "SELECT COUNT(*) as count FROM tbsesikelas WHERE idKelas ='$idKelas' AND namaSesi = '$namaSesi'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
        if ($count > 0) {
            echo '###namasesiada';
        } else {
            mysqli_query($con, "insert into tbsesikelas (idKelas, namaSesi, hariSesi, waktuMulai, waktuAkhir) values('$idKelas', '$namaSesi', '$hariSesi', '$waktuMulai', '$waktuAkhir')");
            echo "###simpan";
        }
    }else if($cmd == "Ubah") {
        $query = "SELECT COUNT(*) as count FROM tbsesikelas WHERE idKelas ='$idKelas' AND namaSesi = '$namaSesi'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
        if ($count > 0) {
            echo '###namasesiada';
        } else {
            mysqli_query($con, "update tbsesikelas set idKelas='$idKelas', namaSesi='$namaSesi', hariSesi='$hariSesi', waktuMulai='$waktuMulai', waktuAkhir = '$waktuAkhir' where idSesiKelas='$idSesiKelas'");
            echo "###ubah";
        }
    }else if ($cmd == "Hapus") {
        mysqli_query($con, "delete from tbsesikelas where idSesiKelas='$idSesiKelas'");
        echo "###hapus";
    }else {
        echo "###";
    }

    echo "###";
?>
<!DOCTYPE html>
    <head>
        <style>
            .table-wrapper {
                /* max-height: 400px;
                max-width: 100%;
                overflow: auto;
                display:inline-block; */
            }
        </style>                  
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Table Data</h4>
                            <table class="table table-responsive-md table-bordered table-wrapper">
                                <thead class="table-dark">
                                    <tr>
                                        <td>ID Sesi Kelas</td>
                                        <td>Nama Kelas</td>
                                        <td>Nama Sesi</td>
                                        <td>Hari Sesi</td>
                                        <td>Waktu Mulai</td>
                                        <td>Waktu Akhir</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                            <?php 
                                $sql = mysqli_query($con, "select * from tbsesikelas inner join tbkelas on tbsesikelas.idKelas = tbkelas.idKelas");
                                while($data = mysqli_fetch_array($sql)){
                                    $idSesiKelas = $data[0];
                                    $idKelas = $data[1];
                                    $namaSesi = $data[2];
                                    $hariSesi = $data[3];
                                    $waktuMulai = $data[4];
                                    $waktuAkhir = $data[5];
                                    $namaKelas = $data['namaKelas'];
                                    ?>
                                        <tbody class="tr-body">
                                            <tr>
                                                <td><?php echo $idSesiKelas; ?></td>
                                                <td><?php echo $namaKelas; ?></td>
                                                <td><?php echo $namaSesi; ?></td>
                                                <td><?php echo $hariSesi; ?></td>
                                                <td><?php echo $waktuMulai; ?></td>
                                                <td><?php echo $waktuAkhir; ?></td>
                                                <td>
                                                    <input type="button" class="btn btn-primary btn-success col-md-4 mb-1" value="Ubah" onclick="ubah(<?php echo "'$idSesiKelas', '$idKelas','$namaSesi','$hariSesi','$waktuMulai','$waktuAkhir'"; ?>)">
                                                    <input type="button" class="btn btn-danger col-md-4 mb-1" value="Hapus" onclick="hapus(<?php echo "'$idSesiKelas'"; ?>)">
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php
                                }
                            ?>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </body>
</html>