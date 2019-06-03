<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class BookController extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function books_get()
    {
        $books = [
            ['idbuku' => 1, 'judul_buku' => 'Buku bahasa Pemrograman Web', 'deskripsi' => 'Membahas tentang pemrograman web dari dasar hingga deploy ke server', 'pengarang' => 'Jhon Sandoro', 'rating' => 5],

            ['idbuku' => 2, 'judul_buku' => 'Pemrograman Web Lanjutan', 'deskripsi' => 'Lanjutan dari pemograman web dasar dengan pengenalan basis crud', 'pengarang' => 'Ani wibowo', 'rating' => 4],

            ['idbuku' => 3, 'judul_buku' => 'Algoritma Dasar', 'deskripsi' => 'Belajar algoritma dengan bahasa phyton', 'pengarang' => 'Sandro', 'rating' => 5],
        ];

        $this->response([
            'status' => true,
            'data' => $books,
        ], 202);
    }

    public function booksmodel_get()
    {

    }

}