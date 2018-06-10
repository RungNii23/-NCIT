<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	public function getTest()
	{
		$sql = "test";
		
		//$query = $this->db->query($sql);
		//return $query->result(); เอาไปเฉพาะรีซอล
		//return $query; //ไปทั้งก้อน
		return $sql;
	}
	
}
