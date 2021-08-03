<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');

        if($this->session->userdata('status_butawarna') != 'login_butawarna')
        {
            redirect(base_url('login/logout'));
        }
    }
	public function index()
	{
        $header['page'] = 'dashboard';

        $data['jumlah_perawat'] = $this->M_admin->select_all('tbl_perawat')->num_rows();
        $data['jumlah_pasien'] = $this->M_admin->select_all('tbl_pasien')->num_rows(); 
        $data['jumlah_dokter'] = $this->M_admin->select_all('tbl_dokter')->num_rows();
        $data['jumlah_test'] = $this->M_admin->select_all('tbl_test')->num_rows();

        $where_mata_normal = array(
            'hasil' => 'Mata Normal'
        );
        $where_parsial = array(
            'hasil' => 'Mata Merah - Hijau (parsial)'
        );
        $where_buta_warna = array(
            'hasil' => 'Mata Buta Warna Total'
        );

        $data['mata_normal'] = $this->M_admin->select_where('tbl_test', $where_mata_normal)->num_rows();
        $data['mata_parsial'] = $this->M_admin->select_where('tbl_test', $where_parsial)->num_rows();
        $data['mata_buta_warna'] = $this->M_admin->select_where('tbl_test', $where_buta_warna)->num_rows();

        $this->load->view('layout/header', $header);
		$this->load->view('dashboard', $data);
        $this->load->view('layout/footer');
	}
}
