<div class="content-wrapper">
    <div class="content row">
          <div class="row">
              <div class="col-md-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                          <h3 class="box-title">Form Input Berita</h3>
                      </div>
                      <form action="<?php echo base_url(). 'admin/berita/tambah_berita'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data" style="padding: 30px;">
                          <div class="box-body">
                              <div class="form-group">
                                  <label for="dua" class="col-sm-2 control-label">Tanggal</label>
                                  <div class="col-sm-5">
                                      <div class="input-group date ml-2">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="tanggal" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo isset($_GET['tanggal'])?$tanggal:date('Y-m-d'); ?>" readonly>
                                      </div>
                                  </div>

                                  <label for="dua" class="col-sm-1 control-label">Jam</label>
                                  <div class="col-sm-4">
                                      <div class="input-group date ml-2">
                                        <div class="input-group-addon">
                                          <i class="fa  fa-clock-o"></i>
                                        </div>
                                        <input id="clockDisplay" type="text" name="jam" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo isset($_GET['jam'])?$jam:date('H:i:s a'); ?>" readonly>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="tiga" class="col-sm-2 control-label">Judul Berita*</label>
                                  <div class="col-sm-5">
                                      <div class="input-group date ml-2">
                                        <div class="input-group-addon">
                                          <i class="fa fa-pencil-square-o"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Judul" name="judul" required oninvalid="this.setCustomValidity('Silahkan isi judul berita')" oninput="setCustomValidity('')">
                                      </div>
                                      <p style="color:red; padding-left:40px;">* Jangan Pakai Karakter (koma, underscore)</p>
                                  </div>

                                  <label class="col-sm-1 control-label">Kategori</label>
                                  <div class="col-sm-4">
                                      <select name="id_kategori_berita"  class="form-control select2 " style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" value="">Please Select</option>
                                        <option value="1">Berita Umum</option>
                                        <option value="2">Berita Informasi Publik</option>
                                        <option value="3">Pengumuman</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="tiga" class="col-sm-2 control-label">Isi Berita*</label>
                                  <div class="col-sm-10">
                                      <textarea id="editor1" name="isi_berita" rows="10" cols="5" class="form-control konten" placeholder="Isi Berita" required oninvalid="this.setCustomValidity('Silahkan isi form berita')" oninput="setCustomValidity('')"></textarea>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="tiga" class="col-sm-2 control-label">Gambar*</label>
                                  <div class="col-sm-10">

                                      <?php echo form_open_multipart('admin/berita/tambah_berita');?>
                                      <input type="file" name="foto_berita" class="form-control" id="foto" required>
                                      <div id="image-holder">
                                      <?php echo $error;?>
                                      </div>
                                  </div>
                              </div>
                              <!--input image awal-->
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                              <input type="submit" class="btn btn-info pull-right" value="Simpan" name="'update':'save'">
                              <a href="<?php echo base_url('admin/berita/list_berita'); ?>"><button type="button" class="btn btn-primary pull-left ">List Berita</button></a>
                          </div>
                          <!-- /.box-footer -->
                      </form>
                  </div>
              </div>
              <!--/.col (right) -->
          </div>
          <!-- /.row -->
    </div>
</div>

<script type="text/javascript" language="javascript">
function renderTime(){
 var currentTime = new Date();
 var h = currentTime.getHours();
 var m = currentTime.getMinutes();
 var s = currentTime.getSeconds();
 var am_pm = currentTime.getHours() >= 12 ? "PM" : "AM";
 if (h == 0){
  h = 24;
   }
   if (h < 10){
    h = "0" + h;
    }
    if (m < 10){
    m = "0" + m;
    }
    if (s < 10){
    s = "0" + s;
    }
 var myClock = document.getElementById('clockDisplay');
 myClock.textContent = h + " : " + m + " : " + s + " " + am_pm;
 setTimeout ('renderTime()',1000);
 }
 renderTime();
</script>
