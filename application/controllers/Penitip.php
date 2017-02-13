<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penitip extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {   
        $session_data = $this->session->userdata('logged_in');               
        $dataSide['email'] = $session_data['data']['email'];

        //print_r($session_data);die(); 
        $this->load->view('viewHalamanDepan',$dataSide);
        $this->load->view('penitip/viewTambahPenitip');
        $this->load->view('viewFooter');
    }

    public function daftarPenitipBarkas()
    {   
        $session_data   = $this->session->userdata('logged_in');
        $url = URL_API.'getPenitip';
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
        //print_r($data['result']);die();
        $dataSide['email'] = $session_data['data']['email'];
        $this->load->view('viewHalamanDepan', $dataSide);
        $this->load->view('penitip/viewDaftarPenitip', $data);
        $this->load->view('viewFooter');       
    }  

    public function tambahPenitipBarkas()
    {   
        $session_data   = $this->session->userdata('logged_in');
        $url = URL_API.'insertpenitipbarkas';
        $ch = curl_init($url);
   
        $jsonData = array(
            'session_key'       => $session_data['session_key'],
            'nama'              => $this->input->post('nama'),
            'noktp'             => $this->input->post('noktp'),
            'rekening'          => $this->input->post('rekening'),
            'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
            'tempatlahir'       => $this->input->post('tempatlahir'),
            'tanggallahir'      => $this->input->post('tanggallahir'),
            'alamatktp'         => $this->input->post('alamatktp'),              
            'alamatsekarang'    => $this->input->post('alamatsekarang'),               
            'telepon'           => $this->input->post('telepon'),               
            'email'             => $this->input->post('email'),               
            'pekerjaan'         => $this->input->post('pekerjaan'),             
            'status'            => 'aktif' 
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
        $hasil    = json_decode($result, true);     
        //print_r($hasil);die();
        if ($hasil['status'] == '1') 
        {    
            $this->session->set_flashdata('success', 'Data Berhasil di tambahkan'); 
            redirect('Penitip/daftarPenitipBarkas','refresh');
        }
        else
        {
            $this->session->set_flashdata('message', 'Data gagal di tambah');
            redirect('Penitip/daftarPenitipBarkas','refresh');
        }   
    }

    public function detilPenitip()
    {   
        $session_data   = $this->session->userdata('logged_in');
        $url = URL_API.'getDetilPenitip';
        $ch = curl_init($url);    
        $id = $this->uri->segment(3);      
      
        $jsonData = array(           
            'session_key' => $session_data['session_key'],
            'penitip_id'  => $id
        );
        /*print_r($jsonData);die();*/
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
        //print_r($result);die();
        $dataSide['email'] = $session_data['data']['email'];
        $this->load->view('viewHalamanDepan', $dataSide);
        $this->load->view('penitip/viewDaftarPenitip', $data);
        $this->load->view('viewFooter');
    }

    public function updatePenitipBarkas()
    {   
        $session_data   = $this->session->userdata('logged_in');
        $url = URL_API.'updatePenitipBarkas';
        $ch = curl_init($url);
        $tempatlahir = trim($this->input->post('tempatlahiredit'));
        //print_r($tempatlahir);die();
        $jsonData = array(
            'session_key'       => $session_data['session_key'],
            'id'                => $this->input->post('idedit'),
            'nama'              => $this->input->post('namaedit'),
            'noktp'             => $this->input->post('noktpedit'),
            'rekening'          => $this->input->post('rekeningedit'),
            'jeniskelamin'      => $this->input->post('jeniskelaminedit'),
            'tempatlahir'       => $tempatlahir,
            'tanggallahir'      => $this->input->post('tanggallahiredit'),
            'alamatktp'         => $this->input->post('alamatktpedit'),              
            'alamatsekarang'    => $this->input->post('alamatsekarangedit'),               
            'telepon'           => $this->input->post('teleponedit'),               
            'email'             => $this->input->post('emailedit'),               
            'pekerjaan'         => $this->input->post('pekerjaanedit'),
            'status'            => 'aktif'
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
        $hasil    = json_decode($result, true);     
        //print_r($hasil);die();
        if ($hasil['status'] == '1') 
        {    
            $this->session->set_flashdata('success', 'Data Berhasil di update'); 
            redirect('Penitip/daftarPenitipBarkas','refresh');
        }
        else
        {
            $this->session->set_flashdata('message', 'Data gagal di update');
            redirect('Penitip/daftarPenitipBarkas','refresh');
        }   
    }

    public function hapusPenitip()
    {
        $session_data   = $this->session->userdata('logged_in');        
        $url = URL_API.'deletePenitipBarkas';
        $ch = curl_init($url);
        $id = $this->uri->segment(3);
      
        $jsonData = array(      
            'id'            => $id,
            'session_key'   => $session_data['session_key']
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
        $hasil    = json_decode($result, true);

        if ($hasil['status'] == '1') 
        {    
            $this->session->set_flashdata('message', 'Penitip berhasil di hapus'); 
            redirect('Penitip/daftarPenitipBarkas','refresh');
        }
        else
        {
            $this->session->set_flashdata('error', 'Penitip gagal di hapus');
            redirect('Penitip/daftarPenitipBarkas','refresh');
        }  
    }  

    public function detilProdukPenitip()
    {   
        $session_data   = $this->session->userdata('logged_in');
        $url = URL_API.'getDetilProduk';
        $ch = curl_init($url);    
        $id = $this->uri->segment(3);      
      
        $jsonData = array(           
            'session_key' => $session_data['session_key'],
            'produk_id'  => $id
        );
        /*print_r($jsonData);die();*/
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
        $data['tanggal'] = date('Y-m-d');
        //print_r($data['result']);die();
        $dataSide['email'] = $session_data['data']['email'];
        $this->load->view('viewHalamanDepan', $dataSide);
        $this->load->view('penitip/viewDetilPenitipProduk', $data);
        $this->load->view('viewFooter');
    }  
}
?>