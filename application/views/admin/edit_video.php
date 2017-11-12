<div class="content-wrapper">
    <div class="content row">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Upload Video</h3>
                    </div>
                    <?php foreach ($video as $video) { ?>
                    <form action="<?php echo base_url(). 'admin/video/update_video'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data" style="padding: 30px;">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="dua" class="col-sm-2 control-label">Tanggal</label>
                                <div class="col-sm-7">
                                    <div class="input-group date ml-2">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" name="tanggal" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo isset($_GET['tanggal'])?$tanggal:date('Y-m-d'); ?>" readonly>
                                    </div>
                                </div>

                                <label class="col-sm-1 control-label">Id Video</label>
                                <div class="col-sm-2">
                                    <div class="input-group date ml-2">
                                      <div class="input-group-addon">
                                        <i class="fa fa-info"></i>
                                      </div>
                                      <input type="text" name="id" class="form-control" value="<?php echo $video->id_video ?>" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Judul Video*</label>
                                <div class="col-sm-10">
                                    <div class="input-group date ml-2">
                                      <div class="input-group-addon">
                                        <i class="fa fa-pencil-square-o"></i>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Judul Video" name="judul_video" value="<?php echo $video->judul ?>" required oninvalid="this.setCustomValidity('Judul jangan kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">link Video*</label>
                                <div class="col-sm-10">
                                    <div class="input-group date ml-2">
                                        <div class="input-group-addon">
                                            <i class="fa fa-link"></i>
                                        </div>
                                        <div class="input-group-addon">
                                            <i >https://www.youtube.com/watch?v=</i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="contoh : ZRP7-DYVe50" name="link_video" value="<?php echo $video->link_video ?>" required oninvalid="this.setCustomValidity('vidID jangan kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="tiga" class="col-sm-2 control-label">Keterangan Video</label>
                                <div class="col-sm-10">
                                    <textarea id="editor1" name="keterangan" rows="3" cols="4"class="form-control konten" placeholder="Isi Berita"><?php echo $video->keterangan ?></textarea>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" class="btn btn-info pull-right" value="Simpan" name="<'update':'save'; ?>">

                             <a href="<?php echo base_url('admin/video/list_video'); ?>"><button type="button" class="btn btn-primary pull-right" style="margin-right:10px;">Kembali</button></a>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                    <?php } ?>
                </div>
            </div>
            <!--/.col (right) -->
        </div>
    </div>
</div>
