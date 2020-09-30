<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>UPT Pelatihan Dinas Koperasi Dan UKM Provinsi Jawa Timur</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/template/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>/template/pages/style.css">
  <style>
  .footer {
  background: #23267B;
  bottom: 0;
  left: 0;
  right: 0;
  padding-top: 3px;
  padding-bottom: 4px;

  z-index: 999;
}

.copyright {
  color: #fff;
  font-size: 13px;
  padding-top: 15px;

}
  </style>
</head>

<body class="hold-transition layout-top-nav">
  <div class="row">

    <div class="col-lg-6 order-lg-last p-0 bg-primary" style="border-radius: 50%; width:100% ">
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3829c3;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('pelatihan/admin')?>">KEMBALI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin')?>">BERANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">LAYANAN</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="gambar">
        <img src="<?=base_url()?>/gambar/diagram2.jpg" alt="" style="width: 100%; height: 585px; border-bottom-left-radius: 50%;" />
      </div>
    </div>
    <div class="col-lg-6 oder-first mt-4 p-0">
      <div style="margin-left: 200px; color: #3829c3;">
        <div style="font-size: 25px; letter-spacing: 4px; font-weight: bold;">
          UPT PELATIHAN <br> DINAS KOPERASI DAN UKM <br>PROVINSI JAWA TIMUR
        </div>
         <div style="margin-top: 150px; font-size: 35px; text-transform: uppercase;">
          Data Pelatihan Daring
        </div>
        <div style="color: black;">Data yang disajikan disini berdasarkan hasil kegiatan diklat yang dilaksanakan UPT
          Pelatihan dalam 5 tahun terakhir</div>
      </div>
    </div>
  </div>


  <!-- REQUIRED SCRIPTS -->

  <section class="sec aboutus" id="services">
    <div class="content">
      <div style="color: black; font-size: 30px; margin-top: 100px;">Silahkan Pilih Sajian Data
      </div>
      <div class="services row ">
        <div class="mt-sm-1 col-lg-4 m-auto">
          <a href="<?=base_url('pelatihan/admindmdr')?>" style="text-decoration: none; color: black;">
          <div class="box">
            <div class="iconBx">
              <div class="icon d-flex align-items-center justify-content-center mx-auto">
                <i class="fa fa-file-text" aria-hidden="true"
                  style="font-size: 45px; text-align: center; color: black;"></i>
              </div>
            </div>
            <div class="content">
              <br>
              <br>
              <h2>Data Mentah</h2>
              <p style="font-size: 15px;">Data disajikan secara apa adanya dalam bentuk tabel dan bisa dicari
                berdasarkan ketikan yang dituliskan</p>
              <br>
            </div>
          </div>
        </div>
        <div class="mt-sm-1 col-12 m-auto col-lg-4">
          <a href="<?=base_url('pelatihan/admingdr')?>" style="text-decoration: none; color: black;">
          <div class="box">
            <div class="iconBx">
              <div class="icon d-flex align-items-center justify-content-center mx-auto">
                <i class="fa fa-bar-chart" aria-hidden="true"
                  style="font-size: 45px; text-align: center; color: black;"></i>
              </div>
            </div>
            <div class="content">
              <br>
              <br>
              <h2>infografis</h2>
              <p style="font-size: 15px;">Data disajikan dalam bentuk infografis berdasarkan perspektif pengolah data
                dalam pengelompokkan data</p>
              <br>
            </div>
          </div>
        </div>
        <div class="mt-sm-1 col-12 m-auto col-lg-4">
          <a href="<?=base_url('pelatihan/keldatadr')?>" style="text-decoration: none; color: black;">
          <div class="box">
            <div class="iconBx">
              <div class="icon d-flex align-items-center justify-content-center mx-auto">
                <i class="fa fa-table" aria-hidden="true"
                  style="font-size: 45px; text-align: center; color: black;"></i>
              </div>
            </div>
            <div class="content">
              <br>
              <br>
              <h2>kelompok data</h2>
              <p style="font-size: 15px;">Data disajikan berdasrkan pengelompokkan sesuai kriteria yang dianggap penting
                oleh pengolah data</p>
              <br>
            </div>
          </div>
        </div>
      </div>
<br>
<br>
<script type="text/javascript">
  window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  })
  
</script>

<!-- <section class="sec contact"> -->
  <footer class="footer" style="margin: 100px -100px -100px -100px;">
    <div class="content">
    <p class="copyright" align="center">Copyright 2020 © UPTPKUKMJATIM. All Right Reserved. </p>
    </div>
    </footer> 
<!-- </section> -->



      <!-- jQuery -->
      <script src="../../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../../dist/js/adminlte.min.js"></script>
</body>

</html>