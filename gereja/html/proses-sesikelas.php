<?php
    include "koneksi.php";
    
    $idsesikelas = $_POST['idsesikelas'];
    $idkelas = $_POST['idkelas'];
    $namasesi = $_POST['namasesi'];
    $harisesi = $_POST['harisesi'];
    $waktumulai = $_POST['waktumulai'];
    $waktuakhir = $_POST['waktuakhir'];
    $cmd = $_POST['cmd'];

    if ($cmd == "Simpan"){
        mysqli_query($con, "insert into tbsesikelas (idkelas, namasesi, harisesi, waktumulai, waktuakhir) values('$idkelas', '$namasesi', '$harisesi', '$waktumulai', '$waktuakhir')");
        echo "###simpan";
    }else if($cmd == "Ubah") {
        mysqli_query($con, "update tbsesikelas set idkelas='$idkelas', namasesi='$namasesi', harisesi='$harisesi', waktumulai='$waktumulai', waktuakhir = '$waktuakhir' where idsesikelas='$idsesikelas'");
        echo "###ubah";
    }else if ($cmd == "Hapus") {
        mysqli_query($con, "delete from tbsesikelas where idsesikelas='$idsesikelas'");
        echo "###hapus";
    }else {
        echo "###";
    }

    echo "###";
?>
<!DOCTYPE html>
    <head>
              
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Table Data</h4>
                            <table class="table table-responsive table-bordered">
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
                                $sql = mysqli_query($con, "select * from tbsesikelas inner join tbkelas on tbsesikelas.idkelas = tbkelas.idkelas");
                                while($data = mysqli_fetch_array($sql)){
                                    $idsesikelas = $data[0];
                                    $idkelas = $data[1];
                                    $namasesi = $data[2];
                                    $harisesi = $data[3];
                                    $waktumulai = $data[4];
                                    $waktuakhir = $data[5];
                                    $namakelas = $data['namakelas'];
                                    ?>
                                        <tbody>
                                            <td><?php echo $idsesikelas; ?></td>
                                            <td><?php echo $namakelas; ?></td>
                                            <td><?php echo $namasesi; ?></td>
                                            <td><?php echo $harisesi; ?></td>
                                            <td><?php echo $waktumulai; ?></td>
                                            <td><?php echo $waktuakhir; ?></td>
                                            <td>
                                                <input type="button" class="btn btn-primary btn-success col-md-4 mb-1" value="Ubah" onclick="ubah(<?php echo "'$idsesikelas', '$idkelas','$namasesi','$harisesi','$waktumulai','$waktuakhir'"; ?>)">
                                                <input type="button" class="btn btn-danger col-md-4 mb-1" value="Hapus" onclick="hapus(<?php echo "'$idsesikelas'"; ?>)">
                                            </td>
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