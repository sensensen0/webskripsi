<?php
    include "koneksi.php";
    
    $idberita = $_POST['idberita'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar = $_POST['gambar'];
    $file = $_POST['file'];
    $cmd = $_POST['cmd'];

    if ($cmd == "Simpan"){
        mysqli_query($con, "insert into tbberita (judul, isi, gambar, file) values('$judul', '$isi', '$gambar', '$file')");
        echo "###simpan";
    }else if($cmd == "Ubah") {
        mysqli_query($con, "update tbberita set judul='$judul', isi='$isi', gambar='$gambar', file='$file' where idberita='$idberita'");
        echo "###ubah";
    }else if ($cmd == "Hapus") {
        mysqli_query($con, "delete from tbberita where idberita='$idberita'");
        echo "###hapus";
    }else {
        echo "###";
    }

    echo "###";
?>
<!DOCTYPE html>
    <head>
        <style>
            /* .table-wrapper {
                max-height: 400px;
                overflow: auto;
                display:inline-block;
            } */
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
                                        <td>ID Berita</td>
                                        <td>Judul Berita</td>
                                        <td>Isi Berita</td>
                                        <td>Gambar Cover</td>
                                        <td>File Berita</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                            <?php 
                                $sql = mysqli_query($con, "select * from tbberita");
                                while($data = mysqli_fetch_array($sql)){
                                    $idberita = $data[0];
                                    $judul = $data[1];
                                    $isi = $data[2];
                                    $gambar = $data[3];
                                    $file = $data[4];
                                    ?>
                                        <tbody>
                                            <td><?php echo $idberita; ?></td>
                                            <td><?php echo $judul; ?></td>
                                            <td><?php echo $isi; ?></td>
                                            <td><?php echo $gambar; ?></td>
                                            <td><?php echo $file; ?></td>
                                            <td>
                                                <input type="button" class="btn btn-primary btn-success col-auto mb-1" value="Ubah" onclick="ubah(<?php echo "'$idberita', '$judul','$isi','$gambar','$file'"; ?>)">
                                                <input type="button" class="btn btn-danger col-auto mb-1" value="Hapus" onclick="hapus(<?php echo "'$idberita'"; ?>)">
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