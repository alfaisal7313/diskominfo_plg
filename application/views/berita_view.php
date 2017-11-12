<!-- Page Content -->
<div class="container-fluid" style="margin:100px 0px; 10px">
  <div class="margin-profile">
    <!-- Page Heading/Breadcrumbs -->


    <ol class="breadcrumb my-5">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url(); ?>">Beranda</a>
      </li>
      <li class="breadcrumb-item active">
      <a href="<?php echo base_url('berita'); ?>">Berita</a>
      </li>
      <li class="breadcrumb-item active"><?php echo character_limiter($berita->judul, 60); ?></li>
    </ol>

      <div class="row">
        <!-- Sidebar Widgets Column -->
        <?php $this->load->view('sidebar_list_berita'); ?>
        <!-- Post Content Column -->
        <div class="col-lg-6">
          <h4 class="mb-3">
              <?php echo $berita->judul;?>
          </h4>
          <!-- Preview Image -->
          <img class="img-fluid rounded card-image" style="width: 100%; max-height:400px;" src="<?php echo base_url('./img/image_berita/'.$berita->img_berita) ?>" alt="">

          <hr>

          <!-- Date/Time -->
          <p style="font-size:14px !important;">Posted on <b><?php $bulan = array ( 1 =>'Januari', 'Februaru','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
          echo date("d F Y",strtotime($berita->tanggal))?></b> at <b><?php echo date("H:i A",strtotime($berita->jam))?></b></p>

          <hr>

          <div class="card-text mb-5"><?php echo $berita->isi_berita?>
          </div>
          <!-- Post Content -->
        <br>
        <div id="disqus_thread"></div>
        </div>
        <!-- Sidebar Widgets Column -->
        <?php $this->load->view('sidebar_profile_right'); ?>
      </div>
      <!-- /.row -->
    </div>
</div>
  <!-- /.container -->


<script>


(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://http-localhost-diskominfo.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>

<!-- Disqus -->
