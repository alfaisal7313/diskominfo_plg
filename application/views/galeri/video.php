 <!-- Page Content -->
<div class="container-fluid" style="margin:90px 0px; 10px">
      <div class="margin-profile">
    <!-- Page Heading/Breadcrumbs -->
      <h1 >
        <small>
          Galeri
        </small>
      </h1>

      <ol class="breadcrumb my-4">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Video</li>
      </ol>
      <div class="container-fluid">

        <div class="row mt-5">
          <?php foreach ($link_video as $link_video) { ?>
          <div class="col-md-3 col-sm-6 mb-4">
                <div class="timeline-body">
                  <div class="embed-responsive embed-responsive-16by9 mb-2">
                    <iframe class="popup-youtube" width="560" height="315" src="https://www.youtube.com/embed/<?php echo $link_video->link_video?>"
                      frameborder="0" allowfullscreen></iframe>
                  </div>
                  <a class="popup-youtube" href="http://www.youtube.com/watch?v=<?php echo $link_video->link_video?>">
                  <i class="fa fa-youtube-play"></i> <?php echo character_limiter($link_video->judul,80) ?></a>
                  <?php echo character_limiter($link_video->keterangan,80) ?>
                </div>
          </div>
          <?php } ?>
        </div>

      </div>
    </div>
  </div>
  </div>
    <!-- /.container -->
<?php echo $pagination; ?>

<script>
$(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });
});
</script>
