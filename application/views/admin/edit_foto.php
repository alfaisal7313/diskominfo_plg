<div class="content-wrapper">
    <div class="content row">
<!-- Content Wrapper. Contains page content -->
            <div class="row">
                  <div class="col-md-12">
                       <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Edit Foto</h3>
                        </div>
                        <?php foreach($foto as $foto){ ?>
                        <form action="<?php echo base_url(). 'admin/foto/update_foto'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data" style="padding: 30px;">
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal</label>
                                    <div class="col-sm-7">
                                        <div class="input-group date ml-2">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="text" name="tanggal" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo isset($_GET['tanggal'])?$tanggal:date('Y-m-d'); ?>" >
                                        </div>
                                    </div>
                                    <label class="col-sm-1 control-label">Id Foto</label>
                                    <div class="col-sm-2">
                                        <div class="input-group date ml-2">
                                          <div class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                          </div>
                                          <input type="text" name="id" class="form-control" value="<?php echo $foto->id_foto ?>" readonly>
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
                                          <input type="text" name="judul_foto" class="form-control" placeholder="Judul Foto" value="<?php echo $foto->judul ?>" required oninvalid="this.setCustomValidity('Judul jangan kosong')" oninput="setCustomValidity('')">
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
                                          <textarea type="text" name="keterangan" class="form-control" placeholder="Keterangan Foto" rows="2"><?php echo $foto->keterangan ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Gambar</label>
                                    <div class="col-sm-10">
                                          <?php echo form_open_multipart('admin/foto/update_foto');?>
                                          <input type="file" name="file_foto" class="form-control">
                                          <?php echo $error;?>
                                    </div>
                                </div>
                                <!--input image awal-->
                            </div>
                            <!-- /.box-body -->
                           <div class="box-footer">
                                 <input type="submit" class="btn btn-info pull-right" value="Simpan" name="'update':'save'">
                                 <a href="<?php echo base_url('admin/foto/list_foto'); ?>"><button type="button" class="btn btn-primary pull-right" style="margin-right:10px;">Kembali</button></a>
                           </div>
                            <!-- /.box-footer -->
                        </form>
                        <?php } ?>
                    </div>
                </div>
                <!--/.col (right) -->
            </div>
<!-- /.row -->
    </div>
</div>
