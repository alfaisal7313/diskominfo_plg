<div class="content-wrapper">
    <div class="content row">
          <div class="row">
              <div class="col-md-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                          <h3 class="box-title">Form Input Slideshow</h3>
                      </div>
                      <form action="<?php echo base_url(). 'admin/slideshow/tambah_Slide'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data" style="padding: 30px;">
                          <div class="box-body">
                              <div class="form-group">
                                  <label for="dua" class="col-sm-2 control-label">Tanggal</label>
                                  <div class="col-sm-10">
                                      <div class="input-group date ml-2">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="tanggal" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo isset($_GET['tanggal'])?$tanggal:date('Y-m-d'); ?>" readonly>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="tiga" class="col-sm-2 control-label">Judul Slideshow</label>
                                  <div class="col-sm-10">
                                      <div class="input-group date ml-2">
                                        <div class="input-group-addon">
                                          <i class="fa fa-pencil-square-o"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Judul" name="judul" >
                                      </div>
                                      <p style="color:red; padding-left:40px;">* Jangan Pakai Karakter (koma, underscore)</p>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="tiga" class="col-sm-2 control-label">Keterangan Slideshow</label>
                                  <div class="col-sm-10">
                                      <div class="input-group date ml-2">
                                        <div class="input-group-addon">
                                          <i class="fa  fa-bookmark"></i>
                                        </div>
                                        <textarea type="text" name="keterangan" class="form-control" placeholder="Keterangan Slide" rows="2"></textarea>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="tiga" class="col-sm-2 control-label">Gambar*</label>
                                  <div class="col-sm-10">

                                      <?php echo form_open_multipart('admin/slideshow/tambah_slide');?>
                                      <input type="file" name="foto_slide" class="form-control" id="foto" required>
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
                              <a href="<?php echo base_url('admin/slideshow/list_slide'); ?>"><button type="button" class="btn btn-primary pull-left ">List Slideshow</button></a>
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
