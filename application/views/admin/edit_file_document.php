<div class="content-wrapper">
    <div class="content row">
<!-- Content Wrapper. Contains page content -->
            <div class="row">
                  <div class="col-md-12">
                       <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Edit File Document</h3>
                        </div>
                        <?php foreach($document as $document){ ?>
                        <form action="<?php echo base_url(). 'admin/filedocument/update_file_document'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data" style="padding: 30px;">
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal</label>
                                    <div class="col-sm-6">
                                        <div class="input-group date ml-2">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="text" name="tanggal" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo isset($_GET['tanggal'])?$tanggal:date('Y-m-d'); ?>" >
                                        </div>
                                    </div>
                                    <label class="col-sm-2 control-label">Id File Document</label>
                                    <div class="col-sm-2">
                                        <div class="input-group date ml-2">
                                          <div class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                          </div>
                                          <input type="text" name="id" class="form-control" value="<?php echo $document->id_document ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tiga" class="col-sm-2 control-label">Judul File Document*</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date ml-2">
                                          <div class="input-group-addon">
                                            <i class="fa fa-pencil-square-o"></i>
                                          </div>
                                          <input type="text" name="judul_document" class="form-control" placeholder="Judul File Document" value="<?php echo $document->judul_document ?>" required oninvalid="this.setCustomValidity('Judul jangan kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tiga" class="col-sm-2 control-label">Keterangan File Document</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date ml-2">
                                          <div class="input-group-addon">
                                            <i class="fa  fa-bookmark"></i>
                                          </div>
                                          <textarea type="text" name="keterangan" class="form-control" placeholder="Keterangan File Document" rows="2"><?php echo $document->keterangan ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tiga" class="col-sm-2 control-label">File Document*</label>
                                    <div class="col-sm-10">
                                          <?php echo form_open_multipart('admin/filedocument/update_file_document');?>
                                          <input type="file" name="file_document" class="form-control">
                                    </div>
                                </div>
                                <!--input image awal-->
                            </div>
                            <!-- /.box-body -->
                           <div class="box-footer">
                                 <input type="submit" class="btn btn-info pull-right" value="Simpan" name="'update':'save'">
                                 <a href="<?php echo base_url('admin/filedocument/list_file_document'); ?>"><button type="button" class="btn btn-primary pull-left ">Kembali</button></a>
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
