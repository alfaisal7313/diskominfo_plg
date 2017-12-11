<div class="content-wrapper">
  <div class="content row">
    <div class="row">
      <section class="content" style="margin-top: 5%;">
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
                  <div class="inner" style="padding: 30% 10%">
                    <p class="small-h4" style="font-size: 23px !important;">List Berita</p>
                    <div class="icon" style="top:20%; right: 25px;">
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
                  <div class="inner" style="padding: 30% 10%">
                    <p class="small-h4" style="font-size: 23px !important;">List Foto</p>
                    <div class="icon" style="top:20%; right: 25px;">
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
                  <div class="inner" style="padding: 30% 10%">
                    <p class="small-h4" style="font-size: 23px !important;">List Video</p>
                    <div class="icon" style="top:20%; right: 25px;">
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
                  <div class="inner" style="padding: 30% 10%">
                    <p class="small-h4" style="font-size: 23px !important;">List File</p>
                    <div class="icon" style="top:20%; right: 25px;">
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
