<?php

class model_main extends CI_Model
{


	public function check_login($id,$pass){
		$sql = "select email,password,name from member where email='".$id."' and password = '".$pass."'";
		$query = $this->db->query($sql);
		return $query;
	}


	public function insert($type,$initial,$name,$address,$phone,$email,$department,$allergy,$password,$cost,$detail,$type){
			$sql = "INSERT INTO `member`(`initial`, `name`, `email`, `password`, `type`, `phone`,`address`,`department`,`allergy`,`cost`, `status`, `detail_tour`) VALUES ('".$initial."','".$name."','".$email."','".$password."','".$type."','".$phone."','".$address."','".$department."','".$allergy."','".$cost."','ค้างชำระ','".$detail."')";
	  	//echo 'sfsfsfsfsfsf';
		$this->db->query($sql);
	
	}
	
	
	
	
	
	
	
	
	
	
	
}



?>
