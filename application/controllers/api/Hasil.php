<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Hasil extends RestController
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
        $where = array(
            'id_pasien' => $id
        );

        $this->db->select('nm_test');
        $this->db->from('tbl_test');
        $this->db->where($where);
        $this->db->group_by('nm_test');

        $query = $this->db->get();

        $hasil = array();
        $index = 0;
        foreach ($query->result_array() as $row) {

            //Select Hasil Test
            $hasil_test = $this->M_admin->select_select_where(
                'hasil',
                'tbl_test',
                array(
                    'id_pasien' => $id,
                    'nm_test' => $row['nm_test']
                )
            );

            array_push($hasil, [
                'nama' => $row['nm_test'],
                'hasil' => []
            ]);

            foreach ($hasil_test->result_array() as $rows) {
                array_push(
                    $hasil[$index]['hasil'],
                    $rows['hasil']
                );
            }
            $index++;
        }

        //Response
        $this->response([
            'hasil' => $hasil
        ], 200);
    }
}
