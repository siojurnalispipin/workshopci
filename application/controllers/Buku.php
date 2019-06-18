<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['view'] = 'dashboard/pages/buku';
        $this->load->view('dashboard/template_dashboard', $data);
    }

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */