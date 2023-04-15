<?php 
    include "koneksi.php";
    
    $kategori = $_GET['kategori'];
    if ($kategori == "pendaftaranKelasBaptis") {
        //data pendaftaran kelas baptis
        $sql = "SELECT * FROM tbdaftarkelasbaptis inner join tbuser on tbdaftarkelasbaptis.username = tbuser.username";
        $result = $con->query($sql);
?>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <td>ID Daftar</td>
                <td>Tanggal Daftar</td>
                <td>Username</td>
                <td>Nama Lengkap</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql = ($result);
                while($data = mysqli_fetch_array($sql)) {
                    $idDaftarKelasBaptis = $data[0];
                    $tanggalDaftar = $data[1];
                    $username = $data[2];
                    $namaLengkap = $data[3];
            ?>
                <tbody>
                    <td><?php echo $idDaftarKelasBaptis; ?></td>
                    <td><?php echo $tanggalDaftar; ?></td>
                    <td><?php echo $username; ?></td>
                    <td><?php echo $namaLengkap; ?></td>                   
                </tbody>
            <?php 
                }
            ?>
        </tbody>
    </table>
<?php 
    } else if ($kategori == "pendaftaranPembaptisan") {
        //data pendaftaran pembaptisan
        $sql = "SELECT * FROM tbdaftarbaptis inner join tbuser on tbdaftarbaptis.username = tbuser.username";
        $result = $con->query($sql);
?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <td>ID Daftar</td>
                    <td>Tanggal Daftar</td>
                    <td>Username</td>
                    <td>Nama Lengkap</td>
                    <td>Opsi Baptis</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = ($result);
                    while($data = mysqli_fetch_array($sql)) {
                        $idDaftarKelasBaptis = $data[0];
                        $tanggalDaftar = $data[1];
                        $username = $data[2];
                        $namaLengkap = $data[3];
                        $opsiBaptis = $data[4];
                ?>
                    <tbody>
                        <td><?php echo $idDaftarKelasBaptis; ?></td>
                        <td><?php echo $tanggalDaftar; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $namaLengkap; ?></td> 
                        <td><?php echo $opsiBaptis; ?></td>                   
                    </tbody>
                <?php 
                    }
                ?>
            </tbody>
        </table>
<?php
    } else if ($kategori == "pendaftaranKelasBimbinganPranikah")  {
        //data pendaftaran kelas bimbingan pranikah
        $sql = "SELECT * FROM tbdaftarpranikah";
        $result = $con->query($sql);
        ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <td>ID Daftar</td>
                    <td>Tanggal Daftar</td>
                    <td>Username</td>
                    <td>Nama Lengkap</td>
                    <td>Nama Pasangan</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = ($result);
                    while($data = mysqli_fetch_array($sql)) {
                        $idDaftarKelasBaptis = $data[0];
                        $tanggalDaftar = $data[1];
                        $username = $data[2];
                        $namaLengkap = $data[3];
                        $namaPasangan = $data[4];
                ?>
                    <tbody>
                        <td><?php echo $idDaftarPranikah; ?></td>
                        <td><?php echo $tanggalDaftar; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $namaLengkap; ?></td> 
                        <td><?php echo $namaPasangan; ?></td>                                         
                    </tbody>
                <?php 
                    }
                ?>
            </tbody>
        </table>
<?php
    } else if ($kategori == "pendaftaranPemberkatanPernikahan") {
        //data pendaftaran pemberkatan pernikahan
        $sql = "SELECT * FROM tbdaftarpemberkatan inner join tbuser on tbdaftarpemberkatan.username = tbuser.username";
        $result = $con->query($sql);
        ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <td>ID Daftar</td>
                    <td>Tanggal Daftar</td>
                    <td>Username</td>
                    <td>Nama Lengkap</td>
                    <td>Nama Pasangan</td>
                    <td>Tanggal Pemberkatan</td>
                    <td>Waktu Pemberkatan</td>
                    <td>Nama Orang Tua Pria</td>
                    <td>Nama Orang Tua Wanita</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = ($result);
                    while($data = mysqli_fetch_array($sql)) {
                        $idDaftarKelasBaptis = $data[0];
                        $tanggalDaftar = $data[1];
                        $username = $data[2];
                        $namaLengkap = $data[3];
                        $namaPasangan = $data[4];
                        $tanggalPemberkatan = $data[5];
                        $waktuPemberkatan = $data[6];
                        $namaOrtuPria = $data[7];
                        $namaOrtuWanita = $data[8];
                ?>
                    <tbody>
                        <td><?php echo $idDaftarPemberkatan; ?></td>
                        <td><?php echo $tanggalDaftar; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $namaLengkap; ?></td> 
                        <td><?php echo $tanggalPemberkatan; ?></td>
                        <td><?php echo $waktuPemberkatan; ?></td>
                        <td><?php echo $namaOrtuPria; ?></td> 
                        <td><?php echo $namaOrtuWanita; ?></td>                                          
                    </tbody>
                    <hr>
                    <div class="text-center">
                        <input type="button" class="btn btn-primary">Download
                    </div>
                <?php 
                    }
                ?>
            </tbody>
        </table> <?php
?>
<?php
    } else if ($kategori == "pendaftaranPemberkatanPernikahan") {
        //data pendaftaran pemberkatan pernikahan
        $sql = "SELECT * FROM tbdaftarpemberkatan inner join tbuser on tbdaftarpemberkatan.username = tbuser.username";
        $result = $con->query($sql);
        ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <td>ID Daftar</td>
                    <td>Tanggal Daftar</td>
                    <td>Username</td>
                    <td>Nama Lengkap</td>
                    <td>Nama Pasangan</td>
                    <td>Tanggal Pemberkatan</td>
                    <td>Waktu Pemberkatan</td>
                    <td>Nama Orang Tua Pria</td>
                    <td>Nama Orang Tua Wanita</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = ($result);
                    while($data = mysqli_fetch_array($sql)) {
                        $idDaftarKelasBaptis = $data[0];
                        $tanggalDaftar = $data[1];
                        $username = $data[2];
                        $namaLengkap = $data[3];
                        $namaPasangan = $data[4];
                        $tanggalPemberkatan = $data[5];
                        $waktuPemberkatan = $data[6];
                        $namaOrtuPria = $data[7];
                        $namaOrtuWanita = $data[8];
                ?>
                    <tbody>
                        <td><?php echo $idDaftarPemberkatan; ?></td>
                        <td><?php echo $tanggalDaftar; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $namaLengkap; ?></td> 
                        <td><?php echo $tanggalPemberkatan; ?></td>
                        <td><?php echo $waktuPemberkatan; ?></td>
                        <td><?php echo $namaOrtuPria; ?></td> 
                        <td><?php echo $namaOrtuWanita; ?></td>                                          
                    </tbody>
                    <hr>
                    <div class="text-center">
                        <input type="button" class="btn btn-primary">Download
                    </div>
                <?php 
                    }
                ?>
            </tbody>
        </table> <?php
    }
?>