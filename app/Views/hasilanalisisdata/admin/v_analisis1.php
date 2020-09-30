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
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/ind.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/sweetalert2/sweetalert2.min.css">

  <style>
    body{
      min-height: 500px;
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
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- /.navbar -->
  <p class="text-center" style="font-size: 40px; margin-top: 150px; text-transform: uppercase;">Hasil Analisis Data</p>
  <hr>
  <div class="container mt-3">
  <a type="button" class="btn mb-4 ml-2 btn-primary" href="<?= base_url('analisisdata/formtambah') ?>">
      <i class="fa fa-plus"></i> Tambah Data
  </a>
    <div class="row">
      <?php foreach($data as $row) : ?>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body" style="background-color:#ededf0">
            <h5 class="card-title" style="color:black;  font-size: 25px;"><?= $row["judul"]?></h5> <br>
            <hr>
            <iframe src="<?=base_url()?>/pdf/<?= $row["data_pdf"]?>"></iframe>
            <div class="row">
            <div class="col-8">
            <p class="card-text mt-2" style="color: black;"><?= $row["tgl"]?></p>
            </div>
            <div class="col-4 mt-2">
            <a type="button" class="btn btn-warning" href="<?= base_url('analisisdata/formubah/'.$row['id']) ?>">Ubah</a>
            <button type="button" class="btn btn-danger" id="btn-hapus" data-id="<?= $row['id']?>">Hapus</button>
            </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  </div>

  <div class="container mt-3">
    <!-- Button trigger modal -->
    
  

    <!-- Modal Tambah Data-->
    <form action="save" method="post" enctype="multipart/form-data">
<!-- Modal Tambah Data-->
<div class="modal fade" id="modaltambah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
            <div class="container">
              <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control " id="judul" placeholder="JUDUL" name="judul" autofocus>
              <div class="invalid-feedback errorJudul">

                </div>
              </div>
            
              <div class="form-group">
                <label for="exampleFormControlFile1">Pilih PDF</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="data_pdf" name="data_pdf">
                <label class="custom-file-label" for="customFile">Pilih file</label>
              </div>
              <small  class="form-text text-muted">Format: PDF</small>
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" name="tgl" id="tanggal" required>
            </div>
          </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
            <button type="submit" class="btn btn-primary btnsimpan">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
    <div class="viewmodal" style="display: none"></div>
    <!-- End -->

    <!-- Modal Edit -->
    <form action="<?=base_url('analisisdata/edit')?>" method="post">
    <div class="modal fade" id="editModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Ubah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
          <div class="modal-body">
            <div class="container">
            <div class="form-group">
            <input type="text" class="form-control id" id="name" name="id" >
              <label>Judul</label>
              <input type="text" class="form-control judul" id="name" name="judul" placeholder="JUDUL" required>
            </div>

            <div class="form-group">
              <label>Pilih PDF</label>
              <input type="file" class="form-control-file data_pdf" id="gambar_serti" name="data_pdf" >
              <small type="text" class="text text-muted"><?= $row['data_pdf']?></small>
            </div>
            <div class="form-group">
              <input type="text" class="form-control tgl" name="tgl" id="tanggal" >
            </div>
          </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
        </div>
      </div>
    </div>
    </form>
    <!-- End -->
    
    <?= $pager->links('data','pdf_pagination'); ?>
  </div>
  <!-- <section class="sec contact"> -->
  <?php 
echo view('layout/v_footer');
?>
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?=base_url()?>/template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url()?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url()?>/template/dist/js/adminlte.min.js"></script>
  <!-- Toastr -->
  <script src="<?= base_url()?>/template/plugins/toastr/toastr.min.js"></script>
  <script src="<?= base_url() ?>/template/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script>
    $(document).ready(function(){

      toastr.options = {
      "closeButton": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
    }
    <?php if (session()->getFlashdata('msg')) : ?>
      <?php if (session()->getFlashdata('success')) : ?>
        toastr.success('<?= session()->getFlashdata('msg'); ?>', 'Sukses')
      <?php elseif (session()->getFlashdata('success')) : ?>
        toastr.error('<?= session()->getFlashdata('gagal'); ?>', 'Error')
      <?php endif; ?>
    <?php endif ?>

    var base_url = `<?= base_url(); ?>`;
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const judul = $(this).data('judul');
            const data_pdf = $(this).data('data_pdf');
            const tgl = $(this).data('tgl');
            // Set data to Form Edit
            $('.id').val(id);
            $('.judul').val(judul);
            $('.data_pdf').val(data_pdf);
            $('.tgl').val(tgl);
            // Call Modal Edit
            $('#editModal').modal('show');
        });

        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.id').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
        
    });
</script>
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
  <!-- sweetalert -->
  <script type='text/javascript'>
  var base_url = `<?= base_url(); ?>`;
  $(document).on('click','#btn-hapus', function(){
    const id = $(this).data("id");
    console.log(id);
    Swal.fire({
        title: "Anda Yakin Ingin?",
        text: "Anda tidak akan dapat mengembalikan ini",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iya',
        cancelButtonText: 'Tidak'
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Berhasil!',
            'Data Berhasil Dihapus.',
            'success', 
          );
          fetch (`${base_url}/AnalisisData/hapus/${id}`).then(()=>{
            window.location.reload();
          });
        }
      })
  });
  </script>    
  <script>
  $(document).ready(function() {
    $('.tomboltambah').click(function(e){
      e.preventDefault();
      $.ajax({
        url: "<?=base_url('analisisdata/formtambah')?>",
        dataType : "json",
        success: function(response){
          $('.viewmodal').html(response.data).show();

          $('#modaltambah').modal('show');
        },
        error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
      });
    });
  });
  </script>
</body>

</html>
