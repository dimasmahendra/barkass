<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		
		parent::__construct();
		$this->load->library('session'); 
		$this->load->model('login_model');
		$this->load->helper(array('url','form'));		
    }
	
	public function index() 
    {	    	
    	$this->load->view('login/viewLogin'); 
    	$this->load->view('login/viewLoginFooter');
	}
	
	public function loginAdmin()
	{
		$url = URL_API.'loginadmin';
        $ch = curl_init($url);
   
        $jsonData = array(
            'email'      => $this->input->post('email'),
            'password'   => $this->input->post('password'),
            'level'      => $this->input->post('level')
        );

        //print_r($jsonData);die(); 
        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_close($ch);
        $hasil     = json_decode($result, true); 
        //print_r($hasil);die();         
        $this->session->set_userdata('logged_in',$hasil);       

        if (($hasil['status'] == '1') && ($hasil['message'] == 'Admin Barkas Ditemukan'))
        {
            redirect('Dashboard/index','refresh');    
        }        
        else if (($hasil['status'] == '0') && ($hasil['message'] == 'Password Salah')) 
        {   
            $this->session->set_flashdata('message', 'Password anda salah');            
            redirect('Login/index','refresh');            
        }
        else if (($hasil['status'] == '0') && ($hasil['message'] == 'Alamat Email Salah')) 
        {   
            $this->session->set_flashdata('message', 'Alamat Email Salah');            
            redirect('Login/index','refresh');            
        }
        else
        {   
            $this->session->set_flashdata('message', 'Terjadi kesalahan saat anda login');            
            redirect('Login/index','refresh');            
        }      
	}

	public function logoutAdmin()
    {
        $session_data = $this->session->userdata('logged_in');
        $url = URL_API.'logout';
        $ch = curl_init($url);
   
        $jsonData = array(
            'session_key'   => $session_data['session_key']          
        );
        //print_r($jsonData);die();   
        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_close($ch);
        $hasil  = json_decode($result, true);   
        //print_r($hasil);die();     
        if ($hasil['status'] == '1') 
        {
            $this->session->unset_userdata('logged_in');
            $this->session->set_flashdata('success', 'Berhasil Logout');              
            redirect('Login/index','refresh');
        }
        else
        {
            $this->session->set_flashdata('message', 'Terjadi kesalahan saat anda logout');
            redirect('Dashboard/index','refresh');
        }	    
    }
}
?>