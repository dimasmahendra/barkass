<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct() {
		
		parent::__construct();
		$this->load->library('session'); 	  
    }
	
	public function index(){        

        $session_data = $this->session->userdata('logged_in');               
        $dataSide['email'] = $session_data['data']['email'];

        //print_r($session_data);die(); 
        $this->load->view('viewHalamanDepan',$dataSide);
    	$this->load->view('dashboard/viewWelcome');
        $this->load->view('viewFooter');  
	}			  
}
?>