<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Book extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model');
    }

    public function index_get()
    {
        $books = $this->Book_model->book();
        $this->response([
            'status' => true,
            'data' => $books,
        ], 202);
    }

    public function index_post()
    {
        $data = array(
            'id' => $this->post('id'),
            'judul' => $this->post('judul'),
            'deskripsi' => $this->post('deskripsi'),
            'penulis' => $this->post('penulis'),
            'rating' => $this->post('rating'),
        );

        $insert = $this->Book_model->insertBook('book', $data);
        if ($insert) {
            $this->response([
                'status' => true,
                'data' => $data,
            ], 202);
        } else {
            $this->response([
                'status' => false,
            ], 502);
        }
    }

    public function index_put($id)
    {
        $data = array(
            'judul' => $this->put('judul'),
            'deskripsi' => $this->put('deskripsi'),
            'penulis' => $this->put('penulis'),
            'rating' => $this->put('rating'),
        );

        $put = $this->Book_model->updateBook($data, $id);
        if ($put) {
            $this->response([
                'status' => true,
                'data' => $data,
            ], 202);
        } else {
            $this->response([
                'status' => false,
            ], 502);
        }
    }

    public function index_delete($id)
    {
        $response = $this->Book_model->deleteBook($id);
        if ($response) {
            $this->response([
                'status' => true,
                'data' => $id,
            ], 202);
        } else {
            $this->response([
                'status' => false,
            ], 502);
        }
    }
}