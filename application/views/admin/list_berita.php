<div class="content-wrapper">
    <div class="content row">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar List Berita</h3>
            </div>
                <!-- /.box-header -->
            <div class="box-body">
                <a href="<?php echo base_url('admin/berita/form_berita'); ?>"><button type="button" class="btn btn-primary pull-right "><i class="fa fa-newspaper-o">&nbsp;</i> Tambah Berita</button></a>
                <?php if ($this->session->flashdata('message')) { ?>
                <div class="alert alert-success col-lg-10"><a href="#" class="close" data-dismiss="alert">&times;</a> <?= $this->session->flashdata('message') ?> </div>
                <?php } ?>
                <br><br>
                <table id="mytable" class="table table-bordered table-striped" style="width:100%;">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Tanggal</th>
                          <th>kategori</th>
                          <th>Gambar</th>
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
        "url": '<?php echo site_url('admin/berita/json_berita'); ?>',
        "type": "POST"
      },

      columns: [
     {
           "data": "ID",
           "orderable": false
       },
       {"data": "judul"},
       {"data": "tanggal"},
       {"data": "kategori"},
       {"data": "view_image"},
       {"data": "view","class": "text-center"},
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