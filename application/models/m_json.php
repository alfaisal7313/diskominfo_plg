<?php

class M_json extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    //json berita
    function json_berita() {
        $this->datatables->select('berita.id_berita as ID,berita.judul as judul, berita.tanggal as tanggal,berita.img_berita as gambar, kategori_berita.nama_kategori_berita as kategori');
        $this->datatables->from('berita');
        $this->db->join('kategori_berita', 'berita.id_kategori_berita = kategori_berita.id_kategori_berita', 'left');
      	$this->datatables->add_column('view_image','<img src="'.site_url('img/image_berita/$1').'" width=150 height="100">','gambar');
        $this->datatables->add_column('view', '<a href="edit_berita/$1"><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>
                                              <a href="hapus_berita/$1"onclick="javascript:return confirm(\'Apakah anda yakin ingin menghapus data tersebut?\');"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>', 'ID');
        return $this->datatables->generate();
    }

    //json user
    function json_user() {
        $this->datatables->select('user.id_user as ID,user.nama_lengkap as nama, user.username as username, user_kategori.kategori_user as kategori_user');
        $this->datatables->where('user.id_kategori_user != 1 ');
        $this->datatables->from('user');
        $this->db->join('user_kategori', 'user.id_user = user_kategori.id_kategori_user', 'left');
        $this->datatables->add_column('view', '<a href="edit_user/$1"><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>
                                              <a href="hapus_user/$1"onclick="javascript:return confirm(\'Apakah anda yakin ingin menghapus data tersebut?\');"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>', 'ID');
        return $this->datatables->generate();
    }

    //json slideshow
    function json_slide() {
        $this->datatables->select('slideshow.id_slide as ID, slideshow.judul as judul, slideshow.tanggal as tanggal, slideshow.keterangan as keterangan, slideshow.gambar as gambar');
        $this->datatables->from('slideshow');
      	$this->datatables->add_column('view_image','<img src="'.site_url('img/image_slide/$1').'" width=150 height="100">','gambar');
        $this->datatables->add_column('view', '<a href="edit_slide/$1"><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>
                                              <a href="hapus_slide/$1"onclick="javascript:return confirm(\'Apakah anda yakin ingin menghapus data tersebut?\');"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>', 'ID');
        return $this->datatables->generate();
    }

    //json foto
    function json_foto() {
        $this->datatables->select('foto.id_foto as ID, foto.judul as judul, foto.keterangan as keterangan, foto.tanggal as tanggal, foto.foto as foto');
        $this->datatables->from('foto');
        $this->datatables->add_column('foto', '<img src="'. site_url('img/image_galeri/$1').'" width=150>','foto');
        $this->datatables->add_column('view', '<a href="edit_foto/$1"><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>
                                              <a href="hapus_foto/$1"onclick="javascript:return confirm(\'Apakah anda yakin ingin menghapus data tersebut?\');"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>', 'ID');
        return $this->datatables->generate();
    }

    //json video
    function json_video() {
        $this->datatables->select('video.id_video as ID, video.judul as judul, video.keterangan as keterangan, video.tanggal as tanggal, video.link_video as video');
        $this->datatables->from('video');
      	$this->datatables->add_column('video','<iframe class="popup-youtube" width="160" height="85" src="https://www.youtube.com/embed/$1" frameborder="0" allowfullscreen>','video');
        $this->datatables->add_column('view', '<a href="edit_video/$1"><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>
                                              <a href="hapus_video/$1"onclick="javascript:return confirm(\'Apakah anda yakin ingin menghapus data tersebut?\');"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>', 'ID');
        return $this->datatables->generate();
    }

    //json file document
    function json_file_document() {
        $this->datatables->select('document.id_document as ID, document.judul_document as judul, document.keterangan as keterangan, document.file_document as file, document.tanggal as tanggal');
        $this->datatables->from('document');
        $this->datatables->add_column('file_document', '<a href="' . site_url('files/pdf/$1'). '" target="_blank">
  						<i class="fa  fa-download">&nbsp;&nbsp; Download File</i></a>','file');
        $this->datatables->add_column('view', '<a href="edit_file_document/$1"><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>
                                              <a href="hapus_file_document/$1"onclick="javascript:return confirm(\'Apakah anda yakin ingin menghapus data tersebut?\');"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>', 'ID');
        return $this->datatables->generate();
    }
}

?>
