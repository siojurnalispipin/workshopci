<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function createUser($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function ceklogin($nama_pengguna, $kata_sandi)
    {
        $query = $this->db->query("SELECT * FROM users WHERE username='$nama_pengguna' AND katasandi=MD5('$kata_sandi') LIMIT 1");
        return $query;
    }
}

/* End of file Auth_model_model.php */
/* Location: ./application/models/Auth_model_model.php */