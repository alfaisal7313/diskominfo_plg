<!-- <section id="section07" class="container scroll">
  <a href="#scrolling"><span></span><span></span><span></span><small>Scroll</small></a>
</section> -->

  <div class="slider-active owl-carousel" >
    <?php foreach ($slideshow as $slideshow ) {?>
      <div class="slider-area">
        <div class="owl-text-overlay hidden-xs bg-title" <?php if ($slideshow->judul == NULL) {echo 'style="display:none;"';}else {echo 'style="display:block;"';} ?>>
            <h2 class="owl-title"><?php echo $slideshow->judul; ?></h2>
            <p class="owl-caption hidden-sm"><?php echo $slideshow->keterangan; ?></p>
        </div>
        <img class="img-responsive" src="<?php echo base_url('./img/image_slide/'.$slideshow->gambar) ?>" ?>
      </div>
    <?php } ?>
  </div>

<!-- Page Content -->
<div class="container">

  <h2 class="my-4" >Berita Terbaru</h2>

  <div class="row">
    <?php foreach ($berita as $berita) {
  ?>
  <div class="col-lg-4 col-md-6 portfolio-item">
    <div class="card">
      <a href="<?php echo base_url('berita/view/'.$berita->id_berita.'/'.$berita->judul) ?>"><p style="position:absolute; padding:10px 15px; right:0px; background: #1474ae; color:white; font-size:12px!important;<?php if ($berita->nama_kategori_berita == "") {
        echo 'display:none;';} ?>"><?php echo $berita->nama_kategori_berita ?></p><img class="card-img-top" src="<?php echo base_url('./img/image_berita/'.$berita->img_berita) ?>" alt="<?php echo $berita->judul; ?>"></a>
      <div class="card-body" style="max-height:350px; height:300px;">
        <i class="fa fa-clock-o pull-left card-font">
        &nbsp;&nbsp;<?php $hari = array ( 1 =>    'Senin', 'Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
        date_default_timezone_set('Asia/Jakarta'); echo $hari [date('N',strtotime($berita->tanggal ))].date(', d/m/Y',strtotime($berita->tanggal )); echo '&nbsp;'. date('h:s', strtotime($berita->jam)).' WIB';?></i>
        <hr class="mt-4">
        <h5 class="card-title">
          <a href="<?php echo base_url('berita/view/'.$berita->id_berita.'/'.$berita->judul) ?>"><?php echo character_limiter($berita->judul, 50); ?></a>
        </h5>
        <div class="card-text"><?php echo character_limiter($berita->isi_berita, 220,'...'); ?></div>
      </div>
      <div class="card-footer">
        <i class="fa fa-eye pull-left">&nbsp;<span style="color: #1474ae;">&nbsp; <?php echo $berita->view_berita; ?>&nbsp;View</span>
        </i>
        <i class="fa fa-comments pull-right">
        <a class="ml-2" href="<?php echo base_url('berita/view/'.$berita->id_berita.'/'.$berita->judul  ) ?>#disqus_thread"></a></i>
      </div>
    </div>
  </div>
    <?php } ?>
  </div>
  <!-- /.row -->

  <br>
<div class="col-md-12 text-center">
    <a class="btn-modern-default pl-4 pr-4" style="display:inline; text-decoration:none;" href="<?php echo base_url('berita'); ?>">Selengkapnya</a><br><br>
</div>
</div>
<!-- /.container -->
