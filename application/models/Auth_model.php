<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    private $table = "user";
    private $pk = "id_user";

    public function __construct() {
        parent::__construct();
    }

    // ambil data dari database yang usernamenya $username dan passwordnya p$assword
    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        return $this->db->get($this->table);
    }

    // // update data user
    // public function update($data, $id_user)
    // {
    //     $this->db->where($this->pk, $id_user);
    //     $this->db->update($this->table, $data);
    // }

}
