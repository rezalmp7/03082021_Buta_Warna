<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Dokter extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function index_get()
    {
        //Get Data
        $id = $this->get('id');

        //Query
        $dokter = $this->M_admin->select_where('tbl_dokter', array('id' => $id));

        //Response
        $this->response([
            'nama' => $dokter->row_array()['nama']
        ], 200);
    }
}
