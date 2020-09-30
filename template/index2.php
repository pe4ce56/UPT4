<?php
    session_start();

    $koneksi = new mysqli ("localhost","root","","upt");
if (@$_SESSION['admin'] || @$_SESSION['user']) {
    
?>
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
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <link rel="stylesheet" href="ind.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top  shadow-lg p-3 bg-white rounded">
      <div class="container">
        <a class="navbar-brand">
          <div class="d-flex align-items-center">
            <img src="logojawatimur.png" alt="Prov Jatim Logo">
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
              <a href="#home" class="nav-link">BERANDA</a>
            </li>
            <li class="nav-item">
              <a href="#services" class="nav-link" >LAYANAN</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link" >KONTAK</a>
            </li>
            <li class="nav-item">
              <a id="btn-logout" style="border: none; cursor: pointer;"class="nav-link"><i class="fa fa-sign-out"></i>&nbsp;KELUAR </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <script type='text/javascript'>
    let btnLogout = document.getElementById("btn-logout");
    btnLogout.addEventListener('click',function(){
 
      Swal.fire({
        title: "Keluar",
        text: "Anda Yakin Ingin Keluar?",
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
            'Anda Berhasil Keluar.',
            'success', 
          );
          window.setTimeout(function(){ 
          window.location.replace('logout.php');
         } ,900);
          // window.location.href="logout.php";
        }
      })

    });
 

  </script>
  <!-- /.navbar -->



  <!-- <div class="jumbotron">
    <div class="container">
      <h1 class="lead">Welcome</h1>
      <p class="display-4">BIG DATA UPT</p>
      <p>Big data ini memuat data-data dan informasi yang dimiliki UPT Pelatihan <br>
        Dinas Koperasi dan UKM Provinsi JawaTimur</p>
    </div>
  </div>-->
  <section id="home">
    <div id="carouselExampleIndicators" class="carousel-inner slide " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      </ol>
      <div class="carousel">
        <div class="carousel-item active">
          <img src="loby.png" class="d-block w-100" alt="..." id="slide">
          <div class="container judul">
            <h1 class="lead">Selamat Datang</h1>
            <p class="display-4">BIG DATA UPT</p>
            <p class="paraf">Big data ini memuat data-data dan informasi yang dimiliki UPT Pelatihan <br>
              Dinas Koperasi dan UKM Provinsi JawaTimur</p>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <section class="sec aboutus " id="services">
    <div class="container services row">
      <div class="col-lg-4" >
        <a href="pages/layout/hasilanalisisdata/pdf.php" style="text-decoration: none; color: black;">
          <div class="box mx-auto">
            <div class="iconBx text-center">
              <i class="fa fa-line-chart" aria-hidden="true" style="font-size: 70px; text-align: center;"></i>
            </div>
            <div class="content">
              <h2><br>Hasil Analisis Data</h2>
              <p>Data-data yg telah selesai dianalisis oleh analis data kami dari berbegai perspektif disajikan dalam
                bentuk menarik.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4" >
        <a href="pages/layout/kursildanmodul/Halaman2bukakm.php" style="text-decoration: none; color: black;">
          <div class="box mx-auto">
            <div class="iconBx text-center">
              <i class="fa fa-briefcase" aria-hidden="true" style="font-size: 70px; text-align: center;"></i>
            </div>
            <div class="content">
              <h2><br>Data Kursil Dan Modul</h2>
              <p>Kami memiliki kurikulum silabi dan modul yang dihasilkan dari proses panjang sebagai bahan ajar dalam
                penyelenggaraan pelatihan.</p>
            </div>
          </div>
        </a>
      </div>
      

      <div class="col-lg-4" >
        <a href="pages/layout/datapelatihan.php" style="text-decoration: none; color: black;">
          <div class="box mx-auto">
            <div class="iconBx text-center">
              <i class="fa fa-users" aria-hidden="true" style="font-size: 70px; text-align: center"></i>
            </div>
            <div class="content">
              <h2><br>Data Pelatihan</h2>
              <p>Begitu banyak pelatihan klasikal yang telah kami selenggarakan untuk gerakan koperasi dan pelaku usaha,
                berikut adalah datanya.</p>
            </div>
          </div>
        </a>
      </div>
    
    <div class="col-lg-4" >
      <a href="pages/layout/datapeserta.php" style="text-decoration: none; color: black;">
        <div class="box mx-auto">
          <div class="iconBx text-center">
            <i class="fa fa-user" aria-hidden="true" style="font-size: 70px; text-align: center;"></i>
          </div>
          <div class="content">
            <h2><br>Data Peserta</h2>
            <p>Kami menargetkan ribuan peserta untuk diberi pelatihan klasikalsetiap tahunnya, anda dapat melihatnya
              di sini.</p>
          </div>
        </div>
      </a>
    </div>
    
    <div class="col-lg-4" >
      <a href="pages/layout/sertifikat/data_sertifikat.php" style="text-decoration: none; color: black;">
        <div class="box mx-auto">
          <div class="iconBx text-center">
            <i class="fa fa-trophy" aria-hidden="true" style="font-size: 70px; text-align: center;"></i>
          </div>
          <div class="content">
            <h2><br>Data Sertifikat</h2>
            <p><br>Kami memiliki beberapa penghargaan yang telah kami dapatkan sebelumnya.</p>
          </div>
        </div>
      </a>
    </div>
    
      <div class="col-lg-4" >
        <a href="pages/layout/datasdm.php" style="text-decoration: none; color: black;">
        <div class="box mx-auto">
          <div class="iconBx text-center">
            <i class="fa fa-desktop" aria-hidden="true" style="font-size: 70px; text-align: center; "></i>
          </div>
          <div class="content">
            <h2><br>Data SDM UPT</h2>
            <p>Kami memiliki Sumber Daya Manusia yang handal dan kompeten dalam penyelenggaraan pelatihan.</p>
          </div>
        </div>
    </a>
    </div>

  </section>

 <!--  <section class="sec">
    <div class="content">
      <div class="row">

      </div>
    </div>
  </section>
 -->

<section class="koneng" id="contact">
  <div class="content">
    <div class="kuning">
      <div class="bok">
        <div class="iconBx">
          <ul>
            <li><p class="fa fa-map-o" aria-hidden="true"></p></li>
            <li><a class="kantor">Kantor Pusat</a>
              <p class="alamat">Jl.Teluk Pacitan No. 47-48 Arjosari Malang Jawa Timur.Indonesia</p></li>
            <li><p class="fa fa-phone" aria-hidden="true" ></p></li>
            <li><a class="call">Call Center</a>
              <p class="nomor">(0341)496776 (0341)412203</p></li>
            <li><p class="fa fa-envelope-o" aria-hidden="true"></p></li>
            <li><a class="contact">Contact Email</a>
              <p class="email">uptdiklatkukm@gmail.com</p></li>
          </ul>
          
        </div>
      </div>
    </div>
  </div>
</section>

  <!--News-->
  <section class="stats">
   <div class="content">
      <div class="biru">
    <div class="sijawara">
      <img src="jawara1.png">
      <a>sijawara</a>
    </div>  
  </div>
  </div>
  </section>


  <!-- <section class="sec contact"> -->
  <footer class="footer">
    <div class="content">
      <p class="copyright" align="center">Copyright 2020 © UPTPKUKMJATIM. All Right Reserved.</p>
    </div>
  </footer>
  <!-- REQUIRED SCRIPTS -->

  <script type="text/javascript">
    window.addEventListener("scroll", function(){
    var header = document.querySelector("navbar");
    header.classList.toggle("sticky", window.scrollY > 0);
  })
  function navbar(){
    var header = document.querySelector("navbar-toggler order-1");
    header.classList.toggle("active");
  }
  
</script>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <link rel="stylesheet" type="text/css" href="plugins/sweetalert2/sweetalert2.min.css">
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-default@3/default.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script> -->
</body>

</html>
<?php 

    }else{

          header("location:index.php");

          }

?>
