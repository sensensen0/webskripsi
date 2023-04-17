<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kelas Pembaptisan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        .warnabg {
            background-color: rgb(77, 77, 77);
        }
    </style>
</head>
<body>
    <div class="container-fluid vh-100 vw-100 ">
        <div class="warnabg row text-center mb-3">
            <a href="index.htm"><img src="../assets/img/logo.png" alt="Logo gkkb serdam" width="120px" height="120px"></a>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <h3 class="text-center mt-3 mb-4">Pendaftaran Kelas Baptis</h3>
            <div class="col-md-6">
                <form action="" id="form-regisKelasBaptis" class="border border-dark px-5 py-3 border-opacity-25 rounded-3">
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" id="namaLengkap" class="form-control form-input" placeholder="">
                    </div>
                    <div class="mb-3">
                        <div>
                            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="border border-opacity-25 rounded-2 ps-3 pb-2 justify-content-center align-items-center">
                            <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="laki" value="Laki-Laki">
                                <label class="form-check-label" for="laki">
                                  Laki-Laki
                                </label>
                             </div>
                              <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="Perempuan">
                                <label class="form-check-label" for="perempuan">
                                  Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                        <input type="text" id="tempatLahir" class="form-control form-input">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="tanggalLahir" class="form-control form-input">
                    </div>
                    <div class="mb-3">
                        <label for="noHp" class="form-label">Nomor Handphone</label>
                        <input type="text" id="noHp" class="form-control form-input" placeholder="Masukkan nomor handphone">
                    </div>
                    <div class="mb-3">
                        <label for="alamatLengkap" class="form-label">Alamat Lengkap</label>
                        <input type="text" id="alamatLengkap" class="form-control form-input" placeholder="Masukkan Alamat Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Masukan provinsi" required>
                      </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota" required>
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukan kecamatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelurahan" class="form-label">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Masukan kelurahan" required>
                    </div>
                    <div class="mb-3">
                        <label for="kodePos" class="form-label">Kode Pos</label>
                        <input type="number" class="form-control" id="kodePos" name="kodePos" placeholder="Masukan kode pos" oninput="validasiKodePos()" required>
                        <span id="errorMsg" style="color: red;"></span>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <div class="">
                            <select name="pekerjaan" id="pekerjaan" class="form-select">
                              <option disabled selected>-- Pilih pekerjaan --</option>
                              <option value="Tidak bekerja">Tidak bekerja</option>
                              <option value="Pelajar">Pelajar/Mahasiswa</option>
                              <option value="Karyawan">Karyawan</option>
                              <option value="Pengusaha">Pengusaha</option>
                              <option value="Self-employed">Self-Employed</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="konfirmasi" class="form-label">Apakah anda bersedia mengikuti kelas katekisasi?</label>
                        <div class="pb-2 justify-content-center align-items-center">
                            <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="konfirmasi" id="ya" value="Ya">
                                <label class="form-check-label" for="ya">
                                  Ya
                                </label>
                             </div>
                              <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="konfirmasi" id="tidak" value="Tidak">
                                <label class="form-check-label" for="tidak">
                                  Tidak
                                </label>
                            </div>
                        </div>
                    </div>                    
                    <div class="text-center">
                        <input type="button" class="btn btn-primary btn-block" onclick="daftar()">Daftar
                        <input type="button" id="batal" class="btn btn-danger btn-block">Batal
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        var usernameSkrg = "";

        function ajaxku(url, data){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            var dataku = this.responseText;

            var bagi = dataku.split("###");

            if(bagi[1] == "daftar"){
                alert("Anda telah terdaftar!");
            }else if (bagi[1] == "ubah") {
                alert("Data telah berubah");
            }else if (bagi[1] == "hapus") {
                alert("Data telah terhapus");
            }

            // document.getElementById("tableku").innerHTML = bagi[2]
            }
        };
            xhttp.open("POST", url, true);
            xhttp.send(data);
        }

        function loading(){
        // document.getElementById("pasangan").style.display = "none";
            ajaxku("proses-daftarkb.php");
        }

        // function resetForm(){
        // document.getElementById("idkelas").value = "";
        // document.getElementById("username").value = "";
        // document.getElementById("namapasangan").value = "";
        // document.getElementById("idsesikelas").value = "";
        // document.getElementById("cmd").value = "Daftar";
        // location.href="form-login.htm";
        // }

        function daftar(){
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;
        let email = document.getElementById("email").value;
        let namaLengkap = document.getElementById("namaLengkap").value;
        let jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked').value;
        let tempatLahir = document.getElementById("tempatLahir").value;
        let tanggalLahir = document.getElementById("tanggalLahir").value;
        let noHp = document.getElementById("noHp").value;
        let alamatLengkap = document.getElementById("alamatLengkap").value;
        let provinsi = document.getElementById("provinsi").value;
        let kota = document.getElementById("kota").value;
        let kecamatan = document.getElementById("kecamatan").value;
        let kelurahan = document.getElementById("kelurahan").value;
        let kodePos = document.getElementById("kodePos").value;
        let pekerjaan = document.getElementById("pekerjaan").value;
        let cmd = document.getElementById("cmd").value;


        let data = new FormData();
        data.append("idkelas", idkelas);
        data.append("username", username);
        data.append("namapasangan", namapasangan);
        data.append("idsesikelas", idsesikelas);
        data.append("cmd", cmd);

        ajaxku("proses-daftarkb.php", data);
        }

        // function ubah(iddaftarkelas, idkelas, username, namapasangan, idsesikelas){
        // iddaftarkelasskrg = iddaftarkelas;
        // document.getElementById("idkelas").value = idkelas;
        // document.getElementById("username").value = username;
        // document.getElementById("namapasangan").value = namapasangan;
        // document.getElementById("idsesikelas").value = idsesikelas;
        // document.getElementById("cmd").value = "Ubah";
        // }

        // function hapus(iddaftarkelas){
        // if (confirm("Apakah anda yakin ingin menghapus data ini ?")) {
        //     let data = new FormData();
        //     data.append("cmd", "Hapus");
        //     data.append("iddaftarkelas", iddaftarkelas);

        //     ajaxku("proses-daftarkb.php", data);
        // }
        // }
    </script>
</body>
</html>