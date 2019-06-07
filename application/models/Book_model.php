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

    public function updateBook($data)
    {
        $query = $this->db->update('book', $data);
        return $query;
    }

    public function deleteBook($id)
    {
        $query = $this->db->query('DELETE FROM books WHERE id=$id');
        return $query;
    }

}