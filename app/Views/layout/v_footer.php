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
  <script src="<?= base_url() ?>/template/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>/template/dist/js/adminlte.min.js"></script>
  <script src="<?= base_url() ?>/template/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/js/myscript.js"></script>
  </script>
</body>
</html>
