<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UPT Pelatihan Dinas Koperasi Dan UKM Provinsi Jawa Timur</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
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
  <!-- own css -->
  <!--   <link rel="stylesheet" href="../../ind.css"> -->
  <style>
    .sidebar-mini.sidebar-collapse .main-sidebar:hover,
    .sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused {
      width: 560px;
    }

    .sidebar-mini.sidebar-collapse .main-sidebar:hover .brand-text {
      margin-left: 100px;
      font-size: 16px;
    }

    .sidebar-mini.sidebar-collapse .main-sidebar:hover .brand-link {
      width: 560px;
    }

    .main-sidebar .brand-text {
      font-size: 13px;
      font-weight: bold;
    }

    [class*='sidebar-light-'] .nav-sidebar>.nav-item:hover>.nav-link {
      background-color: #23267B;
      color: white;
    }

    [class*='sidebar-light-'] .nav-sidebar>.nav-item>.nav-link:active,
    [class*='sidebar-light-'] .nav-sidebar>.nav-item>.nav-link:focus {
      background-color: #23367B;
      color: white;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>


      </ul>



      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= base_url('home') ?>" class="nav-link">BERANDA</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= base_url('kursil') ?>" class="nav-link">KEMBALI</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-5">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="<?= base_url() ?>/gambar/logojawatimur.png" alt="logojatim" class="brand-image" style="opacity: 1;">
        <span class="brand-text font-weight-dark">UPT Pelatihan Dinas Koperasi<br> Dan UKM Provinsi Jawa Timur</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  Tahun
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php for ($i = 15; $i < 21; $i++) : ?>
                  <li class="list-group-item">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input product_check" value="20<?= $i ?>" id="tahun">20<?= $i; ?>
                      </label>
                    </div>
                  </li>
                <?php endfor ?>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-calendar-check-o"></i>
                <p>
                  Judul Kursil/Modul
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php foreach ($filters as $filter) : ?>
                  <li class="list-group-item">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input product_check" value="<?= $filter['JUDUL_KURSIL_MODUL']; ?>" id="jeniskursil"><?= $filter['JUDUL_KURSIL_MODUL']; ?>
                      </label>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="letter-spacing: 13px;">KELOMPOK DATA</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row" id="result">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header" style="background-color: #23267B; color: white;">
                  <h3 class="card-title">Tabel Data Kursil dan Modul</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="tabel-data" class="table table-bordered table-striped" cellspacing="0" width="150%">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>JUDUL KURSIL/MODUL</th>
                        <th>LOKASI</th>
                        <th>TANGGAL KEGIATAN</th>
                        <th>TAHUN KEGIATAN</th>
                      </tr>
                    </thead>
                    <tbody id="tbody">

                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer" style="background-color: #23267B; padding-top: 3px;
  padding-bottom: 4px;">
      <p style="color: white; text-align: center;font-size: 13px;padding-top: 15px;">
        Copyright 2020 &copy; UPTPKUKMJATIM. All Right Reserved.</p>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>/template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="<?= base_url() ?>/template/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>/template/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>/template/dist/js/demo.js"></script>
  <script type="text/javascript">
    var base_url = "<?= base_url() ?>";

    $(document).ready(function() {
      var tahun = get_filter_text('tahun');
      var jeniskursil = get_filter_text('jeniskursil');
      var table = $('#tabel-data').DataTable({
        ajax: {
          url: `http://localhost/UPT4/kursil/data`,
          type: 'POST',
          data: function(d) {
            d.tahun = tahun;
            d.jeniskursil = jeniskursil;
          },

        },
        "columns": [{
            "data": "NO"
          },
          {
            "data": "JUDUL_KURSIL_MODUL"
          },
          {
            "data": "LOKASI"
          },
          {
            "data": "TANGGAL_KEGIATAN"
          },
          {
            'data': 'TAHUN_KEGIATAN'
          }
        ],
        scrollY: "400px",
        scrollX: false,
        scrollCollapse: true,
        paging: true,

      });
      $(".product_check").click(function() {

        tahun = get_filter_text('tahun');
        jeniskursil = get_filter_text('jeniskursil');
        table.ajax.reload();


      });

      function get_filter_text(text_id) {
        var filterData = [];
        $('#' + text_id + ':checked').each(function() {
          filterData.push($(this).val());
        });
        return filterData;
      }
    });
  </script>
</body>

</html>