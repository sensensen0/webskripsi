<?php
    include "koneksi.php";
    
    $idsesikelas = $_POST['idsesikelas'];
    $idkelas = $_POST['idkelas'];
    $namasesi = $_POST['namasesi'];
    $harisesi = $_POST['harisesi'];
    $waktumulai = $_POST['waktumulai'];
    $cmd = $_POST['cmd'];

    if ($cmd == "Simpan"){
        mysqli_query($con, "insert into tbsesikelas (idkelas, namasesi, harisesi, waktumulai) values('$idkelas', '$namasesi', '$harisesi', '$waktumulai')");
        echo "###simpan";
    }else if($cmd == "Ubah") {
        mysqli_query($con, "update tbsesikelas set idkelas='$idkelas', namasesi='$namasesi', harisesi='$harisesi', waktumulai='$waktumulai' where idesesikelas='$idesesikelas'");
        echo "###ubah";
    }else if ($cmd == "Hapus") {
        mysqli_query($con, "delete from tbsesikelas where idesesikelas='$idesesikelas'");
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
                            <h4 class="card-title">Tabel Data</h4>
                            <table class="table table-responsive table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <td>ID Sesi Kelas</td>
                                        <td>Nama Kelas</td>
                                        <td>Nama Sesi</td>
                                        <td>Hari Sesi</td>
                                        <td>Waktu Mulai</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                            <?php 
                                $sql = mysqli_query($con, "select * from tbsesikelas");
                                while($data = mysqli_fetch_array($sql)){
                                    $idesesikelas = $data[0];
                                    $idkelas = $data[1];
                                    $namasesi = $data[2];
                                    $harisesi = $data[3];
                                    $waktumulai = $data[4];
                                    ?>
                                        <tbody>
                                            <td><?php echo $idesesikelas; ?></td>
                                            <td><?php echo $idkelas; ?></td>
                                            <td><?php echo $namasesi; ?></td>
                                            <td><?php echo $harisesi; ?></td>
                                            <td><?php echo $waktumulai; ?></td>
                                            <td>
                                                <input type="button" class="btn btn-primary btn-success col-auto mb-1" value="Ubah" onclick="ubah(<?php echo "'$idesesikelas', '$idkelas','$namasesi','$harisesi','$waktumulai'"; ?>)">
                                                <input type="button" class="btn btn-danger col-auto mb-1" value="Hapus" onclick="hapus(<?php echo "'$idesesikelas'"; ?>)">
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