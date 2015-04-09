<?php
class dir extends CI_Controller {

	public function index()
	{
		$this->output->cache(3);
		$this->load->view('avaleht.html');
	}
	public function statistika ()
	{
		$this->output->cache(3);
		$this->load->view('statistika.php');
	}
	public function kandidaadid ()
	{
		$this->load->view('kandidaadid.html');
	}
	public function tulemused ()
	{
		$this->load->view('tulemused.html');
	}
	public function login ()
	{
		$this->load->view('login.html');
	}
  

}
?>