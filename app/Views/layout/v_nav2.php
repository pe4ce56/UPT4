 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top  shadow-lg p-3 bg-white rounded">
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
          window.location.replace('<?=base_url('login/logout')?>');
         } ,500);
        }
      })

    });
 

  </script>
  <!-- /.navbar -->