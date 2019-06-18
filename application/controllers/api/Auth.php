<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Auth extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index_post()
    {
        $kata_sandi = $this->post('kata_sandi');
        $passhash = hash('md5', $kata_sandi);
        $status = 1;

        $data = array(
            'username' => $this->post('username'),
            'email' => $this->post('email'),
            'katasandi' => $passhash,
            'role' => $status,

        );

        $insert = $this->Auth_model->createUser('users', $data);
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

    public function login_post()
    {

        $username = $this->post('username');
        $katasandi = $this->post('katasandi');

        $response = $this->Auth_model->ceklogin($username, $katasandi);

        if ($response->num_rows() > 0) {
            $data = $response->row_array();
            if ($data['role'] == 0) {
                $data_admin = array(
                    'akses' => '0',
                    'ses_id' => $data['userid'],
                    'ses_nama' => $data['username'],
                    'masuk' => true,
                );
                $this->session->set_userdata($data_admin);

                $this->response([
                    'status' => true,
                    'data' => $data_admin,
                ], 200);
            } else {
                $data_user = array(
                    'akses' => '1',
                    'ses_id' => $data['userid'],
                    'ses_nama' => $data['username'],
                    'masuk' => true,
                );
                $this->session->set_userdata($data_user);

                $this->response([
                    'status' => true,
                    'data' => $data_user,
                ], 200);
            }
        } else {
            $this->response([
                'status' => false,
            ], 404);
        }
    }
}