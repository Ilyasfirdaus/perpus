<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct(){
	  parent::__construct();
	  $this->load->model('MSudi');
	}
	public function index()
	{
		$data['content']='Beranda';
        $this->load->view('welcome_message',$data);
	}

	public function buku()
	{
		$data['DataPencarianBuku']=$this->MSudi->GetData('buku');
		$data['content']='buku/Vbuku';
        $this->load->view('welcome_message',$data);
	}

	public function pencarianbuku()
	{
		$data['DataPencarianBuku']=$this->MSudi->GetData('buku');
		$cari=$this->input->post('cari');
		$data['GetDataCariBuku'] = $this->MSudi->GetDataCariBuku($cari)->result();
		$data['content']='pencarian/VPencarianbuku';
		$this->load->view('welcome_message',$data);
	}

	public function BukuInsert()
	{
        $add['kd_buku'] = $this->input->post('kd_buku');
		$add['judul_buku'] = $this->input->post('judul_buku');
		$add['pengarang'] = $this->input->post('pengarang');
		$add['penerbit'] = $this->input->post('penerbit');
			

		$this->MSudi->AddData('buku', $add);


		redirect(site_url('Welcome/buku'));
	}

	public function BukuDelete()
	{
		
		$this->MSudi->DeleteData('buku','kd_buku',$kd_buku, $delete);$kd_buku = $this->uri->segment(3);
		$this->MSudi->DeleteData('buku','kd_buku', $kd_buku);
		redirect(site_url('Welcome/buku'));
	}

	public function BukuUpdate()
	{
		$kd_buku = $this->input->post('kd_buku');
		$update['judul_buku'] = $this->input->post('judul_buku');
		$update['pengarang'] = $this->input->post('pengarang');
		$update['penerbit'] = $this->input->post('penerbit');
		$this->MSudi->UpdateData('buku','kd_buku',$kd_buku, $update);
		redirect(site_url('Welcome/buku'));
	}

}
