<div class="content-wrapper">
    <div class="content row">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Edit Berita</h3>
                    </div>
                    <?php foreach($berita as $berita){ ?>
                    <form action="<?php echo base_url(). 'admin/berita/update_berita'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data" style="padding: 30px;">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="dua" class="col-sm-2 control-label">Tanggal</label>
                                <div class="col-sm-6">
                                    <div class="input-group date ml-2">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input type="text" name="tanggal" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo isset($_GET['tanggal'])?$tanggal:date('Y-m-d'); ?>" readonly>
                                    </div>
                                </div>

                                <label class="col-sm-1 control-label">Id Berita</label>
                                    <div class="col-sm-3">
                                        <div class="input-group date ml-2">
                                          <div class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                          </div>
                                          <input type="text" name="id" class="form-control" value="<?php echo $berita->id_berita ?>" readonly>
                                        </div>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label for="tiga" class="col-sm-2 control-label">Judul Berita*</label>
                                <div class="col-sm-6">
                                    <div class="input-group date ml-2">
                                      <div class="input-group-addon">
                                        <i class="fa fa-pencil-square-o"></i>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Judul" name="judul" value="<?php echo $berita->judul ?>" required oninvalid="this.setCustomValidity('Judul jangan kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>

                                <label class="col-sm-1 control-label">Kategori</label>
                                <div class="col-sm-3">
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
                                    <textarea id="editor1" name="isi_berita" rows="10"ame="konten" rows="5" cols="5"class="form-control konten" placeholder="Isi Berita" required oninvalid="this.setCustomValidity('Isi berita jangan kosong')" oninput="setCustomValidity('')"><?php echo $berita->isi_berita ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tiga" class="col-sm-2 control-label">Gambar</label>
                                <div class="col-sm-10">

                                    <?php echo form_open_multipart('admin/berita/update_berita');?>
                                    <input type="file" name="foto_berita" class="form-control">
                                    <br>
                                    <?php echo $error;?>
                                </div>
                            </div>
                            <!--input image-->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" class="btn btn-info pull-right" value="Simpan" name="'update':'save'">
                            <a href="<?php echo base_url('admin/berita/list_berita')?>"><button type="button" class="btn btn-primary pull-right" style="margin-right:10px;">Kembali</button></a>
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
