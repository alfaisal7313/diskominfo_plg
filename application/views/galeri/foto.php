
<!-- Page Content -->
<div class="container-fluid" style="margin:90px 0px; 10px">
  <div class="margin-profile">

    <!-- Page Heading/Breadcrumbs -->
    <h1>
      <small>
        Galeri
      </small>
    </h1>

    <ol class="breadcrumb my-4">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url(); ?>">Beranda</a>
      </li>
      <li class="breadcrumb-item active">Foto</li>
    </ol>

    <div class="row">
          <?php foreach ($foto as $f) {
           ?>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100 card-border">
              <a class="with-caption image-link" href="<?php echo base_url('./img/image_galeri/'.$f->foto) ?>" title="<?php echo $f->keterangan;
              if ($f->keterangan == null) {
                echo $f->judul;
              }?>">
              <img class="card-foto" src="<?php echo base_url('./img/image_galeri/'.$f->foto) ?>" alt="<?php echo $f->judul ?>">
            </a>
            <p style="padding:5px 5px 0px;"><?php echo $f->judul;?></p>
          </div>
        </div>
         <?php } ?>
    </div>
  </div>
</div>
<!-- /.container -->
<?php echo $pagination; ?>
