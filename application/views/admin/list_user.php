<div class="content-wrapper">
  <div class="content row">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Daftar List User</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <a href="<?php echo base_url('admin/user/add_user'); ?>"><button type="button" class="btn btn-primary pull-right "><i class="fa fa-user-plus"></i> Tambah User</button></a>
        <?php if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-success col-lg-10"><a href="#" class="close" data-dismiss="alert">&times;</a> <?= $this->session->flashdata('message') ?> </div>
        <?php } ?>
        <br><br>
        <table id="mytable" class="table table-bordered table-striped" style="width:100%;">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Username</th>
              <th>Kategori User</th>
              <th>Action</th>
            </tr>
            <tbody>
            </tbody>
          </thead>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">

  $(document).ready(function() {
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
    {
      return {
        "iStart": oSettings._iDisplayStart,
        "iEnd": oSettings.fnDisplayEnd(),
        "iLength": oSettings._iDisplayLength,
        "iTotal": oSettings.fnRecordsTotal(),
        "iFilteredTotal": oSettings.fnRecordsDisplay(),
        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
      };
    };

    var t = $("#mytable").dataTable({

      oLanguage: {
        sProcessing: "loading..."
      },
      processing: true,
      serverSide: true,
      ajax: {
        "url": '<?php echo site_url('admin/user/json'); ?>',
        "type": "POST"
      },

      columns: [
      {
        "data": "ID",
        "orderable": false
      },
      {"data": "nama"},
      {"data": "username"},
      {"data": "kategori_user"},
      {"data": "view","class": "text-center"}
      ],
      order: [[0, 'desc']],
      rowCallback: function(row, data, iDisplayIndex) {
        var info = this.fnPagingInfo();
        var page = info.iPage;
        var length = info.iLength;
        var index = page * length + (iDisplayIndex + 1);
        $('td:eq(0)', row).html(index);
      }
    });
  });
  $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  });
</script>
