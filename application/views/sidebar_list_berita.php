<div class="col-md-3 view-side" style="display:none;"

  <!-- Categories Widget -->
   <div class="list-group mb-3">
    <div class="shadow"><h6 class="card-header shadow thema-defult">Kategori</h6></div>
      <a href="<?php echo base_url('berita') ?>" class="list-group-item"><i class="fa  fa-angle-double-right">&nbsp; Semua</i></a>
      <a href="<?php echo base_url('kategori/umum') ?>" class="list-group-item"><i class="fa  fa-angle-double-right">&nbsp; Berita Umum</i></a>
      <a href="<?php echo base_url('kategori/infomfasi_publik') ?>" class="list-group-item"><i class="fa  fa-angle-double-right">&nbsp; Berita Informasi Publik</i></a>
      <a href="<?php echo base_url('kategori/pengumuman') ?>" class="list-group-item"><i class="fa  fa-angle-double-right">&nbsp; Pengumuman</i></a>
  </div>

  <!-- Categories Widget -->
   <div class="list-group mb-3">
    <div class="shadow"><h6 class="card-header shadow thema-defult">Berita Lainnya</h6></div>
    <?php foreach ($list_berita as $list_berita) {
    ?>
      <a href="<?php echo base_url('berita/view/'.$list_berita->id_berita.'/'.$list_berita->judul) ?>"  class="list-group-item" style="padding: .75rem !important">
        <img class="pull-left col-sm-3 p-0" src="<?php echo base_url('./img/image_berita/'.$list_berita->img_berita) ?>" alt="" style="width:80px; max-height:50px; height:50px;">
        <div class="pull-right col-sm-9 p-0 pl-2">
          <p style="font-size:10px!important; margin:0px; padding:0px; display:iinline-block" ><?php echo character_limiter($list_berita->judul,60); ?></p>
          <p style="font-size:10px!important; margin:2px 0px 0px; padding:0px; display:iinline-block" ><i class="fa fa-clock-o"> <?php $hari = array ( 1 =>    'Sen', 'Sel','Rab','Kam','Jum','Sab','Min');
          date_default_timezone_set('Asia/Jakarta');  echo $hari [date('N',strtotime($list_berita->tanggal ))].date(' d/m/Y',strtotime($list_berita->tanggal ));?></i></p>
        </div>
    </a>
    <?php } ?>
    <a class="list-group-item text-center" href="<?php echo base_url('berita') ?>"> Lainnya <i class="fa fa-arrow-right"></i></a>
  </div>
  <div class="list-group  my-3 ">
    <div class="shadow "><h6 class="card-header shadow thema-defult">Kalender</h6></div>
      <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=palembang.diskominfo%40gmail.com&amp;color=%23182C57&amp;src=id.indonesian%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FJakarta" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
  </div>
</div>
