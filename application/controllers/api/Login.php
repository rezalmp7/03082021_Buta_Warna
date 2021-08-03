<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Login extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function index_post()
    {
        //Get Data
        $username = $this->post('username');
        $password = $this->post('password');

        //Query
        $md_pass = md5($password);
        $where = array(
            'username' => $username,
            'password' => $md_pass
        );

        $login = $this->M_admin->select_where('tbl_dokter', $where);

        if ($login->num_rows() > 0) {
            $this->response([
                'status' => true,
                'message' => 'Success',
                'id' => $login->row_array()['id']
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal'
            ], 401);
        }
    }
}
