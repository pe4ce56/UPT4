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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/DataTables/Buttons-1.6.2/css/buttons.bootstrap4.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- own css -->
  <style>
    .sidebar-mini.sidebar-collapse .main-sidebar:hover,
    .sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused {
      width: 580px;
    }

    .sidebar-mini.sidebar-collapse .main-sidebar:hover .brand-text {
      margin-left: 100px;
      font-size: 16px;
    }

    .sidebar-mini.sidebar-collapse .main-sidebar:hover .brand-link {
      width: 580px;
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
  <!--   <link rel="stylesheet" href="../../ind.css"> -->
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
          <a class="nav-link" href="<?= base_url('pelatihan/adminhal2kl') ?>">KEMBALI</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= base_url('admin') ?>" class="nav-link">BERANDA</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="tambahdata.php" class="nav-link">TAMBAH</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a class="brand-link">
        <img src="<?= base_url() ?>/gambar/logojawatimur.png" alt="logojatim" class="brand-image" style="opacity: 1;">
        <span class="brand-text font-weight-dark" style="font-size: 15px;">UPT Pelatihan Dinas Koperasi<br> Dan UKM Provinsi Jawa Timur</span>
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
                  Kab/Kota
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php foreach ($KAB_KOTA_PELATIHAN as $filter) : ?>
                  <li class="list-group-item">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input product_check" id="kabkota" value="<?= $filter['KAB_KOTA_PELATIHAN'] ?>"><?= $filter['KAB_KOTA_PELATIHAN'] ?>
                      </label>
                    </div>
                  </li>
                <?php endforeach ?>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-building-o"></i>
                <p>
                  Usaha/Koperasi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php foreach ($JENIS_USAHA_KOPERASI as $filter) : ?>
                  <li class="list-group-item">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input product_check" id="jenisusaha" value="<?= $filter['JENIS_USAHA_KOPERASI'] ?>"><?= $filter['JENIS_USAHA_KOPERASI'] ?>
                      </label>
                    </div>
                  </li>
                <?php endforeach ?>
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

      <form action="delete.php" method="POST">

        <section class="content">
          <div class="container-fluid">
            <div class="row" id="result">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header" style="background-color: #23267B; color: white;">
                    <h3 class="card-title">Tabel Data Pelatihan Klasikal</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example" class="table table-bordered table-striped" cellspacing="0" width="150%">
                      <thead>
                        <tr>
                          <th>AKSI</th>
                          <th>NO</th>
                          <th>KODE KEGIATAN</th>
                          <th>KAB/KOTA PELATIHAN</th>
                          <th>NO.KTP</th>
                          <th>NAMA KOPERASI/UMKM</th>
                          <th>JABATAN</th>
                          <th>NAMA PESERTA</th>
                          <th>TEMPAT,TANGGAL LAHIR</th>
                          <th>JENIS KELAMIN</th>
                          <th>UMUR</th>
                          <th>STATUS</th>
                          <th>PENDIDIKAN</th>
                          <th>ALAMAT RUMAH</th>
                          <th>ALAMAT USAHA</th>
                          <th>KAB USAHA</th>
                          <th>NO.TELP HP</th>
                          <th>ALAMAT EMAIL</th>
                          <th>JENIS PRODUK USAHA KOPERASI</th>
                          <th>JENIS USAHA/KOPERASI</th>
                          <th>TAHUN MEMULAI USAHA</th>
                          <th>VOLUME USAHA 1 TAHUN</th>
                          <th>JUMLAH KARYAWAN</th>
                          <th>JUMLAH ANGGOTA</th>
                          <th>LEGALITAS USAHA YANG DIMILIKI</th>
                          <th>LOKASI PEMASARAN</th>
                          <th>TANGGAL PELATIHAN</th>
                          <th>TAHUN PELATIHAN</th>
                          <th>PELATIHAN 1</th>
                          <th>PELATIHAN 2</th>
                          <th>PELATIHAN 3</th>
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
      </form>
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

  <script src="<?= base_url() ?>/template/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="<?= base_url() ?>/template/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/DataTables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/DataTables/Buttons-1.6.2/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/DataTables/JSZip-2.5.0/jszip.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
  <script src="<?= base_url() ?>/template/dist/DataTables/Buttons-1.6.2/js/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/DataTables/Buttons-1.6.2/js/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/DataTables/Buttons-1.6.2/js/buttons.colVis.min.js"></script>
  <script src="<?= base_url() ?>/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <script src="<?= base_url() ?>/template/plugins/toastr/toastr.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>/template/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>/template/dist/js/demo.js"></script>

  <script type="text/javascript">
    $(function() {
      $('.check_all').click(function() {
        $('.chk_boxes1').prop('checked', this.checked);
      });
    });
  </script>
  <script type="text/javascript">
    var base_url = `<?= base_url() ?>`;
    toastr.options = {
      "closeButton": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
    }
    <?php if (session()->getFlashdata('msg')) : ?>
      <?php if (session()->getFlashdata('success')) : ?>
        toastr.success('<?= session()->getFlashdata('msg'); ?>', 'Success')
      <?php else : ?>
        toastr.error('<?= session()->getFlashdata('msg'); ?>', 'Error')
      <?php endif; ?>
    <?php endif ?>
    $(document).ready(function() {
      // $(".product_check").click(function() {

      //   var action = 'data';
      //   var tahun = get_filter_text('tahun');
      //   var jk = get_filter_text('jk');
      //   var jenispelatihan = get_filter_text('jenispelatihan');
      //   var jenisusaha = get_filter_text('jenisusaha');
      //   $.ajax({
      //     url: 'action.php',
      //     method: 'POST',
      //     data: {
      //       action: action,
      //       tahun: tahun,
      //       jk: jk,
      //       jenispelatihan: jenispelatihan,
      //       jenisusaha: jenisusaha
      //     },
      //     success: function(response) {
      //       $("#result").html(response);
      //       $("#textchange").text("Filtered Data");
      //     }
      //   });

      // });
      var tahun = get_filter_text('tahun');
      var kabkota = get_filter_text('kabkota');
      var jenisusaha = get_filter_text('jenisusaha');

      $(".product_check").click(function() {

        tahun = get_filter_text('tahun');
        kabkota = get_filter_text('kabkota');
        jenisusaha = get_filter_text('jenisusaha');
        table.ajax.reload();


      });

      function get_filter_text(text_id) {
        var filterData = [];
        $('#' + text_id + ':checked').each(function() {
          filterData.push($(this).val());
        });
        return filterData;
      }

      var table = $('#example').DataTable({
        ajax: {
          url: `${base_url}/pelatihan/KlasikalData`,
          type: 'POST',
          data: function(d) {
            d.tahun = tahun;
            d.kabkota = kabkota;
            d.jenisusaha = jenisusaha;
          },
          "dataSrc": function(json) {
            for (let i in json.data) {
              json.data[i].NUMBER = parseInt(i) + 1;
              json.data[i].ACTION = `
                  <a href="${base_url}/pelatihan/updateKlasikal/${json.data[i].NO}" class="badge badge-success">Success</a>
                  <a href="${base_url}/pelatihan/deleteKlasikal/${json.data[i].NO}" class="badge badge-danger">Danger</a>`
            }
            return json.data;
          }
          // data: function(d) {
          //   d.tahun = tahun;
          //   d.jeniskursil = jeniskursil;
          // },

        },
        "columns": [{
            data: 'ACTION'
          },
          {
            "data": "NUMBER"
          },
          {
            "data": "KODE_KEGIATAN"
          },
          {
            "data": "KAB_KOTA_PELATIHAN"
          },
          {
            "data": "NO_KTP"
          },
          {
            'data': 'NAMA_KOPERASI_UKM'
          },
          {
            'data': 'JABATAN'
          },
          {
            'data': 'NAMA_PESERTA'
          },
          {
            'data': 'TTL'
          },
          {
            'data': 'JENIS_KELAMIN'
          },
          {
            'data': 'UMUR'
          },
          {
            'data': 'STATUS'
          },
          {
            'data': 'PENDIDIKAN'
          },
          {
            'data': 'ALAMAT_RUMAH'
          },
          {
            'data': 'ALAMAT_USAHA'
          },
          {
            'data': 'KAB_USAHA'
          },
          {
            'data': 'NO_TELEPON_HP'
          },
          {
            'data': 'ALAMAT_EMAIL'
          },
          {
            'data': 'JENIS_PRODUK_USAHA_KOPERASI'
          },
          {
            'data': 'JENIS_USAHA_KOPERASI'
          },
          {
            'data': 'TAHUN_MEMULAI_USAHA'
          },
          {
            'data': 'VOLUME_USAHA_1_TAHUN'
          },
          {
            'data': 'JUMLAH_KARYAWAN'
          },
          {
            'data': 'JUMLAH_ANGGOTA'
          },
          {
            'data': 'LEGALITAS_USAHA_YANG_DIMILIKI'
          },
          {
            'data': 'LOKASI_PEMASARAN'
          },
          {
            'data': 'TANGGAL_PELATIHAN'
          },
          {
            'data': 'TAHUN_PELATIHAN'
          },
          {
            'data': 'PELATIHAN_1'
          },
          {
            'data': 'PELATIHAN_2'
          },
          {
            'data': 'PELATIHAN_3'
          },
        ],
        autoWidth: false,
        scrollY: "400px",
        scrollX: true,
        scrollCollapse: true,
        buttons: ['excel', 'pdf', 'colvis']
      });

      table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
  </script>
</body>

</html>