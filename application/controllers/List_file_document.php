<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class List_file_document extends CI_Controller
{

    public function ajax_tabel()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $this->load->library('datatables_ssp');

            //nama table yang dipakai
            $table = 'document';

            // Table's primary key
            $primaryKey = 'id_document';

            // Array of database columns which should be read and sent back to DataTables.
            // The `db` parameter represents the column name in the database, while the `dt`
            // parameter represents the DataTables column identifier. In this case simple
            // indexes

            $columns = array(
                array('db' => 'judul_document',      'dt' => 'Judul'),
                array('db' => 'keterangan',          'dt' => 'Keterangan'),
                array('db' => 'file_document',       'dt' => 'File'),
                array('db' => 'tanggal',             'dt' => 'Tanggal'),
                array(
                    'db' => 'id_document',
                    'dt' => 'Action',
                    'formatter' => function( $d ) {
                        return '<a href="' . site_url('admin/edit_file_document/' . $d) . '"><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                        </a>&nbsp;
                        <a href="#" data-toggle="modal" data-target="#confirm-delete">
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>

                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title text-left" id="myModalLabel">Confirm Delete</h4>
                                  </div>
                                  <div class="modal-body text-left">
                                      <p>Apakah anda yakin ingin menghapus data tersebut?</p>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                      <a href="' . site_url('admin/hapus_document/' . $d) . '" class="btn btn-danger btn-ok">Delete</a>
                                  </div>
                              </div>
                          </div>
                        </div>';
                    }
                ),
            );

            // SQL server connection information
            $sql_details = array(
                'user' => 'root',
                'pass' => 'root',
                'db'   => 'diskominfo',
                'host' => 'localhost'
            );

            echo json_encode(
                    Datatables_ssp::simple($_GET, $sql_details, $table, $primaryKey, $columns)
            );
        }
    }

}

/* End of file List_file_document.php */
/* Location: ./application/controllers/List_file_document.php */
