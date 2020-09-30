<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ubah Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
              <form role="form" method="post" action="<?= base_url('analisisdata/edit/'.$tampil['id']); ?>" enctype="multipart/form-data">
                <div class="card-body">
                        <div class="form-group row mt-3">
                        <input type="hidden" class="form-control id" id="id" name="id" value="<?= $tampil['id'] ?>" >
                        <input type="hidden" name="pdfLama" id="pdfLama" value="<?= $tampil['data_pdf']; ?>">
                          <label class="col-sm-2">Judul</label>
                          <div class="col-10">
                          <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '';?>" id="judul" name="judul" placeholder="JUDUL"  value="<?= $tampil['judul'] ?>">
                          <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="data_pdf" class="col-sm-2">Pilih PDF</label>
                            <iframe class="col-sm-4 pdf-preview" src="<?=base_url()?>/pdf/<?= $tampil['data_pdf']; ?>"></iframe>
                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('data_pdf')) ? 'is-invalid' : '';?>" id="data_pdf" name="data_pdf" onchange="previewPdf()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('data_pdf'); ?>
                                    </div>
                                    <label class="custom-file-label" for="customFile"><?= $tampil['data_pdf']; ?></label>
                                </div>
                                <small  class="form-text text-muted">Format: PDF</small>
                            </div>
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control tgl" id="tgl" name="tgl" value="<?= $tampil['tgl'] ?>" >
                        </div>

                
                      <div class="card-footer">
                      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                      <a href="<?=base_url('analisisdata/admin')?>" type="cancel" name="batal" class="btn btn-danger">Batal</a>
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
    
    var d = new Date();
    var weekday = new Array(7);
    weekday[0] = "Minggu";
    weekday[1] = "Senin";
    weekday[2] = "Selasa";
    weekday[3] = "Rabu";
    weekday[4] = "Kamis";
    weekday[5] = "Jum'at";
    weekday[6] = "Sabtu";

    var n = weekday[d.getDay()];

    var bulan = new Array(12);
    bulan[0] = "Januari";
    bulan[1] = "Februari";
    bulan[2] = "Maret";
    bulan[3] = "April";
    bulan[4] = "Mei";
    bulan[5] = "Juni";
    bulan[6] = "Juli";
    bulan[7] = "Agustus";
    bulan[8] = "September";
    bulan[9] = "Oktober";
    bulan[10] = "November";
    bulan[11] = "Desember";

    var b = bulan[d.getMonth()];
    var t = d.getDate();
    var t2 = d.getUTCFullYear();

    let fe = document.getElementById('tanggal');
    $('#tanggal').val( n +','+' '+ t +' '+ b +' '+ t2 );
    
  </script>
  <script>
      function previewPdf(){
        const pdf = document.querySelector('#data_pdf');
        const pdfLabel = document.querySelector('.custom-file-label');
        const pdfPreview = document.querySelector('.pdf-preview');

        pdfLabel.textContent = data_pdf.files[0].name;

        const filePdf = new FileReader();
        filePdf.readAsDataURL(data_pdf.files[0]);

        filePdf.onload = function(e){
            pdfPreview.src = e.target.result;
        }

      }

  </script> 