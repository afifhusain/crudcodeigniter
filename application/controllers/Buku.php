<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	function __construct()
	{
		 parent:: __construct();
		 $this->load->model('buku_m', 'buku');
	}

	public function index()
	{
		$query = $this->buku->get();
		$data = array(
			'header' => 'Tampil Data Buku',
			'buku' => $query->result(),
		//cara lain
		//$data['header'] = "tampil data buku";
		//$buku['buku'] = $query->result();
		);
		$this->load->view('buku_tampil', $data);
	}

	public function add()
	{
		$data = array(
			'header' => 'Halaman Tambah Buku'
		);

		$this->load->view('buku_tambah', $data);
	}
	public function edit($id = null)
	{
		echo "Edit buku" .$id;
	}
	
	public function proses()
	{
		if(isset($_POST['add'])){
			$inputan = $this->input->post(null, TRUE);
			$this->buku->add($inputan);

		}else if(isset($_POST['edit'])) {
			echo "proses edit data";
		}
		redirect('buku');
	}
	
}
