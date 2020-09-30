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
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>/template/style.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/ind.css">
<style>
  body{
    min-height: 700px;
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
            <img src="<?= base_url() ?>/gambar/logojawatimur.png" width="60" height="85" alt="Prov Jatim Logo">
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
              <a href="<?= base_url('home') ?>" class="nav-link">BERANDA</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('kursil') ?>" class="nav-link">KEMBALI</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- /.navbar -->

    <div class="content">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="letter-spacing: 10px;">&nbsp;DATA MENTAH</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
              <div class="card">

              <div class="card-body">
                <table id="tabel-data" class="table table-bordered table-hover" cellspacing="0" width="150%">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>JUDUL KURSIL/MODUL</th>
                    <th>LOKASI</th>
                    <th>TANGGAL KEGIATAN</th>
                    <th>TAHUN KEGIATAN</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      $no = 1;
                      foreach ($data as $tampil) {
                          # code...
                      
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $tampil['JUDUL_KURSIL_MODUL']; ?></td>
                          <td><?php echo $tampil['LOKASI']; ?></td>
                          <td><?php echo $tampil['TANGGAL_KEGIATAN']; ?></td>
                          <td><?php echo $tampil['TAHUN_KEGIATAN']; ?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
          </div>
        </div>
      </section>
</div>
<br>
<br>
            <!-- /.card -->



   <!-- <section class="sec contact"> -->
    <footer class="footer" style="background-color: #23267B; padding-top: 3px;
  padding-bottom: 4px;">
      <p style="color: white; text-align: center;font-size: 13px;padding-top: 15px;">
        Copyright 2020 &copy; UPTPKUKMJATIM. All Right Reserved.</p>
    </footer>
  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= base_url()?>/template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url()?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
  <script src="<?= base_url()?>/template/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url()?>/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url()?>/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url()?>/template/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url()?>/template/dist/js/demo.js"></script>
  <script>
      $(document).ready(function() {
        var table = $('#tabel-data').DataTable({
        "scrollY": "500px",
        "scrollX": false,
        "scrollCollapse": true,
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        });
      });
  </script>
</body>

</html>