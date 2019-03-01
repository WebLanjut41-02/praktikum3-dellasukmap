<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	
class dbmenu extends CI_Model{
	function show_menu(){
		$data=$this->db->query("SELECT * FROM menu");
		return $data;
	}
}

?>