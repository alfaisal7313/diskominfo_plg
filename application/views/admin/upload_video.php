<div class="content-wrapper">
    <div class="content row">
        <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Form Upload Video</h3>
                  </div>
                  <form action="<?php echo base_url(). 'admin/video/tambah_video'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data" style="padding: 30px;">
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
                              <label for="tiga" class="col-sm-2 control-label">Judul Video*</label>
                              <div class="col-sm-10">
                                  <div class="input-group date ml-2">
                                    <div class="input-group-addon">
                                      <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Judul Video" name="judul" required oninvalid="this.setCustomValidity('Silahkan isi judul video')" oninput="setCustomValidity('')">
                                  </div>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="tiga" class="col-sm-2 control-label">link Video*</label>
                              <div class="col-sm-10">
                                  <div class="input-group date ml-2">
                                      <div class="input-group-addon">
                                          <i class="fa fa-link"></i>
                                      </div>
                                      <div class="input-group-addon">
                                          <i >https://www.youtube.com/watch?v=</i>
                                      </div>
                                      <input type="text" class="form-control" placeholder="contoh : ZRP7-DYVe50" name="link" required oninvalid="this.setCustomValidity('Silahkan isi vidID, contoh : ZRP7-DYVe50')" oninput="setCustomValidity('')">
                                  </div>
                              </div>
                          </div>

                           <div class="form-group">
                              <label for="tiga" class="col-sm-2 control-label">Keterangan Video</label>
                              <div class="col-sm-10">
                                  <textarea id="editor1" name="keterangan" rows="3" cols="5"class="form-control konten" placeholder="Keterangan video"></textarea>
                              </div>
                          </div>

                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                          <input type="submit" class="btn btn-info pull-right" value="Simpan" name="<'update':'save'; ?>">

                           <a href="<?php echo base_url('admin/video/list_video'); ?>"><button type="button" class="btn btn-primary pull-left ">List Video</button></a>
                      </div>
                      <!-- /.box-footer -->
                  </form>
              </div>
          </div>
          <!--/.col (right) -->
      </div>
    </div>
</div>
