  <div class="content-wrapper">
    <div class="content row">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar List Slideshow</h3>
            </div>
                <!-- /.box-header -->
            <div class="box-body">
                <a href="<?php echo base_url('admin/slide/upload_slide'); ?>"><button type="button" class="btn btn-primary pull-right "><i class="fa fa-file-image-o">&nbsp;</i> Tambah Slideshow</button></a>
                <?php if ($this->session->flashdata('message')) { ?>
                <div class="alert alert-success col-lg-10"><a href="#" class="close" data-dismiss="alert">&times;</a> <?= $this->session->flashdata('message') ?> </div>
                <?php } ?>
                <br><br>
                <table id="mytable" class="table table-bordered table-striped" style="width:100%;">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>Judul Slide</th>
                          <th>Keterangan</th>
                          <th>Tanggal</th>
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
   var save_method; //for save method string
   var table;

   $(document).ready(function() {
       //datatables
       table = $('#mytable').DataTable({
           "processing": true, //Feature control the processing indicator.
           "serverSide": true, //Feature control DataTables' server-side processing mode.
           "order": [[ 0, 'desc' ]], //Initial no order.
           // Load data for the table's content from an Ajax source
           "ajax": {
               "url": '<?php echo site_url('admin/slide/json_slide'); ?>',
               "type": "POST"
           },
           //Set column definition initialisation properties.
           "columns": [
             {
                 "data": "ID",
                 "orderable": false
             },
             {"data": "judul"},
             {"data": "tanggal"},
             {"data": "keterangan"},
             {"data": "view_image"},
             {"data": "view","class": "text-center"},
           ],
       });

      table.on( 'order.dt search.dt', function () {
          table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = i+1;
          } );
      } ).draw();
   });
</script>
