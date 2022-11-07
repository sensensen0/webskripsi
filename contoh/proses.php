<?php 
	include "koneksi.php";

	$iduser = $_POST['iduser'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$cmd = $_POST['cmd'];

	if($cmd == "Simpan"){
		mysqli_query($con, "insert into tbuser (nama, kelas) values('$nama','$kelas')");
		echo "###simpan";
	}else if($cmd == "Ubah"){
		mysqli_query($con, "update tbuser set nama='$nama',kelas='$kelas' where iduser='$iduser'");
		echo "###ubah";
	}else if($cmd == "Hapus"){
		mysqli_query($con, "delete from tbuser where iduser='$iduser'");
		echo "###hapus";
	}else{
		echo "###";
	}

	echo "###";
?>
<table border="1">
	<tr>
		<td>
			IdUser
		</td>
		<td>
			Nama
		</td>
		<td>
			Kelas
		</td>
		<td>
			Action
		</td>
	</tr>
	<?php 
		$sql = mysqli_query($con, "select * from tbuser");
		while($data = mysqli_fetch_array($sql)){
			$iduser = $data[0];
			$nama = $data[1];
			$kelas = $data[2];
			?>
				<tr>
					<td>
						<?php echo $iduser; ?>
					</td>
					<td>
						<?php echo $nama; ?>
					</td>
					<td>
						<?php echo $kelas; ?>
					</td>
					<td>
						<input type="button" value="edit" onclick="edit(<?php echo "'$iduser','$nama','$kelas'"; ?>)">
						<input type="button" value="hapus" onclick="hapus(<?php echo "'$iduser'"; ?>)">
					</td>
				</tr>
			<?php
		}
	?>
</table>