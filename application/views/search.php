    <!-- Page Content -->
    <div class="container-fluid" style="margin-top:100px">
      <div class="margin-profile">
    <!-- Page Heading/Breadcrumbs -->
      <h1>
        <small>
          Search
        </small>
      </h1>

      <ol class="breadcrumb mt-4">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Baranda</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('berita'); ?>">Berita</a>
        </li>
        <li class="breadcrumb-item active">Search</li>
      </ol>
      <div class="row">
      <?php $this->load->view('sidebar_list_berita'); ?>
        <div class="col-lg-9">
          <div class="row">
          <?php if (count($results) > 0 && $results!="") {?>
          <?php foreach ($results as $results) {
          ?>

          <div class="col-lg-4 col-md-6 col-berita">
            <div class="card mb-3">
              <a href="<?php echo base_url('berita/view/'.$results->id_berita.'/'.$results->judul)?>"><p style="position:absolute; padding:10px 15px; right:0px; background: #1474ae; color:white; font-size:12px!important; <?php if ($results->nama_kategori_berita == "") {
                echo 'display:none;';} ?>"><?php echo $results->nama_kategori_berita ?></p>
                <img class="card-img-top" src="<?php echo base_url('./img/image_berita/'.$results->img_berita) ?>" alt="<?php echo $results->judul; ?>" style="height: 190px;
                max-height: 190px;"></a>

              <div class="card-body" style="font-size:12px; max-height:265px; height:265px;">
                <i class="fa fa-clock-o pull-left">
                &nbsp;&nbsp;<?php date_default_timezone_set('Asia/Jakarta'); echo date('D, m, Y',strtotime($results->tanggal)); echo '&nbsp;'. date('h:s', strtotime($results->jam)).' WIB';?></i>
                <hr class="mt-4">
                <h5 class="card-title">
                  <a href="<?php echo base_url('berita/view/'.$results->id_berita.'/'.$results->judul) ?>" style="font-size:14px;"><?php echo character_limiter($results->judul, 50); ?></a>
                </h5>
                <div class="card-text" style="font-size:14px;"><?php echo character_limiter($results->isi_berita, 170,' [...]'); ?></div>
              </div>
              <div class="card-footer">
                <i class="fa fa-eye pull-left">&nbsp;<span style="font-size:12px;color: #1474ae;">&nbsp; <?php echo $results->view_berita; ?>&nbsp;View</span>
                </i>
                <i class="fa fa-comments pull-right">
                <a class="ml-2" href="<?php echo base_url('berita/view/'.$results->id_berita.'/'.$results->judul) ?>#disqus_thread" style="font-size:12px;"></a></i>
              </div>
            </div>
          </div>

          <?php } ?>
          <?php }else{ ?>
            <div class="container-fluid text-center" style="margin-top:10%;">
              <i class="fa fa-database fa-4x text-muted"></i>
              <h5 class="mt-4 text-muted">Data tidak ditemukan</h5>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
    <!-- /.row -->
</div>
