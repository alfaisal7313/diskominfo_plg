<div class="content-wrapper">
    <div class="content row">

          <!-- Main content -->
          <section  class="content">
            <!-- diini lah kita kasih artikel nya -->
            <div class="box box-primary">
              <!-- Content Header (Page header) -->
              <section  class="content-header">
                  <h1> Profile User
                  </h1>
              </section>
              <hr>

            <!----- ------------------------- EDIT DATA MASTER user ------------------------- ----->
            <h3 class="box-title margin text-center profile-data">Edit Profil</h3>
            <center> <div class="batas"> </div></center>
            <br/>
            <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success col-lg-10">
              <a href="#" class="close" data-dismiss="alert">&times;</a> <?= $this->session->flashdata('success') ?>
            </div>
            <?php } ?>

            <?php foreach ($user as $user) {
              ?>
            <form action="<?php echo base_url(). 'admin/dashbord/update_profile'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group profile-data">
                  <label class="col-sm-4 control-label ">ID user </label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="id" value="<?php echo $user->id_user; ?>" readonly>
                    </div>
                </div>

                <div class="form-group profile-data">
                  <label class="col-sm-4 control-label">Nama Lengkap *</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $user->nama_lengkap; ?>" required oninvalid="this.setCustomValidity('Nama jangan kosong')" oninput="setCustomValidity('')">
                    </div>
              </div>

              <?php if ($this->session->userdata("id_kategori_user") == "1") {
                echo '<style media="screen">
                    .profile-data{ display:block;}
                </style>';
              }else {
                echo '<style media="screen">
                    .profile-data{ display:none;}
                </style>';
              } ?>

                <div class="form-group profile-data">
                  <label class="col-sm-4 control-label">Username*</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="username" value="<?php echo $user->username; ?>" required oninvalid="this.setCustomValidity('Username jangan kosong')" oninput="setCustomValidity('')">
                    </div>
              </div>

              <h3 class="box-title text-center" mt-5 mb-5>Ganti password</h3>
              <center> <div class="batas"> </div></center>
              <br/>

              <div class="form-group">
                <label class="col-sm-4 control-label">New Password</label>
                  <div class="col-sm-5">
                    <input type="password" id="password1" class="form-control" autocomplete="off">
                    <a class="text-red">*ubah password secara berkala demi menjaga keamanan</a>
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label">Konfirmasi Password</label>
                  <div class="col-sm-5">
                    <input type="password" id="password2" class="form-control" name="password">
                  </div>
              </div>

              <script type="text/javascript">
                window.onload = function () {
                  document.getElementById("password1").onchange = validatePassword;
                  document.getElementById("password2").onchange = validatePassword;
                }

                function validatePassword(){
                  var pass2=document.getElementById("password2").value;
                  var pass1=document.getElementById("password1").value;
                  if(pass1!=pass2)
                  document.getElementById("password2").setCustomValidity("Passwords Tidak Sama");
                else
                  document.getElementById("password2").setCustomValidity('');}
              </script>

              <div class="form-group">
                <label class="col-sm-4 control-label">  </label>
                <div class="col-sm-5">
                  <button type="submit" name="submit" class="btn btn-info pull-right"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                  <a href="javascript:window.history.go(-1);" class="btn btn-primary pull-left"> Kembali</a>
                </div>
              </div>
              <br>
              <br>
            </form>
          <?php } ?>
            </div>
          </section><!-- /.content -->
        </div>
  </div>
