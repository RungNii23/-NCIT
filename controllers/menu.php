<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menu extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//echo 'sfsgfsf';
		$this->load->view('header.php');
		$this->load->view('content_home.php');
		$this->load->view('footer.php');
	}
	
	public function m1_1()
	{
		$this->load->view('header.php');
		$this->load->view('m1_1.php');
		$this->load->view('footer.php');
	}
	public function m1_2()
	{
		header( "location: http://localhost/teamB/index.php/main/form" );
	}
	public function m2_1()
	{
		$this->load->view('header.php');
		$this->load->view('m2_1.php');
		$this->load->view('footer.php');
	}
	public function m2_2()
	{
		$this->load->view('header.php');
		$this->load->view('m2_2.php');
		$this->load->view('footer.php');
	}
	public function m3_1()
	{
		$this->load->view('header.php');
		$this->load->view('m3_1.php');
		$this->load->view('footer.php');
	}
	public function m3_2()
	{
		$this->load->view('header.php');
		$this->load->view('m3_2.php');
		$this->load->view('footer.php');
	}
	public function m3_3()
	{
		$this->load->view('header.php');
		$this->load->view('m3_3.php');
		$this->load->view('footer.php');
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */