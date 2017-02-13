<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
		public function __construct() 
		{
			parent::__construct();

			if(empty($_SESSION['logged_in']))
			{
				$this->session->set_flashdata('message', 'Silahkan Login Dahulu');
				redirect('Login/index','refresh');
			}					
		}		
}
?>