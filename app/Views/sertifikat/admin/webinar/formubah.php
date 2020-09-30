<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambah Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/template/dist/css/adminlte.min.css">
  <!-- daterange picker -->
<!--   <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css"> -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>/template/plugins/datepicker/css/bootstrap-datepicker.min.css">
<!-- jquerry -->
<script src="<?=base_url()?>/template/dist/js/jquery-3.5.1/jquery-3.5.1.js"></script>
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url()?>/template/ind.css">
  <style>
  body
  {
      min-height: 500px;
  }
  .card
  {
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.50);
  }
  
  </style>
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-light-white fixed-top  shadow-lg p-1 bg-white rounded">
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
        </div>
      </div>
    </nav>
  </div>
  <!-- /.navbar -->

    <!-- Main content -->
    <section class="sec aboutus" id="layanan" style="margin-top: 100px " > 
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card mt-4" style="border-radius: 15px">
              <div class="card-header" style="background-color: #23267B; color: white; border-radius: 15px 15px 0 0;">
                <h3 class="card-title">Ubah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="<?=base_url('sertifikat/edit_w/'.$tampil['No']);?>" enctype="multipart/form-data">
                <div class="card-body">
                        <div class="form-group row">
                        <input type="hidden" name="JPGLama" id="JPGLama" value="<?= $tampil['gambar']; ?>">
                        <label class="col-sm-3">Nama</label>
                        <div class="col-8">
                        <input type="text" class="form-control <?= ($validation->hasError('Nama')) ? 'is-invalid' : '';?>" id="Nama" name="Nama" value="<?= $tampil['Nama']; ?>" autofocus >
                        <div class="invalid-feedback">
                                <?= $validation->getError('Nama'); ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-3">Bidang Sertifikat</label>
                        <div class="col-8">
                        <input type="text" class="form-control <?= ($validation->hasError('Bidang_Sertifikat')) ? 'is-invalid' : '';?>" id="Bidang_Sertifikat" name="Bidang_Sertifikat" placeholder="Bidang Sertifikat" value="<?= $tampil['Bidang_Sertifikat']; ?>">
                            <div class="invalid-feedback">
                              <?= $validation->getError('Bidang_Sertifikat'); ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-3">Instansi/Kop/Ukm</label>
                        <div class="col-8">
                        <input type="text" class="form-control <?= ($validation->hasError('Instansi_Kop_UKM')) ? 'is-invalid' : '';?>" id="Instansi_Kop_UKM" name="Instansi_Kop_UKM" placeholder="Instansi/Koperasi/Ukm" value="<?= $tampil['Instansi_Kop_UKM']; ?>">
                            <div class="invalid-feedback">
                              <?= $validation->getError('Instansi_Kop_UKM'); ?>
                            </div>
                        </div>
                        </div><div class="form-group row">
                        <label class="col-sm-3">No.Sertifikat</label>
                        <div class="col-8">
                        <input type="text" class="form-control <?= ($validation->hasError('No_Sertifikat')) ? 'is-invalid' : '';?>" id="No_Sertifikat" name="No_Sertifikat" placeholder="No.Sertifikat" value="<?= $tampil['No_Sertifikat']; ?>" >
                            <div class="invalid-feedback">
                            <?= $validation->getError('No_Sertifikat'); ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="gambar" class="col-sm-3">Pilih Gambar</label>
                            <div class="col-sm-2">
                              <img src="<?=base_url()?>/gambar/sertifikat_webinar/<?= $tampil['gambar']; ?>" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : '';?>" id="gambar" name="gambar" onchange="previewJPG()">
                                    <div class="invalid-feedback">
                                      <?= $validation->getError('gambar'); ?>
                                    </div>
                                    <label class="custom-file-label" for="customFile"><?= $tampil['gambar']; ?></label>
                                </div>
                                <small  class="form-text text-muted">Format: JPG/JPEG/PNG</small>
                            </div>
                        </div>
                      <div class="card-footer">
                      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                      <a href="<?=base_url('sertifikat/adwebinar')?>" type="cancel" name="batal" class="btn btn-danger">Batal</a>
                    </div>
              </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>

<footer class="footer" style="background-color: #23267B; padding-top: 3px;
  padding-bottom: 4px;">
      <p style="color: white; text-align: center;font-size: 13px;padding-top: 15px;">
        Copyright 2020 &copy; UPTPKUKMJATIM. All Right Reserved.</p>
    </footer>

<script src="<?=base_url()?>/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?=base_url()?>/template/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?=base_url()?>/template/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?=base_url()?>/template/plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>/template/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<!-- <script src="../../plugins/daterangepicker/daterangepicker.js"></script> -->
<script type="text/javascript" src="<?=base_url()?>/template/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?=base_url()?>/template/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url()?>/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?=base_url()?>/template/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>/template/dist/js/demo.js"></script>
<!-- Page script -->
<script src="<?=base_url()?>/template/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
      function previewJPG(){
        const gambar = document.querySelector('#gambar');
        const gambarLabel = document.querySelector('.custom-file-label');
        const gambarPreview = document.querySelector('.img-preview');

        gambarLabel.textContent = gambar.files[0].name;

        const fileJPG = new FileReader();
        fileJPG.readAsDataURL(gambar.files[0]);

        fileJPG.onload = function(e){
          gambarPreview.src = e.target.result;
        }

      }

  </script>