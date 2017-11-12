<?php

class M_data extends CI_Model{

	// get data dropdown
  function dd_akses_data(){
      // ambil data dari db
      $this->db->order_by('id_kategori_user', 'asc');
      $result = $this->db->get('user_kategori');

      // bikin array
      // please select berikut ini merupakan tambahan saja agar saat pertama
      // diload akan ditampilkan text please select.
      $dd[''] = 'Please Select';
      if ($result->num_rows() > 0) {
          foreach ($result->result() as $row) {
          // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
              $dd[$row->id_kategori_user] = $row->kategori_user ;
          }
      }
      return $dd;
  }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){
	return $this->db->get_where($table,$where);
	}

	function update_no_file($where,$data,$table){
		$this->db->where($where);
		$query = $this->db->get($table);
		$this->db->update($table,$data,$where);
	}

	function tampil_data($table){
		return $this->db->get($table);
	}

	//db Kategori
	public function kategori($id)
	{
		$this->db->select('berita.`id_berita`,berita.`judul`,berita.`isi_berita`,berita.`isi_berita`,berita.`img_berita`,berita.`view_berita`, berita.`tanggal`,berita.`jam`,kategori_berita.nama_kategori_berita');
		$this->db->from('berita');
		$this->db->join('kategori_berita', 'berita.id_kategori_berita = kategori_berita.id_kategori_berita', 'left');
		$this->db->where('kategori_berita.id_kategori_berita',$id);
		$query = $this->db->get();
		return $query->result();
	}

	//search
	function search($keyword)
    {
        $this->db->like('judul',$keyword);
        $this->db->from('berita');
        $this->db->join('kategori_berita', 'berita.id_kategori_berita = kategori_berita.id_kategori_berita', 'left');
        $query = $this->db->get();
		return $query->result();
    }

	/*Koleksi User*/

	public function read_user($id_user)
	{
		$query = $this->db->get_where('user', array('id_user' => $id_user));
		return $query->row();
	}

	function hapus_user($id, $table){
		 $this->db->where($id);
		 $query = $this->db->get($table);
		 $this->db->delete($table, $id);
	}

	/*Koleksi Slideshow*/

		//edit slide
	function update_slide($where,$data,$table){
		$this->db->where($where);
		$query = $this->db->get($table);
		$row = $query->row();
		unlink("./img/image_slide/$row->gambar");
		$this->db->update($table,$data,$where);
	}

	//fungsi delete ke database
	function hapus_slide($id,$table){
		$this->db->where($id);
		$query = $this->db->get($table);
		$row = $query->row();

		unlink("./img/image_slide/$row->gambar");
		$this->db->delete($table, $id);
	}

	public function list_slide()
	{
		$this->db->from('slideshow');
		$query = $this->db->get();
		return $query->result();
	}


	/*Koleksi Berita*/

	//berita beranda
	public function berita_terbaru()
	{
		$this->db->select('berita.`id_berita`,berita.`judul`,berita.`isi_berita`,berita.`isi_berita`,berita.`img_berita`,berita.`view_berita`,berita.`tanggal`,berita.`jam`,kategori_berita.nama_kategori_berita');
		$this->db->from('berita');
		$this->db->join('kategori_berita', 'berita.id_kategori_berita = kategori_berita.id_kategori_berita', 'left');
		$this->db->order_by('id_berita','desc');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}

		function update_counter($id_berita) {
		// return current article views
	    $this->db->where('id_berita', urldecode($id_berita));
	    $this->db->select('view_berita');
	    $count = $this->db->get('berita')->row();
		// then increase by one
	    $this->db->where('id_berita', urldecode($id_berita));
	    $this->db->set('view_berita', ($count->view_berita + 1));
	    $this->db->update('berita');
		}

	  public function read($id_berita)
    {
			$this->db->from('berita');
    	$this->db->where('id_berita', $id_berita);
			$query = $this->db->get();
    	return $query->row();
    }

    //hitung jumlah total data
    function total_record_berita() {
        $this->db->from('berita');
        return $this->db->count_all_results();
    }

	//tampilkan dengan limit
    function berita_limit($limit, $start = 0) {
				$this->db->select('berita.`id_berita`,berita.`judul`,berita.`isi_berita`,berita.`isi_berita`,berita.`img_berita`,berita.`view_berita`, berita.`tanggal`,berita.`jam`,kategori_berita.nama_kategori_berita');
				$this->db->from('berita');
				$this->db->join('kategori_berita', 'berita.id_kategori_berita = kategori_berita.id_kategori_berita', 'left');
        $this->db->order_by('id_berita','desc');
        $this->db->limit($limit, $start);
				$query = $this->db->get();
				return $query->result();
    }

    //edit berita
	function update_berita($where,$data,$table){
		$this->db->where($where);
		$query = $this->db->get($table);
		$row = $query->row();
		unlink("./img/image_berita/$row->img_berita");
		$this->db->update($table,$data,$where);
	}

     //fungsi delete ke database
  function hapus_berita($id,$table){
		$this->db->where($id);
		$query = $this->db->get($table);
		$row = $query->row();

		unlink("./img/image_berita/$row->img_berita");
		$this->db->delete($table, $id);
	}

	//membaca data
	public function read_list_berita()
	{
		$this->db->from('berita');
		$this->db->limit(6);
		$this->db->order_by('id_berita','asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function list_berita()
	{
		$this->db->from('berita');
		$query = $this->db->get();
		return $query->result();
	}

    /*Koleksi Galeri Foto*/

	//galeri foto
	public function foto_galeri()
	{
		$this->db->from('foto');
		$this->db->order_by('id_foto','desc');
		$query = $this->db->get();
		return $query->result();
	}

	//pagination
	function jumlah_data(){
		return $this->db->get('foto')->num_rows();
	}

	//hitung jumlah total data
    function total_record_foto() {
        $this->db->from('foto');
        return $this->db->count_all_results();
    }

	//tampilkan dengan limit
    function foto_limit($limit, $start = 0) {
        $this->db->order_by('id_foto','desc');
        $this->db->limit($limit, $start);
        return $this->db->get('foto');
    }

	//edit file
	function update_foto($where,$data,$table){
		$this->db->where($where);
		$query = $this->db->get($table);
		$row = $query->row();
		unlink("./img/image_galeri/$row->foto");
		$this->db->update($table,$data,$where);
	}

    //hapus foto
    function hapus_foto($id, $table){
     $this->db->where($id);
     $query = $this->db->get($table);
     $row = $query->row();

     unlink("./img/image_galeri/$row->foto");
     $this->db->delete($table, $id);

	}

	/*Galeri Video*/

	//hitung jumlah total data video
    function total_record_video() {
        $this->db->from('video');
        return $this->db->count_all_results();
    }

    //tampilkan dengan limit
    function video_limit($limit, $start = 0) {
        $this->db->order_by('id_video','desc');
        $this->db->limit($limit, $start);
        return $this->db->get('video');
    }

    //edit video
	function update_file_video($where,$data,$table){
		$this->db->where($where);
		$this->db->get($table);
		$this->db->update($table,$data,$where);
	}

	function hapus_video($id, $table){
     $this->db->where($id);
     $query = $this->db->get($table);
     $this->db->delete($table, $id);

	}

	/*File Document*/
	//membaca data
	public function read_file()
	{
		$this->db->from('document');
		$this->db->limit(6);
		$this->db->order_by('id_document','desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function download_document($id)
	{
		$this->db->from('document');
		$this->db->where('id_document', $id);
		$query = $this->db->get();
		return $query->row();
	}

	function hapus_file($id, $table){
     $this->db->where($id);
     $query = $this->db->get($table);
     $row = $query->row();
     unlink("./files/pdf/$row->file_document");
     $this->db->delete($table, $id);
	}

	//edit file
	function update_document($where,$data,$table){
		$this->db->where($where);
		$query = $this->db->get($table);
		$row = $query->row();
		unlink("./files/pdf/$row->file_document");
		$this->db->update($table,$data,$where);
	}


	//hitung jumlah total file
    function total_record_document() {
        $this->db->from('document');
        return $this->db->count_all_results();
    }

	//tampilkan dengan limit
    function document_limit($limit, $start = 0) {
        $this->db->order_by('id_document','desc');
        $this->db->limit($limit, $start);
        return $this->db->get('document');
    }

}
