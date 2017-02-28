<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form','file','url','html'));
        $this->load->model(array('crud_model'));
    }

    public function index()
    {   
        $session_data = $this->session->userdata('logged_in');  
        if (empty($this->session->userdata('produkTransaksiTempdua'))) {
            $tempsatu = $this->session->userdata('produkTransaksiTempdua');
            $this->session->set_userdata('produkTransaksiTempdua',$tempsatu); 
            $this->session->unset_userdata('produkTransaksiTempsatu');
        }
        $tempdua = $this->session->userdata('produkTransaksiTempdua');                
        $dataSide['email'] = $session_data['data']['email'];

        $this->load->view('viewHalamanDepan',$dataSide);
        $this->load->view('transaksi/viewTransaksi');
        $this->load->view('viewFooter');
    } 

    public function getProdukTransaksi()
    {   
        $session_data   = $this->session->userdata('logged_in');
        $url = URL_API.'getproduktransaksi'; 
        $jsonData = array(
            'session_key'       => $session_data['session_key'],
            'kodebarang'        => $this->input->post('kodebarang')
        );            
        $get = $this->crud_model->post($jsonData, $url); 
        $this->session->set_userdata('produkTransaksiTempsatu',$get);       
        return $get;
    }
}
?>