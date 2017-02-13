<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct() {
		
		parent::__construct();
		$this->load->helper(array('url','form'));		
    }
	
	public function index() 
    {	    	
    	$this->load->view('register/viewRegister');    	
	}	    
}
?>