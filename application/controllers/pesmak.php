<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
class pesmak extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('dbpemesan');
		$this->load->model('dbmenu');
		$this->load->helper('url');
 
	}
 
	function index(){
		$this->load->view('nama');
	}
 
	function prosesinput(){
		$nama = $this->input->post('nama');
		
		$data = array(
			'nama' => $nama,
			
			);
		$this->dbpemesan->inama($data,'pemesan');
		redirect('pesmak/vmenu');
	}
	function vmenu(){
		
		$menu['data']=$this->dbmenu->show_menu();
		$this->load->view('menu', $menu);

	}
 
}


?>