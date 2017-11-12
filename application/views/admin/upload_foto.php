<div class="content-wrapper">
    <div class="content row">
            <!-- Content Wrapper. Contains page content -->
            <div class="row">
                  <div class="col-md-12">
                       <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Upload Foto</h3>
                        </div>
                        <form action="<?php echo base_url(). 'admin/foto/tambah_foto'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data" style="padding: 30px;">
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
                                    <label for="tiga" class="col-sm-2 control-label">Judul Foto*</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date ml-2">
                                          <div class="input-group-addon">
                                            <i class="fa fa-pencil-square-o"></i>
                                          </div>
                                          <input type="text" name="judul" class="form-control" placeholder="Judul Foto" required oninvalid="this.setCustomValidity('Silahkan isi judul foto')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tiga" class="col-sm-2 control-label">Keterangan Foto</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date ml-2">
                                          <div class="input-group-addon">
                                            <i class="fa  fa-bookmark"></i>
                                          </div>
                                          <textarea type="text" name="keterangan" class="form-control" placeholder="Keterangan Foto" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tiga" class="col-sm-2 control-label">Foto*</label>
                                    <div class="col-sm-10">
                                          <?php echo form_open_multipart('admin/foto/tambah_foto');?>
                                          <input type="file" name="foto_galeri" class="form-control" id="foto" required>
                                          <?php echo $error;?>
                                    </div>
                                </div>
                                <!--input image awal-->
                            </div>
                            <!-- /.box-body -->
                           <div class="box-footer">
                                 <input type="submit" class="btn btn-info pull-right" value="Simpan" name="'update':'save'">
                                 <a href="<?php echo base_url('admin/foto/list_foto'); ?>"><button type="button" class="btn btn-primary pull-left ">List Foto</button></a>
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
