    <!-- Page Content -->
    <div class="container-fluid" style="margin-top:90px">
      <div class="margin-profile">
    <!-- Page Heading/Breadcrumbs -->
      <h1>
        <small>
          BERITA
        </small>
      </h1>

      <ol class="breadcrumb mt-4">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Baranda</a>
        </li>
        <li class="breadcrumb-item active">Berita</li>
      </ol>

      <div class="row">
      <?php $this->load->view('sidebar_list_berita'); ?>
        <div class="col-lg-9">
          <div class="row">
            <?php foreach ($berita as $berita) {
            ?>
            <div class="col-lg-4 col-md-6 col-berita">
              <div class="card mb-3">
                <a href="<?php echo base_url('berita/view/'.$berita->id_berita.'/'.$berita->judul)?>"><p style="position:absolute; padding:10px 15px; right:0px; background: #1474ae; color:white; font-size:12px!important; <?php if ($berita->nama_kategori_berita == "") {
                  echo 'display:none;';} ?>"><?php echo $berita->nama_kategori_berita ?></p>
                  <img class="card-img-top" src="<?php echo base_url('./img/image_berita/'.$berita->img_berita) ?>" alt="<?php echo $berita->judul; ?>"></a>
                <div class="card-body" style="font-size:12px; max-height:265px; height:265px;">
                  <i class="fa fa-clock-o pull-left">
                  &nbsp;&nbsp;<?php $hari = array ( 1 =>    'Senin', 'Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
                  date_default_timezone_set('Asia/Jakarta'); echo $hari [date('N',strtotime($berita->tanggal))].date(', d/m/Y',strtotime($berita->tanggal)); echo '&nbsp;'. date('h:s', strtotime($berita->jam)).' WIB';?></i>
                  <hr class="mt-4">
                  <h5 class="card-title">
                    <a href="<?php echo base_url('berita/view/'.$berita->id_berita.'/'.$berita->judul); ?>" style="font-size:14px;"><?php echo character_limiter($berita->judul, 50); ?></a>
                  </h5>
                  <div class="card-text" style="font-size:14px;"><?php echo character_limiter($berita->isi_berita, 170,'...'); ?></div>
                </div>
                <div class="card-footer">
                  <i class="fa fa-eye pull-left">&nbsp;<span style="font-size:12px;color: #1474ae;">&nbsp; <?php echo $berita->view_berita; ?>&nbsp;View</span>
                  </i>
                  <i class="fa fa-comments pull-right">
                  <a class="ml-2" href="<?php echo base_url('berita/view/'.$berita->id_berita.'/'.$berita->judul) ?>#disqus_thread" style="font-size:12px;"></a></i>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="mt-5">
            <!-- Pagination -->
            <?php echo $pagination; ?>
          </div>

        </div>
      </div>
    </div>
  <!-- /.row -->
</div>
