<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Test extends RestController
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
        $test = $this->post('test');
        $test = json_decode($test, true);

        $test['tgl_test'] = date('Y-m-d H:i:s');

        //Query
        $this->M_admin->insert_data('tbl_test', $test);

        //Response
        if ($this->db->affected_rows() > 0) {
            $this->response([
                'status' => true
            ], 200);
        } else {
            $this->response(
                ['status' => false],
                200
            );
        }
    }
}
