<?php
    include "koneksi.php";
    
    $iddaftarkelas = $_POST['iddaftarkelas'];
    $idkelas = $_POST['idkelas'];
    $idjemaat = $_POST['idjemaat'];
    $namapasangan = $_POST['namapasangan'];
    $idsesikelas = $_POST['idsesikelas'];
    $cmd = $_POST['cmd'];

    if ($cmd == "Simpan"){
        mysqli_query($con, "insert into tbdaftarkelas (idkelas, idjemaat, namapasangan, idsesikelas) values('$idkelas', '$idjemaat', '$namapasangan', '$idsesikelas')");
        echo "###simpan";
    }else if($cmd == "Ubah") {
        mysqli_query($con, "update tbdaftarkelas set idkelas='$idkelas', idjemaat='$idjemaat', namapasangan='$namapasangan', idsesikelas='$idsesikelas'");
        echo "###ubah";
    }else if ($cmd == "Hapus") {
        mysqli_query($con, "delete from tbdaftarkelas where iddaftarkelas='$iddaftarkelas'");
        echo "###hapus";
    }else {
        echo "###";
    }

    echo "###";
?>
<!DOCTYPE html>
    <head>
        <!-- <style>
            .table-wrapper {
                max-height: 400px;
                overflow: auto;
                display:flex;
            }
        </style>           -->
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
                                        <td>ID Daftar Kelas</td>
                                        <td>Nama Kelas</td>
                                        <td>Nama Jemaat</td>
                                        <td>Nama Pasangan</td>
                                        <td>Sesi</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                            <?php 
                                $sql = mysqli_query($con, "select *  from (((tbdaftarkelas inner join tbkelas on tbdaftarkelas.idkelas = tbkelas.idkelas) inner join tbjemaat on tbdaftarkelas.idjemaat = tbjemaat.idjemaat) inner join tbsesikelas on tbdaftarkelas.idsesikelas = tbsesikelas.idsesikelas);");
                                while($data = mysqli_fetch_array($sql)){
                                    $iddaftarkelas = $data[0];
                                    $idkelas = $data[1];
                                    $idjemaat = $data[2];
                                    $namapasangan = $data[3];
                                    $idsesikelas = $data[4];
                                    $namakelas = $data['namakelas'];
                                    $namajemaat = $data['namajemaat'];
                                    $namasesi = $data['namasesi'];
                                    $harisesi = $data['harisesi'];
                                    $waktumulai = $data['waktumulai'];
                                    $waktuakhir = $data['waktuakhir'];
                                    ?>
                                        <tbody>
                                            <td><?php echo $iddaftarkelas; ?></td>
                                            <td><?php echo $namakelas; ?></td>
                                            <td><?php echo $namajemaat; ?></td>
                                            <td><?php echo $namapasangan; ?></td>
                                            <td><?php echo $namasesi . (": "). ("("). $harisesi .(": ") . $waktumulai .("-"). $waktuakhir .(")"); ?></td>
                                            <td class="text-center">
                                                <input type="button" class="btn btn-primary btn-success center col-md-auto mb-1" value="Ubah" onclick="ubah(<?php echo "'$iddaftarkelas', '$idkelas','$idjemaat','$namapasangan','$idsesikelas'"; ?>)">
                                                <input type="button" class="btn btn-danger col-md-auto mb-1" value="Hapus" onclick="hapus(<?php echo "'$iddaftarkelas'"; ?>)">
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