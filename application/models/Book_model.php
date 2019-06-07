<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function book()
    {
        $query = $this->db->query('SELECT * FROM book');
        return $query->result();
    }

    public function insertBook($tabel, $data)
    {
        $query = $this->db->insert($tabel, $data);
        return $query;
    }

}