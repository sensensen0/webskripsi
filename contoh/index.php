<!DOCTYPE html>
<html>
<head>
	<title>intelinsidenvidia</title>
	<?php 
		include "koneksi.php";
	?>
</head>
<body onload="loading()">
	<table>
		<tr>
			<td>
				Nama
			</td>
			<td>
				<input type="text" id="nama">
			</td>
		</tr>
		<tr>
			<td>
				Kelas
			</td>
			<td>
				<input type="text" id="kelas">
			</td>
		</tr>
		<tr>
			<td>
				Nama siswa
			</td>
			<td>
				<select>
					<option value="" hidden>--- Pilih Nama ---</option>
					<?php 
						$sql = mysqli_query($con, "select * from tbuser");
						while($data = mysqli_fetch_array($sql)){
							$nama = $data['nama'];
							?>
								<option><?php echo $nama; ?></option>
							<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="button" id="cmd" value="Simpan" onclick="simpan()">
				<input type="button" value="Reset" onclick="resetkan()">
			</td>
		</tr>
	</table>
	<div id="myTable"></div>
</body>
<script type="text/javascript">
	var iduserskrg = "";

	function ajaxku(url, data){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var dataku = this.responseText;

				var bagi = dataku.split("###");

				if(bagi[1] == "simpan"){
					alert("Telah tersimpan");
				}else if(bagi[1] == "ubah"){
					alert("Telah terubah");
				}else if(bagi[1] == "hapus"){
					alert("Telah terhapus");
				}

				document.getElementById("myTable").innerHTML = bagi[2];
			}
		};
		xhttp.open("POST", url, true);
		xhttp.send(data);
	}

	function resetkan(){
		document.getElementById("nama").value = "";
		document.getElementById("kelas").value = "";
		document.getElementById("cmd").value = "Simpan";
	}

	function simpan(){
		var nama = document.getElementById("nama").value;
		var kelas = document.getElementById("kelas").value;
		var cmd = document.getElementById("cmd").value;

		var data = new FormData();
		data.append("nama", nama);
		data.append("kelas", kelas);
		data.append("cmd", cmd);

		if(cmd == "Ubah"){
			if(confirm("Apakah anda ingin mengubah data ini?")){
				data.append("iduser", iduserskrg);
				ajaxku("proses.php", data);				
			}
		}else{
			ajaxku("proses.php", data);
		}

		resetkan();
	}

	function loading(){
		ajaxku("proses.php");
	}

	function edit(iduser, nama, kelas){
		iduserskrg = iduser;
		document.getElementById("nama").value = nama;
		document.getElementById("kelas").value = kelas;
		document.getElementById("cmd").value = "Ubah";
	}

	function hapus(iduser){
		if(confirm("apakah anda yakin ingin menghilangkan data ini selamanyaaaa ????!??!?!?!?")){
			var data = new FormData();
			data.append("cmd", "Hapus");
			data.append("iduser", iduser);

			ajaxku("proses.php", data);
		}
	}
</script>
</html>