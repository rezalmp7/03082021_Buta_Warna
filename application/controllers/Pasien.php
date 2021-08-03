<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('./excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class Pasien extends CI_Controller {

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

        if($this->session->userdata('status_butawarna') != 'login_butawarna' || $this->session->userdata('level_butawarna') != 'admin_butawarna' && $this->session->userdata('level_butawarna') != 'perawat_butawarna')
        {
            redirect(base_url('login/logout'));
        }
    }
	public function index()
	{
        $header['page'] = 'pasien';

        $data['data_pasien'] = $this->M_admin->select_all('tbl_pasien')->result();

        $this->load->view('layout/header', $header);
		$this->load->view('pasien', $data);
        $this->load->view('layout/footer');
	}
    public function tambah()
	{
        $header['page'] = 'pasien';

        $max_id = $this->M_admin->select_select('max(id) as id_max', 'tbl_pasien')->row_array();

        if($max_id['id_max'] == null)
        {
            $data['id'] = 1;
        }
        else
        {
            $data['id'] = $max_id['id_max']+1;
        }

        $this->load->view('layout/header', $header);
		$this->load->view('pasien_tambah', $data);
        $this->load->view('layout/footer');
	}
    function aksi_tambah()
    {
        $post = $this->input->post();

        $nama_capital = ucwords($post['nama']);

        $where = array(
            'nama' => $nama_capital,
            'jenkel' => $post['jenkel'],
            'tgl_lahir' => $post['tgl_lahir']
        );

        $cek = $this->M_admin->select_where('tbl_pasien', $where)->row_array();

        if($cek != null)
        {
            redirect(base_url('pasien/id?warning=Data Nama, Jenis Kelamin, Tanggal Lahir Sudah Terdaftar&id='.$cek['id']));
        }
        else {
            $timestamp = date('Y-m-d H:i:s');
            
            $id = $post['id'];

            $data = array(
                'id' => $post['id'],
                'nama' => $post['nama'],
                'jenkel' => $post['jenkel'],
                'tgl_lahir' => $post['tgl_lahir'],
                'alamat' => $post['alamat'],
                'created_at' => $timestamp
            );

            $this->M_admin->insert_data('tbl_pasien', $data);
            
            redirect(base_url('pasien/id?success=Pasien Berhasil Didaftarkan!&id='.$id));
        }
    }
    public function id()
    {
        $header['page'] = 'pasien';

        $get = $this->input->get();

        $where = array(
            'id' => $get['id']
        );
        
        $data['pasien'] = $this->M_admin->select_where('tbl_pasien', $where)->row();

        $this->load->view('layout/header', $header);
        $this->load->view('pasien_id', $data);
        $this->load->view('layout/footer');
    }
    public function edit()
    {
        $header['page'] = 'pasien';

        $get = $this->input->get();

        $where = array(
            'id' => $get['id']
        );
        
        $data['pasien'] = $this->M_admin->select_where('tbl_pasien', $where)->row();

        $this->load->view('layout/header', $header);
        $this->load->view('pasien_edit', $data);
        $this->load->view('layout/footer');
    }
    function aksi_edit()
    {
        $post = $this->input->post();

        $where = array(
            'id' => $post['id'], 
        );

        $set = array(
            'nama' => $post['nama'],
            'jenkel' => $post['jenkel'],
            'tgl_lahir' => $post['tgl_lahir'],
            'alamat' => $post['alamat']
        );

        $this->M_admin->update_data('tbl_pasien', $set, $where);

        redirect(base_url('pasien?success=Pasien Berhasil di Edit'));
    }
    function hapus()
    {
        $get = $this->input->get(); 

        $where = array(
            'id' => $get['id'], 
        );
        $where_test = array(
            'id_pasien' => $get['id'], 
        );

        $this->M_admin->delete_data('tbl_pasien', $where);
        $this->M_admin->delete_data('tbl_test', $where_test);

        redirect(base_url('pasien?success=Pasien Berhasil di Hapus dari Database'));
    }
    public function cetak()
	{
        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator('Andoyo - Java Web Media')
        ->setLastModifiedBy('Andoyo - Java Web Medi')
        ->setTitle('Office 2007 XLSX Test Document')
        ->setSubject('Office 2007 XLSX Test Document')
        ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
        ->setKeywords('office 2007 openxml php')
        ->setCategory('Test result file');

        $spreadsheet->getActiveSheet()->setCellValue('A1', 'Data Pasien '.date('Y'));
        $spreadsheet->getActiveSheet()->mergeCells("A1:G1");

        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ]
        ];

        $spreadsheet->getActiveSheet()->getStyle('A1')->applyFromArray($styleArray);
        $spreadsheet->getActiveSheet()->getStyle("A2:G2")->getFont()->setBold(true);
        $spreadsheet->getDefaultStyle()->getFont()->setName('Poppins');

        // Add some data
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A2', 'No')
        ->setCellValue('B2', 'ID Pasien')
        ->setCellValue('C2', 'Nama')
        ->setCellValue('D2', 'Jenis Kelamin')
        ->setCellValue('E2', 'Tanggal Lahir')
        ->setCellValue('F2', 'Alamat')
        ->setCellValue('G2', 'Dibuat Tanggal')
        ;

        // Miscellaneous glyphs, UTF-8
        $pasien = $this->M_admin->select_all('tbl_pasien')->result();
        $no = 1;
		$x = 3;
		foreach($pasien as $row)
		{
            $spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'.$x, $no++)
			->setCellValue('B'.$x, sprintf("%04d", $row->id))
			->setCellValue('C'.$x, $row->nama)
			->setCellValue('D'.$x, $row->jenkel)
			->setCellValue('E'.$x, date('d/m/Y', strtotime($row->tgl_lahir)))
			->setCellValue('F'.$x, $row->alamat)
			->setCellValue('G'.$x, $row->created_at);
			$x++;
		}
        
        
        $spreadsheet->getActiveSheet()->getStyle("A2:G".$x)->getFont()->setSize(13);
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        
        $spreadsheet->getActiveSheet()->getStyle('A2:G'.$x)->getAlignment()->setWrapText(true);
        $spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setWrapText(true);
        // Rename worksheet
        $spreadsheet->getActiveSheet()->getPageSetup()
        ->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $spreadsheet->getActiveSheet()->setTitle('Report Excel '.date('d-m-Y H'));

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Laporan Pasien '.date('Y').'.xlsx"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
	}
}
