<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form','file','url','html'));
    }

    public function index()
    {   
            
    }  
}
?>