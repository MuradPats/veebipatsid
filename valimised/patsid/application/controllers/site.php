<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

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
		$this->load->view('avaleht.html');
		$this->output->cache(3);
	}
	public function kandidaadid()
	{
		$this->getValues();
	}
    	function getValues()
     	{
        	$this->load->model("get_db");
        	$data['results'] = $this->get_db->getAll();
        	$this->load->view("kandidaadid.php", $data);
    	}
	function getValues2()
     	{
        	$this->load->model("get_db");
        	$data['results'] = $this->get_db->getAll2();
        	$this->load->view("tulemused.php", $data);
    	}

	function insertValues(){
        	$this->load->model("get_db");
       		
		 $newRow2 = array(
                 "name" => $_POST["Nimi"],
	         "erakond" => $_POST["Erakond"],
                 "ringkond" =>$_POST["Ringkond"],
                );
        	$this->get_db->insert($newRow2);
		
   	}
		function insertValues2(){
        	$this->load->model("get_db");
       		$newRow = array(
            	"valija" => $_POST["Nimi"],
           	"valik" => $_POST["Kandidaat"],
        	);
        	$this->get_db->insert2($newRow);
		
   	}

	public function statistika ()
	{
		$this->load->view('statistika.html');
		$this->output->cache(3);
	}

	public function tulemused ()
	{
		$this->getValues2();
	}
	public function login ()
	{
		$this->load->view('login.html');
	}
	
    

    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */