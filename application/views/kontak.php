
<!-- Page Content -->
<div class="container-fluid" style="margin-top:90px">
  <div class="margin-profile">
      <!-- Page Heading/Breadcrumbs -->
      <h1>
        <small>
          Kontak Kami
        </small>
      </h1>

      <ol class="breadcrumb mt-4">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Kontak</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-12">
          <div id="map" style="background: url("../img/bg-map.png") center 30% no-repeat!important;">
          </div>
        </div>

      </div>
      <!-- /.row -->

      <!-- send message -->
      <div class="row">
        <div class="col-lg-12">
          <div class="col-lg-7 col-md-7 col-sm-12 pull-left  mt-5">
            <?php echo form_open_multipart('kontak/sendMail'); ?>
            <h3>Silahkan Kirim Pesan</h3>
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group form-group">
                <div class="controls mt-4">
                  <label>Nama Lengkap:</label>
                  <input type="text" name="name_user" class="form-control" required oninvalid="this.setCustomValidity('Silahkan isi nama anda')" oninput="setCustomValidity('')">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Alamat Email:</label>
                  <input type="email" name="email" class="form-control" required oninvalid="this.setCustomValidity('Silahkan isi email anda')" oninput="setCustomValidity('')">
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Prihal:</label>
                  <input type="text" name="prihal" class="form-control">
                </div>
              </div>

              <div class="control-group form-group">
                <div class="controls">
                  <label>Pesan:</label>
                  <textarea name="pesan" rows="10" cols="100" class="form-control" required oninvalid="this.setCustomValidity('Silahkan isi pesan anda')" oninput="setCustomValidity('')" oninvalid=" maxlength="999""></textarea>
                </div>
              </div>
              <div id="success"></div>
              <!-- For success/fail messages -->
              <button type="submit" id="submit" value="Kirim" class="btn btn-primary">Kirim Pesan</button>
            </form>
            <div id="alert-msg"></div>
            <?php echo form_close();?>
          </div>


         <!-- Contact Details Column -->
        <div class="col-lg-5 col-md-5 col-sm-12 mb-4  mt-5 pull-right">
         <h3 class="mb-4">Informasi</h3>
         <p>
           Jl. Nyoman Ratu No.1271, Palembang, Provinsi Sumatera Selatan 30129
         </p>
         <p>
           <i class="fa fa-phone mt-3" aria-hidden="true"></i>&nbsp; (0711) 353262
         </p>
         <p>
           <i class="fa fa-envelope mt-3" aria-hidden="true"></i>&nbsp;
           <a target="_blank" href="mailto:kominfo@palembang.go.id">kominfo@palembang.go.id
           </a>
         </p>
         <p>
           <i class="fa fa-university mt-3" aria-hidden="true"></i>&nbsp;Senin - Kamis: 7:30 AM to 16:00 PM <br><p style="margin-left:23px;">
             Jum'at: 7:00 AM to 16:30 PM</p>
         </p>

         <h3 class="mt-5 mb-4">Sosial Media</h3>
         <p>
           <i class="fa fa-facebook-official fa-lg mt-3" aria-hidden="true"></i>&nbsp; <a target="_blank" href="https://www.facebook.com/diskominfopalembang/">Facebook</a>
         </p>
         <p>
           <i class="fa fa-twitter-square fa-lg mt-3" aria-hidden="true"></i></i>&nbsp;
           <a target="_blank" href="https://twitter.com/kominfoplg">Twitter
           </a>
         </p>
         <p>
           <i class="fa fa-instagram  fa-lg mt-3" aria-hidden="true"></i></i>&nbsp;
           <a target="_blank" href="https://www.instagram.com/kominfopalembang/">Instagram</a>
         </p>
         <p>
           <i class="fa fa-youtube  fa-lg mt-3" aria-hidden="true"></i></i>&nbsp;
           <a target="_blank" href="https://www.youtube.com/channel/UC-mGqj0_Q0E42DAJAp4ImBA">Youtube</a>
         </p>

       </div>
        </div>
        <!-- /.row -->

      </div>
    </div>
</div>
<!-- /.container -->

<!-- MAP -->
<script>
  function initMap() {
    var uluru = {lat: -2.978065, lng: 104.748312};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 19,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC52449sTvAvxMBQOKc-ytyzS1jyYztWCE&callback=initMap">
</script>
