<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['view'] = 'auth/pages/login';
        $this->load->view('auth/template_auth', $data);
    }
    public function daftar()
    {
        $data['view'] = 'auth/pages/register';
        $this->load->view('auth/template_auth', $data);
    }

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */