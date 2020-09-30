<form action="save" method="post" enctype="multipart/form-data">
<!-- Modal Tambah Data-->
<div class="modal fade" id="modaltambah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
        <?= $validation->listErrors(); ?>
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
    
    <!-- End -->
    <!-- <script>
    $(document).ready(function(){
      $('.tambahdata').submit(function(e){
        e.preventDefault();
        $.ajax({
        type: "post",
        url: $(this).attr('action'),
        data : $(this).serialize(),
        dataType: "json",
        beforeSend: function() {
          $('.btnsimpan').attr('disable', 'disabled');
          $('.btnsimpan').html('<i class="fa fa-spin fa-spinner"></i>');
        },
        complete:function(){
          $('.btnsimpan').removeAttr('disable');
          $('.btnsimpan').html('Simpan');
        },
        success: function(response){
          if(response.error){
            if(response.error.judul){
              $('#judul').addClass('is-invalid');
              $('.errorJudul').html(response.error.judul);
            }else{
              $('#judul').removeClass('is-invalid');
              $('.errorJudul').html('');
            }
          }
        },
          error: function(xhr, ajaxOptions, thrownError) {
              alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
          }
      });
      return false;
    });
  }); 
    </script> -->