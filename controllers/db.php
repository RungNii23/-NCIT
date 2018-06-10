<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class db extends CI_Controller {

	
	public function index()
	{
		
		
		if((isset($_SESSION['username']))&&($_SESSION['sys_login']==TRUE)){
			$this->load->view('header.php');
			$this->load->view('content_home.php');
			$this->load->view('footer.php');
 		}
	    else{
			$this->load->view('header.php');
			$this->load->view('content_home.php');
			$this->load->view('footer.php');
		}
	}
	
	public function logout()
	{
		//echo 'sfsgfsf';
		session_destroy();
		header( "location: http://localhost/teamB/" );
	}
	
	public function check_login()
	{
		//echo 'check_login';
		$id = isset ($_POST['id'])? $_POST['id'] : "";
		$pass = isset ($_POST['pass'])? $_POST['pass'] : "";
		$this->load->model("model_main");
		$query = $this->model_main->check_login($id,$pass);
		
		$c = 0;
		foreach ($query->result() as $row){
			if(($row->email==$id)&&($row->password==$pass)){
			  $this->load->library('session');
			 
			  $newdata = array( 
				  'username' => $row->email,
				  'name' => $row->name,      
				  'sys_login' => TRUE );	  
			  $this->session->set_userdata($newdata);
			  $this->session->set_flashdata('result', 'true');
			  $c=1;
			  header( "location: http://localhost/teamB/" );	
		    }
			
		}
		if($c==0){
			  $this->load->library('session');
			  $this->session->set_flashdata('result', 'false');
			  header( "location: http://localhost/teamB/index.php/db/login" );	
		}	
		
		
		
	}
	

	public function insert()
	{
		//echo var_dump($_POST);
		$initial = isset ($_POST['ser'])? $_POST['ser'] : "";
		$name = isset ($_POST['fname'])? $_POST['fname'] : "";
		$address = isset ($_POST['address'])? $_POST['address'] : "";
		$phone = isset ($_POST['tel'])? $_POST['tel'] : "";
		$email = isset ($_POST['email'])? $_POST['email'] : "";
		$department = isset ($_POST['depertment'])? $_POST['depertment'] : "";
		$allergy = isset ($_POST['food'])? $_POST['food'] : "";
		$password = isset ($_POST['pass'])? $_POST['pass'] : "";
		$cost = 0;
		$type = isset ($_POST['user_type'])? $_POST['user_type'] : "";
			if ($type == 0 )
				$cost = 7000;
			else if ($type == 1 )
				$cost = 5000;

		$cost += isset ($_POST['tour'])? $_POST['tour'] : "0";
		
		$detail ="";
			if ($cost == 2000){
				$detail = "ชมปลาโลมาสีชมพู";
				
			}
			if ($cost == 6000 ){
					$detail = "เขาหลวง";
					
			}
			if ($cost == 17000 ||$cost == 15000){
					$cost -=9000;
					$detail = "สัมผัสเสน่ห์เมืองนครศรีธรรมราช";
					
			}

		$this->load->model("model_main");
		$this->model_main->insert($type,$initial,$name,$address,$phone,$email,$department,$allergy,$password,$cost,$detail,$type);

		 header( "location: http://localhost/teamB/" );

	}
	
	public function login()
	{
		//echo 'sfsgfsf';
		$this->load->view('header.php');
		$this->load->view('login.php');
		$this->load->view('footer.php');
	}


}

