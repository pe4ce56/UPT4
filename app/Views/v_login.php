<section id="home">
    <div id="carouselExampleIndicators" class="carousel-inner slide " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      </ol>
      <div class="carousel">
        <div class="carousel-item active">
          <img src="<?= base_url() ?>/gambar/loby.png" class="d-block w-100" alt="..." id="slide">
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
        <a href="#" data-toggle="modal" data-target="#contohmodal" style="text-decoration: none; color: black;">
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
        <a href="#" data-toggle="modal" data-target="#contohmodal" style="text-decoration: none; color: black;">
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
        <a href="#" data-toggle="modal" data-target="#contohmodal" style="text-decoration: none; color: black;">
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
      <a href="#" data-toggle="modal" data-target="#contohmodal" style="text-decoration: none; color: black;">
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
      <a href="#" data-toggle="modal" data-target="#contohmodal" style="text-decoration: none; color: black;">
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
        <a href="#" data-toggle="modal" data-target="#contohmodal" style="text-decoration: none; color: black;">
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

    <div class="modal fade " id="contohmodal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header mb-3">
                  <img src="<?= base_url() ?>/gambar/logojawatimur.png" alt="Prov Jatim Logo" class="logo" style="width:35px ;
                    height: 55px;">
                    <div class="judullogin" style="font-size: 19px; color: #2E3192;">
                      <a><b> &nbsp; UPT Pelatihan Dinas Koperasi</b> Dan <b>UKM <br> &nbsp; Provinsi Jawa Timur</b></a>
                    </div>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
              </div>

               
          <?php 
          echo form_open('login/cek_login');
          ?>
          

          <div class="modal-body">
            <div class="from-row">
              <b class="ml-2"><i class="fa fa-user">&nbsp;</i>Nama</b> Pengguna :
                  <div class="col-sm">
                    <input type="text" placeholder="Nama Pengguna" name="username" class="form-control my-7 p-4" style="margin-bottom: 15px;" >
                  </div>
                </div>
                <div class="from-row">
                  <b class="ml-2"><i class="fa fa-lock">&nbsp;</i>Kata</b> Sandi :
                  <div class="col-sm">
                    <input type="password" placeholder="*****" name="password" class="form-control my-7 p-4" >
                  </div>
                </div>
          </div>
            <div class="modal-footer">
              <button type="submit" name="login" class="btn btn-primary btn-login">MASUK</button>
            </div>
          
        <?php echo form_close(); ?>

    </div>
  </div>
</div>
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
      <img src="<?= base_url() ?>/gambar/jawara1.png">
      <a>sijawara</a>
    </div>  
  </div>
  </div>
  </section>
   <script>
    $(document).ready(function(){
    <?php if (session()->getFlashdata('pesan')) : ?>
      Swal.fire({
          title : 'Selamat!',
          text  : 'Anda Berhasil Login!',
          icon  : 'success'
        })
    <?php endif ?>
    var base_url = `<?= base_url(); ?>`;
    });
    </script>
    