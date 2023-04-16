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
                <td>Nama Lengkap</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
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
                    <td><?php echo $namaLengkap; ?></td>         
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>          
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
                    <td>Nama Lengkap</td>
                    <td>Nama Pasangan</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = ($result);
                    while($data = mysqli_fetch_array($sql)) {
                        $namaLengkap = $data[0];
                        $namaPasangan = $data[1];
                ?>
                    <tbody>
                        <td><?php echo $namaLengkap; ?></td> 
                        <td><?php echo $namaPasangan; ?></td>    
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                               
                    </tbody>
                <?php 
                    }
                ?>
            </tbody>
        </table>    
            </tbody>
        </table> <?php
    }
?>