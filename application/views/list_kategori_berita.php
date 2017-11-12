<div class="container-fluid" style="margin:100px 0px; 10px">
  <div class="margin-profile">
      <!-- Page Heading/Breadcrumbs -->
      <h1>
        <small>
          KATEGORI
        </small>
      </h1>

      <ol class="breadcrumb mt-4">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url() ?>">Beranda</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('Berita') ?>">Berita</a>
        </li>
        <li class="breadcrumb-item active">Kategori</li>
      </ol>

      <!-- Blog Post -->
      <div class="row">
      <?php $this->load->view('sidebar_list_berita'); ?>
        <div class="col-lg-9">
          <?php if (count($list_kategori) > 0 && $list_kategori!="") {?>
          <div class="row">
            <?php foreach ($list_kategori as $list_kategori) { ?>
            <div class="col-lg-4 col-md-6 col-berita">
              <div class="card mb-3">
                <a href="<?php echo base_url('berita/view/'.$list_kategori->id_berita.'/'.$list_kategori->judul)?>"><p style="position:absolute; padding:10px 15px; right:0px; background: #1474ae; color:white; font-size:12px!important; <?php if ($list_kategori->nama_kategori_berita == "") {
                  echo 'display:none;';} ?>"><?php echo $list_kategori->nama_kategori_berita ?></p>
                  <img class="card-img-top" src="<?php echo base_url('./img/image_berita/'.$list_kategori->img_berita) ?>" alt="<?php echo $list_kategori->judul; ?>"></a>
                <div class="card-body" style="font-size:12px; max-height:265px; height:265px;">
                  <i class="fa fa-clock-o pull-left">
                  &nbsp;&nbsp;<?php $hari = array ( 1 =>    'Senin', 'Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
                  date_default_timezone_set('Asia/Jakarta'); echo $hari [date('N',strtotime($list_kategori->tanggal))].date(', d/m/Y',strtotime($list_kategori->tanggal)); echo '&nbsp;'. date('h:s', strtotime($list_kategori->jam)).' WIB';?></i>
                  <hr class="mt-4">
                  <h5 class="card-title">
                    <a href="<?php echo base_url('berita/view/'.$list_kategori->id_berita.'/'.$list_kategori->judul); ?>" style="font-size:14px;"><?php echo character_limiter($list_kategori->judul, 50); ?></a>
                  </h5>
                  <div class="card-text" style="font-size:14px;"><?php echo character_limiter($list_kategori->isi_berita, 170,'...'); ?></div>
                </div>
                <div class="card-footer">
                  <i class="fa fa-eye pull-left">&nbsp;<span style="font-size:12px;color: #1474ae;">&nbsp; <?php echo $list_kategori->view_berita; ?>&nbsp;View</span>
                  </i>
                  <i class="fa fa-comments pull-right">
                  <a class="ml-2" href="<?php echo base_url('berita/view/'.$list_kategori->id_berita.'/'.$list_kategori->judul) ?>#disqus_thread" style="font-size:12px;"></a></i>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        <?php }else{ ?>
          <div class="alert alert-warning col-md-12">
            <a href="javascript:window.history.go(-1);" class="close">Kembali</a>
            <h5>Data pengumuman tidak ditemukan</h5>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
</div>
