<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	
	public function index()
	{	
			$this->load->view('header.php');
			$this->load->view('content_home.php');
			$this->load->view('footer.php');
	}
	
	public function update()
	{
		if((isset($_SESSION['username']))&&($_SESSION['sys_login']==TRUE)){
			echo 'afafafafafafaf update';
 		}
	    else{
			header( "location: http://localhost/teamB/" );
		}
		
	}
	
	public function confirm_payment()
	{
		if((isset($_SESSION['username']))&&($_SESSION['sys_login']==TRUE)){
			echo 'confirm_payment';
 		}
	    else{
			header( "location: http://localhost/teamB/" );
		}
		
	}


}

