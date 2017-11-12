<div class="container-fluid" style="margin:100px 0px; 10px">
  <div class="margin-profile">
    <h2>File Document</h2>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4 text-center">
        </div>
    </div>
    <div class="row">
        <table class="col-lg-2 table table-bordered" id="mytable" style="font-size:14px">
            <thead>
                <tr class="text-center">
                    <th class="text-center" width="40px">No</th>
                    <th class="text-center" >Judul</th>
                    <th class="text-center" >Keterangan</th>
                    <th class="text-center" >Tanggal</th>
                    <th class="text-center" >Download</th>
                </tr>
            </thead>
            <?php $no =1; foreach ($document as $d) {
              ?>
            <tbody>
              <td class="text-center"><?php echo $no ?></td>
              <td><a href="<?php echo base_url('./files/pdf/'.$d->file_document) ?>" target="_blank"><?php echo character_limiter($d->judul_document, 30); ?></td></a>
              <td class="text-center"><?php if ($d->keterangan == 0) {echo "-";}else {echo "$d->keterangan";} ?></td>
              <td class="text-center"><?php date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y',strtotime($d->tanggal));?></td>
              <td class="text-center" ><a href="<?php echo base_url('list_file/download_file/'.$d->id_document) ?>" target="_blank">
                    <i class="fa  fa-download">&nbsp;&nbsp; Download File</i>
                  </a>
              </td>
            </tbody>
          <?php $no++; } ?>
        </table>
    </div>
  </div>
</div>

<?php echo $pagination; ?>
