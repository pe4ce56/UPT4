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

  <title>UPT Pelatihan Dinas Koperasi Dan UKM Provinsi Jawa Timur</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="<?=base_url()?>/template/ind.css">
  <style>
    body {
  min-height: 600px;

}
  </style>
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top  shadow-lg p-3 bg-white rounded">
      <div class="container">
        <a class="navbar-brand">
          <div class="d-flex align-items-center">
            <img src="<?=base_url()?>/gambar/logojawatimur.png" alt="Prov Jatim Logo">
            <h6>
              <div class="brand-text font-weight-primary">
                <p> &nbsp; &nbsp;UPT Pelatihan Dinas Koperasi Dan UKM <br>
                  &nbsp; &nbsp;Provinsi Jawa Timur</p>
              </div>
            </h6>
          </div>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="font-size: 12px;"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" >
              <a href="<?=base_url('admin')?>" class="nav-link"  >BERANDA</a>
            </li>
            <li class="nav-item">
              <a href="#layanan" class="nav-link" >LAYANAN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- /.navbar -->
  <p class="text-center" style="font-size: 40px; margin-top: 150px; text-transform: uppercase;"> Data Sertifikat</p>
  <hr >
  <section class="sec aboutus " id="layanan">
    <div class="container services row" style=" margin-top: -300px;">
      <div class="col-lg-3" style="padding: 0;">
        <a href="<?=base_url('sertifikat/adwebinar')?>" style="text-decoration: none; color: black;">
          <div class="box mx-auto">
            <div class="iconBx text-center">
              <i class="fa fa-podcast" aria-hidden="true" style="font-size: 80px; text-align: center;"></i>
            </div>
            <div class="content">
              <h2><br>Sertifikat Webinar</h2>
              <p>Berisikan data Sertifikat yang mengikuti kegiatan Webinar.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3" style="padding: 0">
        <a href="<?=base_url('sertifikat/adinhouse')?>" style="text-decoration: none; color: black;">
          <div class="box mx-auto">
            <div class="iconBx text-center">
              <i class="fa fa-university" aria-hidden="true" style="font-size: 80px; text-align: center;"></i>
            </div>
            <div class="content">
              <h2><br>Sertifikat In-House</h2>
              <p>Berisikan data Sertifikat yang mengikuti kegiatan pelatihan.</p>
            </div>
          </div>
          </a>
      </div>


        <div class="col-lg-3" style="padding: 0">
         <a href="<?=base_url('sertifikat/adkursil')?>" style="text-decoration: none; color: black;">
          <div class="box mx-auto">
            <div class="iconBx text-center">
              <i class="fa fa-line-chart" aria-hidden="true" style="font-size: 80px; text-align: center"></i>
            </div>
            <div class="content">
              <h2><br>Sertifikat Kursil/Modul</h2>
              <p>Berisi data Serifikat yang mengikuti pelatihan.</p>
            </div>
          </div>
      </a>
    </div>

    <div class="col-lg-3" style="padding: 0">
     <a href="<?=base_url('sertifikat/adpelatihan')?>" style="text-decoration: none; color: black;">
      <div class="box mx-auto">
        <div class="iconBx text-center">
          <i class="fa fa-users" aria-hidden="true" style="font-size: 80px; text-align: center"></i>
        </div>
        <div class="content">
          <h2><br>Sertifikat Pelatihan</h2>
          <p>Berisi data Serifikat yang mengikuti pelatihan.</p>
        </div>
      </div>
    </a>
    </div>

  </section>


<?php
echo view('layout/v_footer');
?>
