<?php
    include "koneksi.php";
    
    $idjemaat = $_POST['idjemaat'];
    $tanggalmasuk = $_POST['tanggalmasuk'];
    $namajemaat = $_POST['namajemaat'];
    $tanggallahir = $_POST['tanggallahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];
    $cmd = $_POST['cmd'];

    if ($cmd == "Simpan"){
        mysqli_query($con, "insert into tbjemaat (tanggalmasuk, namajemaat, tanggallahir, jk, alamat, nohp, status, pekerjaan) values('$tanggalmasuk', '$namajemaat', '$tanggallahir', '$jk', '$alamat', '$nohp', '$status', '$pekerjaan')");
        echo "###simpan";
    }else if($cmd == "Ubah") {
        mysqli_query($con, "update tbjemaat set tanggalmasuk='$tanggalmasuk', namajemaat='$namajemaat', tanggallahir='$tanggallahir', jk='$jk', alamat='$alamat', nohp='$nohp', status='$status', pekerjaan='$pekerjaan' where idjemaat='$idjemaat'");
        echo "###ubah";
    }else if ($cmd == "Hapus") {
        mysqli_query($con, "delete from tbjemaat where idjemaat='$idjemaat'");
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
                max-height: 400px;
                overflow: auto;
                display:inline-block;
            }
        </style>          
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Tabel Data</h4>
                            <table class="table table-responsive table-bordered table-wrapper">
                                <thead class="table-dark">
                                    <tr>
                                        <td>ID Jemaat</td>
                                        <td>Tanggal Masuk</td>
                                        <td>Nama Jemaat</td>
                                        <td>Tanggal Lahir</td>
                                        <td>Jenis Kelamin</td>
                                        <td>Alamat</td>
                                        <td>No. HP</td>
                                        <td>Status</td>
                                        <td>Pekerjaan</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                            <?php 
                                $sql = mysqli_query($con, "select * from tbjemaat");
                                while($data = mysqli_fetch_array($sql)){
                                    $idjemaat = $data[0];
                                    $tanggalmasuk = $data[1];
                                    $namajemaat = $data[2];
                                    $tanggallahir = $data[3];
                                    $jk = $data[4];
                                    $alamat = $data[5];
                                    $nohp = $data[6];
                                    $status = $data[7];
                                    $pekerjaan = $data[8];
                                    ?>
                                        <tbody>
                                            <td><?php echo $idjemaat; ?></td>
                                            <td><?php echo $tanggalmasuk; ?></td>
                                            <td><?php echo $namajemaat; ?></td>
                                            <td><?php echo $tanggallahir; ?></td>
                                            <td><?php echo $jk; ?></td>
                                            <td><?php echo $alamat; ?></td>
                                            <td><?php echo $nohp; ?></td>
                                            <td><?php echo $status; ?></td>
                                            <td><?php echo $pekerjaan; ?></td>
                                            <td>
                                                <input type="button" class="btn btn-primary btn-success col-auto mb-1" value="Ubah" onclick="ubah(<?php echo "'$idjemaat', '$tanggalmasuk','$namajemaat','$tanggallahir','$jk','$alamat','$nohp','$status','$pekerjaan'"; ?>)">
                                                <input type="button" class="btn btn-danger col-auto mb-1" value="Hapus" onclick="hapus(<?php echo "'$idjemaat'"; ?>)">
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