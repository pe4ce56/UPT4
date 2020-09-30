<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>UPT Pelatihan Dinas Koperasi Dan UKM Provinsi Jawa Timur</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/template/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/dist/css/lightbox.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url()?>/template/ind.css">

  <style>
    .gallery{
      margin: 5px;
      border:1px solid #ccc;
      float: left;
      width: 390px;

    }
    .gallery img{
      width: 100%;
      height: auto;
    }
    .dropdown-menu{
      border-radius:10px;
    }
    .dropdown-item:hover{
      background-color: #b6c9db;
      color: white;
      border-radius: 2px;
    }
    .btn{
      background-color: #ffc107;
      color: black;
    }
    body{
      min-height: 300px;
    }
  </style>
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white   shadow-lg p-3 bg-white rounded">
      <div class="container">
        <a class="navbar-brand">
          <div class="d-flex align-items-center">
            <img src="<?=base_url()?>/gambar/logojawatimur.png" width="60" height="85" alt="Prov Jatim Logo">
            <h6>
              <span class="brand-text font-weight-primary">
                <p color="#3222bf"> &nbsp; &nbsp;UPT Pelatihan Dinas Koperasi Dan UKM <br>
                  &nbsp; &nbsp;Provinsi Jawa Timur</p>
              </span>
            </h6>
          </div>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto" style="font-size: 15px; margin-top: 10px;">
          <li class="nav-item">
              <a href="<?=base_url('kursil')?>" class="nav-link">KEMBALI</a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home')?>" class="nav-link">BERANDA</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- /.navbar -->
 
  <p class="text-center" style="font-size: 50px; margin-top: 50px; font-weight:bold;"> Diagram Data Tahun 2020</p>
  <hr>

  <div class="card mx-auto mt-5" style="width: 60rem;">
    <div class="row border-dark">
      <div class="col-8" style="background: #ededf0">
        
      </div>
      <div class="col-4 " style=" background: #EDEDF0;">
        <div class="dropdown">
           <button class="btn btn-lg btn-warning dropdown-toggle mt-4 mr-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilih Tahun
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li class="dropdown-submenu dropdown-hover" ><div class="dropdown-item">
              </div>
              </li>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
echo view('layout/v_footer');
?>
  <!-- jQuery -->
  <script src="<?=base_url()?>/template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url()?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url()?>/template/dist/js/adminlte.min.js"></script>
  <script src="<?=base_url()?>/template/dist/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>
