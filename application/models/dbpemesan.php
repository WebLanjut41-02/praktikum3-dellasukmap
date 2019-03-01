<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class dbpemesan extends CI_Model {
   	function v_nama($table, $where){
    	return $this->db->get_where($table, $where);
       // $query = "Select * from karyawan";
       // $data = $this->db->query($query);
       // return $data->result();
   }

   function inama($data,$table){
    	$this->db->insert($table,$data);
    }

}


?>