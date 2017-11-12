<div class="content-wrapper">
    <div class="content row">
        <div class="row">
          <section class="content" style="margin: 5% 0%;">
          <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-files-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Uploads Berita</span>
                    <span class="info-box-number">
                      <?php echo $jum_berita; ?>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-green"><i class="fa fa-files-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Uploads Foto</span>
                    <span class="info-box-number">
                      <?php echo $jum_foto; ?>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Uploads Video</span>
                    <span class="info-box-number">
                      <?php echo $jum_video; ?>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="fa fa-files-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Uploads File Document</span>
                    <span class="info-box-number">
                      <?php echo $jum_document; ?>
                    </span>
                  </div>
                </div>
              </div>
              <!-- Small boxes (Stat box) -->

              <div class="row" style="margin: 10% 0% 0%">
                <div class="col-lg-3 col-xs-6" >
                  <!-- small box -->
                  <a href="<?php echo base_url('admin/berita/list_berita'); ?>" class="small-box-footer">
                  <div class="small-box bg-green">
                    <div class="inner" style="padding: 25% 10%">
                      <h3 class="small-h3" >Berita</h3>
                      <div class="icon" style="top:25px; right: 25px;">
                      <i class="ion ion-earth" ></i>
                    </div>
                    </div>
                  </div>
                  </a>
                </div>

                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <a href="<?php echo base_url('admin/foto/list_foto'); ?>" class="small-box-footer">
                  <div class="small-box bg-green">
                    <div class="inner" style="padding: 25% 10%">
                      <h3 class="small-h3" >Foto</h3>
                      <div class="icon" style="top:25px; right: 25px;">
                      <i class="ion ion-android-image" ></i>
                    </div>
                    </div>
                  </div>
                  </a>
                </div>

                <div class="col-lg-3 col-xs-6" >
                  <!-- small box -->
                  <a href="<?php echo base_url('admin/video/list_video'); ?>" class="small-box-footer">
                  <div class="small-box bg-green">
                    <div class="inner" style="padding: 25% 10%">
                      <h3 class="small-h3">Video</h3>
                      <div class="icon" style="top:25px; right: 25px;">
                      <i class="ion ion-ios-film" ></i>
                    </div>
                    </div>
                  </div>
                  </a>
                </div>

                <div class="col-lg-3 col-xs-6" >
                  <!-- small box -->
                  <a href="<?php echo base_url('admin/filedocument/list_file_document'); ?>" class="small-box-footer">
                  <div class="small-box bg-green">
                    <div class="inner" style="padding: 25% 10%">
                      <h3 class="small-h3" >File</h3>
                      <div class="icon" style="top:25px; right: 25px;">
                      <i class="ion ion-ios-folder" ></i>
                    </div>
                    </div>
                  </div>
                  </a>
                </div>

              </div>
            </div>
            <!-- /.row -->

          </section>
      </div>
    </div>
</div>
