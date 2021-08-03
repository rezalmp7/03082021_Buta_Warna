<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Pasien extends RestController
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
        $id = $this->get('kode');
        $id = ltrim($id, '0');

        //Query
        $pasien = $this->M_admin->select_where('tbl_pasien', array('id' => $id));

        //Response
        if ($pasien->num_rows() > 0) {
            $this->response([
                'status' => true,
                'pasien' => [
                    'id' => $pasien->row_array()['id'],
                    'nama' => $pasien->row_array()['nama'],
                ]
            ], 200);
        } else {
            $this->response(
                ['status' => false],
                404
            );
        }
    }
}
