
     <!-- Footer -->
    <div class="py-3 thema-defult mt-5">
      <div class="container-fluid">
        <div class="margin-profile">
          <div class="row">
          <div class="col-lg-3 col-md-6">
            <h5 style="color: #F0FF00">KONTAK</h5>
            <ul class="list-unstyled">
              <li class="text-justify mt-3" >Jl. Nyoman Ratu No.1271, Palembang, Provinsi Sumatera Selatan 30129</td>
              </li>
              <li class="mt-3"><i class="fa fa-phone" aria-hidden="true">&nbsp;</i>&nbsp; (0711) 353262</li>
              <li class="mt-3"><i class="fa fa-university" aria-hidden="true">&nbsp;</i> Senin - Kamis: 7:30 AM to 16:00 PM <br><div class="mar-none" style="margin-left:25px;">
                Jum'at: 7:00 AM to 16:30 PM</div></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 padding-bottom-15">
            <h5 style="color: #F0FF00">PROFILE</h5>
            <ul class="mt-3">
              <a href="<?php echo base_url('/profile/sejarah'); ?>" ><li class="list-bottom">Sejarah</li></a>
              <a href="<?php echo base_url('/profile/visi_misi'); ?>" ><li class="list-bottom">Visi Misi</li></a>
              <a href="<?php echo base_url('/profile/st_organisasi'); ?>" ><li class="list-bottom">Struktur Organisasi</li></a>
              <a href="<?php echo base_url('/profile/tupoksi'); ?>" ><li class="list-bottom">Tupoksi</li></a>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 style="color: #F0FF00" class="mb-3">LAINNYA</h5>
              <a target="_blank" href="http://palembang.go.id/"><li class="list-bottom" >Pemerintah Kota Palembang</li></a>
              <a target="_blank" href="http://jdih.palembang.go.id/" ><li class="list-bottom">JDIH Kota Palembang</li></a>
              <a target="_blank" href="http://bulletinmetropolis.com/home/" ><li class="list-bottom">Bulletin Metropolis</li></a>
              <a target="_blank" href="http://www.umum.palembang.go.id/"><li class="list-bottom" >Bagian Umum Setda Kota Palembang</li></a>
              <a target="_blank" href="http://dpmptsp.palembang.go.id/"><li class="list-bottom" >Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Palembang</li></a>
          </div>
          <div class="col-lg-3 col-md-6 padding-bottom-15">
            <h5 style="color: #F0FF00" class="mb-3">FOLLOW US</h5>
            <ul class="inline-list text-center" >
                <li><a class="fa fa-facebook  text-white mr-3 mb-3" style="display:inline-block; float:left; background-color:gray; padding:15px 19px; border-radius:50%;"  href="https://www.facebook.com/diskominfopalembang/" target="_blank"></a></li>
                <li><a class="fa fa-twitter   text-white mr-3 mb-3" style="display:inline-block; float:left; background-color:gray; padding:15px 16px; border-radius:50%;"  href="https://twitter.com/kominfoplg"  target="_blank"></a></li>
                <li><a class="fa fa-instagram text-white mr-3 mb-3" style="display:inline-block; float:left; background-color:gray; padding:15px 16px; border-radius:50%;"  href="https://www.instagram.com/kominfopalembang/" target="_blank"></a></li>
                <li><a class="fa fa-youtube   text-white mr-3 mb-3"   style="display:inline-block; float:left; background-color:gray; padding:15px 16px; border-radius:50%;"  href="https://www.youtube.com/channel/UC-mGqj0_Q0E42DAJAp4ImBA" target="_blank"></a></li>
            </ul>

          </div>
        </div>
      </div>
    </div>
    </div>
    <footer class="py-4 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Diskominfo Kota Palembang@2017</p>
      </div>
      <!-- /.container -->
    </footer>
    <a href="#" class="scrollup" style="display: none;"><i class="fa fa-angle-up active"></i></a>
  <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/javascripting.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>

    <!-- owl carousel & slide-->
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>

    <!-- Disqus -->
    <script id="dsq-count-scr" src="//http-localhost-diskominfo.disqus.com/count.js" async></script>
    <!-- Magnific Popup core JS file -->
    <script src="<?php echo base_url(); ?>assets/bower_components/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js">
    </script>
    <script type="text/javascript">
    $(window).scroll(function(){
          if ($(this).scrollTop() > 50) {
            $('.scrollup').fadeIn();
            } else {
            $('.scrollup').fadeOut();
          }
        });

        $('.scrollup').click(function(){
          $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        });

    </script>
    <script type="text/javascript">
      $('.with-caption').magnificPopup({
        type: 'image',
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',

        image: {
          verticalFit: true,
          titleSrc: function(item) {

            var caption = item.el.attr('title');

            return caption;
              }
            },

            gallery: {
              enabled: true
            },

            callbacks: {
              open: function() {
                this.wrap.on('click.pinhandler', '.pin-it', function(e) {
          window.open(e.currentTarget.href, "intent", "scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,left=" + (window.screen ? Math.round(screen.width / 2 - 275) : 50) + ",top=" + 100);


            return false;
          });
        },
        beforeClose: function() {
        this.wrap.off('click.pinhandler');
        }
      }
    });

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
  <script>
	  $(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }
	</script>

  </body>

</html>
