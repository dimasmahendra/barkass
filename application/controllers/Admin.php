<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form','file','url','html'));
        $this->load->model(array('provinsi_model'));
    }

    public function index()
    {   
        $session_data = $this->session->userdata('logged_in');        
        $dataSide['email'] = $session_data['data']['email'];

        $url = file_get_contents(URL_APIS.'getprovinsi');
        $data['hasil'] = json_decode($url,true);  

        $this->load->view('viewHalamanDepan', $dataSide);
        $this->load->view('profilebarkas/viewTambahAdmin', $data); 
    }  

    public function kabupatenkota($id)
    {   
        $url = URL_APIS.'getkabupatenkota'; 
        $hasil = $this->provinsi_model->get($id, $url);
        $dataKota = "<option value=''>- Pilih Kabupaten/Kota -</option>";
        foreach ($hasil['data'] as $value) {
                /*echo $value['id'];*/
                $dataKota .= "<option value='".$value['id']."'>".$value['nama']."</option>";
            }
        echo $dataKota;                   
    } 

    public function kecamatan($id)
    {   
        $url = URL_APIS.'getkecamatan'; 
        $hasil = $this->provinsi_model->get($id, $url);
        $dataKota = "<option value=''>- Pilih Kecamatan -</option>";
        foreach ($hasil['data'] as $value) {
                /*echo $value['id'];*/
                $dataKota .= "<option value='".$value['id']."'>".$value['nama']."</option>";
            }
        echo $dataKota;                   
    }

    public function kelurahan($id)
    {   
        $url = URL_APIS.'getkelurahan'; 
        $hasil = $this->provinsi_model->get($id, $url);
        $dataKota = "<option value=''>- Pilih Kelurahan -</option>";
        foreach ($hasil['data'] as $value) {
                /*echo $value['id'];*/
                $dataKota .= "<option value='".$value['id']."'>".$value['nama']."</option>";
            }
        echo $dataKota;                   
    }

    public function daftarAdminBarkas()
    {   
        $session_data   = $this->session->userdata('logged_in');
        $url = URL_API.'getAdmin';
        $ch = curl_init($url);      
      
        $jsonData = array(           
            'session_key' => $session_data['session_key']
        );

        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);     
        $result = curl_exec($ch);
        curl_close($ch);        
        $data['result']     = json_decode($result, true);
        
        $dataSide['email'] = $session_data['data']['email'];
        $this->load->view('viewHalamanDepan', $dataSide);
        $this->load->view('profilebarkas/viewDaftarAdmin', $data);
        $this->load->view('viewFooter');       
    }  
}
?>