<!DOCTYPE html>
<html dir="ltr" lang="en">
  <?php 
    session_start();
  ?>
  <head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/select2/dist/css/select2.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/jquery-minicolors/jquery.minicolors.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/quill/dist/quill.snow.css"
    />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="loading()">

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >

      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.php">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="../assets/images/logo-icon.png"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                <img
                  src="../assets/images/logo-text.png"
                  alt="homepage"
                  class="light-logo"
                />
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <span class="d-none d-md-block"
                    >Create New <i class="fa fa-angle-down"></i
                  ></span>
                  <span class="d-block d-md-none"
                    ><i class="fa fa-plus"></i
                  ></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-4"></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-bell font-24"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  id="2"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="font-24 mdi mdi-comment-processing"></i>
                </a>
                <ul
                  class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    animated
                    bounceInDown
                  "
                  aria-labelledby="2"
                >
                  <ul class="list-style-none">
                    <li>
                      <div class="">
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-success btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-calendar text-white fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Event today</h5>
                              <span class="mail-desc"
                                >Just a reminder that event</span
                              >
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-info btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-settings fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Settings</h5>
                              <span class="mail-desc"
                                >You can customize this template</span
                              >
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-primary btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-account fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Pavan kumar</h5>
                              <span class="mail-desc"
                                >Just see the my admin!</span
                              >
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-danger btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-link fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Luanch Admin</h5>
                              <span class="mail-desc"
                                >Just see the my new admin!</span
                              >
                            </div>
                          </div>
                        </a>
                      </div>
                    </li>
                  </ul>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="../assets/images/users/1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-settings me-1 ms-1"></i> Account
                    Setting</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                  >
                  <div class="dropdown-divider"></div>
                  <div class="ps-4 p-10">
                    <a
                      href="javascript:void(0)"
                      class="btn btn-sm btn-success btn-rounded text-white"
                      >View Profile</a
                    >
                  </div>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <?php include "header.php" ?>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Form Daftar Kelas</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <form class="form-horizontal">
                  <div class="card-body">
                    <h4 class="card-title">Isi Data Pendaftaran Kelas</h4>
                    <div class="form-group row">
                      <label
                        for="idkelas"
                        class="col-md-3 text-end control-label col-form-label"
                        >Nama Kelas</label
                      >
                      <div class="col-md-9">
                        <select name="idkelas" id="idkelas" class="form-select"  onclick="tampil()">
                          <option disabled selected>-- Pilih Kelas --</option>
                          <?php
                            include "koneksi.php";
                            $sql = mysqli_query($con, "select * from tbkelas");
                            while($data = mysqli_fetch_array($sql)) {
                              $idkelas = $data['idkelas'];
                              $namakelas = $data['namakelas'];
                              ?>
                                <option value="<?php echo $idkelas ?>"><?php echo $namakelas;?></option>
                                <?php
                            }                            
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="idjemaat"
                        class="col-md-3 text-end control-label col-form-label"
                        >Nama Jemaat</label
                      >
                      <div class="col-md-9">
                        <select name="idjemaat" id="idjemaat" class="form-select">
                        <option value="" selected disabled>-- Pilih Daftar Jemaat --</option>
                        <?php
                            include "koneksi.php";
                            $sql = mysqli_query($con, "select * from tbjemaat");
                            while($data = mysqli_fetch_array($sql)) {
                              $idjemaat = $data['idjemaat'];
                              $namajemaat = $data['namajemaat'];
                              ?>
                                <option value="<?php echo $idjemaat ?>"><?php echo $namajemaat;?></option>
                                <?php
                            }                            
                          ?>                          
                        </select>
                      </div>
                    </div>
                    <div id="pasangan" class="form-group row" id="pasangan">
                      <label
                        for="namapasangan"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Nama Pasangan</label
                      >
                      <div class="col-md-9">
                        <input
                          type="text"
                          class="form-control"
                          id="namapasangan"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="idsesikelas"
                        class="col-md-3 text-end control-label col-form-label"
                        >Sesi Kelas</label
                      >
                      <div class="col-md-9">
                        <select name="idsesikelas" id="idsesikelas" class="form-select">
                          <option disabled selected>-- Pilih Sesi Kelas --</option>
                          
                      </div>
                    </div>     
                  </div>  
                  <div class="border-top">
                    <div class="card-body">
                          <input id="cmd" type="button" class="btn btn-primary float-end mt-3 mb-3" value="Simpan" onclick="simpan()">
                    </div>    
                  </div>
                </form>
              </div>
            </div>
          </div> 
          <div id="tableku"></div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../dist/js/pages/mask/mask.init.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script>
      //***********************************//
      // For select 2
      //***********************************//
      $(".select2").select2();

      /*colorpicker*/
      $(".demo").each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
          control: $(this).attr("data-control") || "hue",
          position: $(this).attr("data-position") || "bottom left",

          change: function (value, opacity) {
            if (!value) return;
            if (opacity) value += ", " + opacity;
            if (typeof console === "object") {
              console.log(value);
            }
          },
          theme: "bootstrap",
        });
      });
      /*datwpicker*/
      jQuery(".mydatepicker").datepicker();
      jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
      });
      var quill = new Quill("#editor", {
        theme: "snow",
      });
    </script>
  </body>
  <script type="text/javascript">
    var iddaftarkelasskrg = "";

    function ajaxku(url, data){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var dataku = this.responseText;

          var bagi = dataku.split("###");

          if(bagi[1] == "simpan"){
            alert("Data telah tersimpan");
          }else if (bagi[1] == "ubah") {
            alert("Data telah berubah");
          }else if (bagi[1] == "hapus") {
            alert("Data telah terhapus");
          }

          document.getElementById("tableku").innerHTML = bagi[2]
        }
      };
      xhttp.open("POST", url, true);
      xhttp.send(data);
    }
    
    function loading(){
      document.getElementById("pasangan").style.display = "none";
      ajaxku("proses-daftarkelas.php");
    }

    function resetForm(){
      document.getElementById("idkelas").value = "";
      document.getElementById("idjemaat").value = "";
      document.getElementById("namapasangan").value = "";
      document.getElementById("idsesikelas").value = "";
      document.getElementById("cmd").value = "Simpan";
    }

    function simpan(){
      let idkelas = document.getElementById("idkelas").value;
      let idjemaat = document.getElementById("idjemaat").value;
      let namapasangan = document.getElementById("namapasangan").value;
      let idsesikelas = document.getElementById("idsesikelas").value;
      let cmd = document.getElementById("cmd").value;


      let data = new FormData();
      data.append("idkelas", idkelas);
      data.append("idjemaat", idjemaat);
      data.append("namapasangan", namapasangan);
      data.append("idsesikelas", idsesikelas);
      data.append("cmd", cmd);

      if(cmd == "Ubah"){
        if(confirm("Apakah anda ingin mengubah data ini?")){
          data.append("iddaftarkelas", iddaftarkelasskrg);
          ajaxku("proses-daftarkelas.php", data);
        }
      }
      else{
        ajaxku("proses-daftarkelas.php", data);
      }
      resetForm();
    }

    function ubah(iddaftarkelas, idkelas, idjemaat, namapasangan, idsesikelas){
      iddaftarkelasskrg = iddaftarkelas;
      document.getElementById("idkelas").value = idkelas;
      document.getElementById("idjemaat").value = idjemaat;
      document.getElementById("namapasangan").value = namapasangan;
      document.getElementById("idsesikelas").value = idsesikelas;
      document.getElementById("cmd").value = "Ubah";
    }

    function hapus(iddaftarkelas){
      if (confirm("Apakah anda yakin ingin menghapus data ini ?")) {
        let data = new FormData();
        data.append("cmd", "Hapus");
        data.append("iddaftarkelas", iddaftarkelas);

        ajaxku("proses-daftarkelas.php", data);
      }
    }

    function tampil(){
      let pranikah = document.getElementById("idkelas").value;
      if (pranikah === "2") {
        pasangan.style.display = 'flex';
      }
      else {
        pasangan.style.display = "none";
      }
    }

    // buat function menampilkan sesi sesuai kelas yang dipilih

  </script>
</html>
