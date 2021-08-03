<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

        // if($this->session->userdata('status_butawarna') != 'login_butwarna' || $this->session->userdata('level_butawarna') != 'admin')
        // {
        //     redirect(base_url('login'));
        // }
    }
	public function index()
	{
        $get = $this->input->get();

        $data['null'] = null;
        if(isset($_GET['msg']))
        {
            $data['msg'] = $get['msg'];
        }

		$this->load->view('login', $data);
	}
    function aksi_login()
    {
        $username = $this->input->post("username");
		$pass = $this->input->post("password");
		if($username=="" || $pass=="")
		{
			redirect(base_url("login?msg=username dan Password Harap Diisi"));
		}
		else
		{
			$md_pass = md5($pass);

			$where = array(
				'username' => $username,
				'password' => $md_pass
			);
			
			$cek_login_admin = $this->M_admin->select_where('tbl_admin', $where)->num_rows();
			$cek_login_perawat = $this->M_admin->select_where('tbl_perawat', $where)->num_rows();
			$cek_login_dokter = $this->M_admin->select_where('tbl_dokter', $where)->num_rows();

			

			if($cek_login_perawat > 0)
			{
				$data_perawat = $this->M_admin->select_where('tbl_perawat', $where)->result_array();
				foreach($data_perawat as $a)
				{
					$id_user = $a['id'];
					$nama = $a['nama'];
				}
				$data_session = array(
					'status_butawarna' => "login_butawarna",
					'nama_butawarna' => $nama,
					'id_butawarna' => $id_user,
					'level_butawarna' => 'perawat_butawarna'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url('dashboard?success=Berhasil Login lvl Perawat'));
			}
			elseif($cek_login_dokter > 0)
			{
				$data_dokter = $this->M_admin->select_where('tbl_dokter', $where)->result_array();
				foreach($data_dokter as $a)
				{
					$id_user = $a['id'];
					$nama = $a['nama'];
				}
				$data_session = array(
					'status_butawarna' => "login_butawarna",
					'nama_butawarna' => $nama,
					'id_butawarna' => $id_user,
					'level_butawarna' => 'dokter_butawarna'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url('dashboard?success=Berhasil Login lvl Dokter'));
			}
			elseif($cek_login_admin > 0)
			{
				$data_admin = $this->M_admin->select_where('tbl_admin', $where)->result_array();
				foreach($data_admin as $a)
				{
					$id_user = $a['id'];
					$nama = $a['nama'];
				}
				$data_session = array(
					'status_butawarna' => "login_butawarna",
					'nama_butawarna' => $nama,
					'id_butawarna' => $id_user,
					'level_butawarna' => 'admin_butawarna'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url('dashboard?success=Berhasil Login lvl admin'));
			}
			else
			{
				redirect(base_url("login?msg=username dan password tidak ditemukan"));
			}
		}
    }
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
