<div class="content-wrapper">
    <div class="content row">

          <!-- Main content -->
          <section  class="content">
            <!-- diini lah kita kasih artikel nya -->
            <div class="box box-primary ">
              <!-- Content Header (Page header) -->
              <section  class="content-header">
                  <h1> Tambah User
                  </h1>
              </section>
              <hr>

            <!----- ------------------------- EDIT DATA MASTER user ------------------------- ----->
            <h3 class="box-title margin text-center">Profile User</h3>
            <center> <div class="batas"> </div></center>
            <br/>
            <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-success col-lg-10">
              <a href="#" class="close" data-dismiss="alert">&times;</a> <?= $this->session->flashdata('success') ?>
            </div>
            <?php } ?>

            <form action="<?php echo base_url(). 'admin/user/tambah_user'; ?>" class="form-horizontal" method="post" enctype="multipart/form-data" style="margin:25px;" autocomplete="off">

                <div class="form-group">
                  <label class="col-sm-4 control-label">Nama Lengkap*</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" required="required" name="nama_lengkap" placeholder="Nama Lengkap" required oninvalid="this.setCustomValidity('Masukkan nama user')" oninput="setCustomValidity('')">
                    </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label">Username*</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" required="required" name="username" placeholder="Username" required oninvalid="this.setCustomValidity('Masukkan username')" oninput="setCustomValidity('')">
                  </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4  control-label">Kategori User</label>
              <div class="col-sm-5">
                <input type="text" id="input_kategor" class="form-control" name="level_user" placeholder="Tambah kategori user" disabled />
                <span style="padding: 7px 12px;font-size: 14px;line-height: 1.3;color: #555;position: absolute;top: .3px;right: 15px;">
                  <input type="checkbox" id="check_kategori" />
                </span>
              </div>
            </div>

            <div class="form-group">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-5">
                  <?php
                  $dd_kategori_attribute = 'class="form-control select2" name="id_kategori_user" ';
                  echo form_dropdown('id_kategori_user', $dd_kategori, $kategori_selected, $dd_kategori_attribute);
                  ?>
                </div>
            </div>

              <div class="form-group">
                <label class="col-sm-4 control-label">Password*</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="password" placeholder="password" required oninvalid="this.setCustomValidity('Masukkan password user')" oninput="setCustomValidity('')">
                  </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-4 control-label">  </label>
                <div class="col-sm-5">
                  <a href="<?php echo base_url('admin/user/list_user') ?>" class="btn btn-primary pull-left"> List User</a>
                  <button type="submit" name="submit" class="btn btn-info pull-right"> Simpan</button>
                </div>
              </div>
              <br>
              <br>
            </form>
            </div>
          </section><!-- /.content -->
        </div>
  </div>
  <script type="text/javascript">
    document.getElementById('check_kategori').onchange = function() {
    document.getElementById('input_kategor').disabled = !this.checked;};
  </script>
