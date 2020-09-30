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

  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/toastr/toastr.min.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/ind.css">
  <style>
    table th {
      background: #23267B;
      color: white;
    }

    body {
      min-height: 400px;
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
            <img src="<?= base_url() ?>/gambar/logojawatimur.png" alt="Prov Jatim Logo">
            <h6>
              <div class="brand-text font-weight-primary">
                <p> &nbsp; &nbsp;UPT Pelatihan Dinas Koperasi Dan UKM <br>
                  &nbsp; &nbsp;Provinsi Jawa Timur</p>
              </div>
            </h6>
          </div>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto" style="font-size: 15px; margin-top: 10px;">
            <li class="nav-item">
              <a href="<?= base_url('admin') ?>" class="nav-link">BERANDA</a>
            </li>
          </ul>
        </div>
      </div>

    </nav>
  </div>
  <!-- /.navbar -->
  <div class="content">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="letter-spacing: 13px;" id="textchange">DATA SDM UPT</h1>
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
              <div class="card-header" style="background-color: white; color: black;">
                <h3 class="card-title">Tabel Data SDM</h3>

                <button type="button" class="btn btn-primary" style="height: 35px; margin-bottom: 10px; margin-left: 75%;" data-toggle="modal" data-target="#modal-default">
                  <i class="fa fa-plus"></i> Tambah Data
                </button>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="tabel-data" class="table table-bordered table-striped" cellspacing="0" width="150%">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NIP</th>
                      <th>NAMA</th>
                      <th>JABATAN</th>
                      <th>PANGKAT</th>
                      <th>GOLONGAN</th>
                      <th>KELAS JABATAN</th>
                      <th>RUMPUN</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody id="tbody">
                    <?php
                    $no = 1;
                    foreach ($data as $user) {
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $user['NIP_BARU']; ?></td>
                        <td><?php echo $user['NAMA']; ?></td>
                        <td><?php echo $user['JABATAN']; ?></td>
                        <td><?php echo $user['PANGKAT']; ?></td>
                        <td><?php echo $user['GOLONGAN']; ?></td>
                        <td><?php echo $user['KELAS_JABATAN']; ?></td>
                        <td><?php echo $user['RUMPUN']; ?></td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#modal-edit" class="btn btn-md btn-warning" data-id="<?php echo $user['NO']; ?>"><i class="fa fa-edit"></i></button>
                          <button type="button" data-toggle="modal" data-target="#deleteModal" class="btn btn-md btn-danger" data-id="<?php echo $user['NO']; ?>"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                    <?php } ?>
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

  <!-- /.modal -->

  <div class="modal fade" id="modal-default" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form role="form" method="post" action="<?= base_url('sdm/save') ?>">
        <div class="modal-content">
          <div class="modal-header" style="background-color:white; color:black;">
            <h4 class="modal-title">Tambah Data</h4>
            <button type="button" data-target="#staticBackdrop" style="color: black;" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="form-group row">
              <div class="col-4">
                <label>NIP</label>
              </div>
              <div class="col-8">
                <input type="number" class="form-control" name="NIP_BARU" placeholder="NIP">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>NAMA</label>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" name="NAMA" placeholder="NAMA">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>JABATAN</label>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" name="JABATAN" placeholder="JABATAN">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>PANGKAT</label>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" name="PANGKAT" placeholder="PANGKAT">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>GOLONGAN</label>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" name="GOLONGAN" placeholder="GOLONGAN">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>KELAS JABATAN</label>
              </div>
              <div class="col-8">
                <select class="custom-select" name="KELAS_JABATAN">
                  <option value="11">11</option>
                  <option value="10">10</option>
                  <option value="9">9</option>
                  <option value="8">8</option>
                  <option value="7">7</option>
                  <option value="6">6</option>
                  <option value="5">5</option>
                  <option value="4">4</option>
                  <option value="3">3</option>
                  <option value="2">2</option>
                  <option value="1">1</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>RUMPUN</label>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" name="RUMPUN" placeholder="RUMPUN">
              </div>
            </div>
          </div>
          <div class="modal-footer justify-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <div class="modal fade" id="modal-edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form role="form" method="post" id="form-edit" action="<?= base_url('sdm/update') ?>">.
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Ubah Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <div class="col-4">
                <label>NIP</label>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" name="NIP_BARU" id="NIP_BARU" placeholder="NIP">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>NAMA</label>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="NAMA">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>JABATAN</label>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" name="JABATAN" id="JABATAN" placeholder="JABATAN">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>PANGKAT</label>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" name="PANGKAT" id="PANGKAT" placeholder="PANGKAT">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>GOLONGAN</label>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" name="GOLONGAN" id="GOLONGAN" placeholder="GOLONGAN">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>KELAS JABATAN</label>
              </div>
              <div class="col-8">
                <select class="custom-select" name="KELAS_JABATAN" id="KELAS_JABATAN">
                  <option value="11">11</option>
                  <option value="10">10</option>
                  <option value="9">9</option>
                  <option value="8">8</option>
                  <option value="7">7</option>
                  <option value="6">6</option>
                  <option value="5">5</option>
                  <option value="4">4</option>
                  <option value="3">3</option>
                  <option value="2">2</option>
                  <option value="1">1</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-4">
                <label>RUMPUN</label>
              </div>
              <div class="col-8">
                <input type="text" class="form-control" name="RUMPUN" id="RUMPUN" placeholder="RUMPUN">
              </div>
            </div>
          </div>
          <div class="modal-footer justify-between">
            <input type="hidden" name="NO" id="NO">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- Modal Delete Product-->
  <form action="<?= base_url('sdm/delete') ?>" method="post">
    <div class="modal fade" id="deleteModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <h4>Yakin Ingin Menghapus Data Ini
              ?</h4>

          </div>
          <div class="modal-footer">
            <input id="id-delete" type="hidden" name="NO">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary toastrDefaultSuccess">Ya</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- End Modal Delete Product-->
  <?php
  echo view('layout/v_footer.php')

  ?>
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
  <script src="<?= base_url() ?>/template/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= base_url() ?>/template/plugins/toastr/toastr.min.js"></script>

  <script>
    toastr.options = {
      "closeButton": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
    }
    <?php if (session()->getFlashdata('msg')) : ?>
      <?php if (session()->getFlashdata('success')) : ?>
        toastr.success('<?= session()->getFlashdata('msg'); ?>', 'Success')
      <?php elseif (session()->getFlashdata('success')) : ?>
        toastr.error('<?= session()->getFlashdata('msg'); ?>', 'Error')
      <?php endif; ?>
    <?php endif ?>

    var base_url = `<?= base_url(); ?>`;
    $(function() {
      $(document).ready(function() {
        var table = $('#tabel-data').DataTable({
          scrollY: "500px",
          scrollX: true,
          scrollCollapse: true,
          "responsive": true,
          "autoWidth": true,
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // get Delete Product
      $('.btn-delete').on('click', function() {
        // get data from button edit
        const id = $(this).data('id');
        // Set data to Form Edit
        $('.productID').val(id);
        // Call Modal Edit
        $('#deleteModal').modal('show');
      });
    });

    $('#modal-edit').on('show.bs.modal', function(event) {
      const ID = $(event.relatedTarget).data('id');
      $('#NO').val(ID);
      $.get(`${base_url}/sdm/find/${ID}`, (result) => {
        result = JSON.parse(result);
        $("#NIP_BARU").val(result['NIP_BARU']);
        $("#NAMA").val(result['NAMA']);
        $("#JABATAN").val(result['JABATAN']);
        $("#PANGKAT").val(result['PANGKAT']);
        $("#GOLONGAN").val(result['GOLONGAN']);
        $("#KELAS_JABATAN").val(result['KELAS_JABATAN']);
        $("#RUMPUN").val(result['RUMPUN']);
      });
    });
    $('#deleteModal').on('show.bs.modal', function(event) {
      var ID = $(event.relatedTarget).data('id');
      $(this).find('#id-delete').val(ID);
    });
  </script>
</body>

</html>