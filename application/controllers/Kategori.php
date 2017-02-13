<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('Url');   
    }

    public function index()
    {
        $session_data = $this->session->userdata('logged_in'); 
        $url = URL_API.'getkategori';
        $ch = curl_init($url);      
      
        $jsonData = array(           
            'session_key'       => $session_data['session_key']                        
        );     

        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_close($ch);
        $data['result'] = json_decode($result, true);

        print_r($data['result']);die();

        $dataSidebar['notif'] = $this->Sidebar_model->modelNotif();     

        $this->load->view('main_admin.php',$dataSidebar);
        $this->load->view('admin/kategori/viewDaftarKategori.php',$data);
        $this->load->view('footer_admin.php');     
    }
?>