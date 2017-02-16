<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {   
        $session_data = $this->session->userdata('logged_in');               
        $dataSide['email'] = $session_data['data']['email'];

        $url = file_get_contents(URL_APIS.'getPenitip');
        $data['penitip'] = json_decode($url,true);

        $url2 = file_get_contents(URL_APIS.'getKategori');
        $data['kategori'] = json_decode($url2,true); 
        //print_r($url2);die(); 
        $this->load->view('viewHalamanDepan',$dataSide);
        $this->load->view('produk/viewTambahProduk', $data);
        $this->load->view('viewFooter');
    }  

    public function daftarProduk()
    {   
        $session_data   = $this->session->userdata('logged_in');
        $url = URL_API.'getProduk';
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
        $this->load->view('produk/viewDaftarProduk', $data);
        $this->load->view('viewFooter');       
    } 

    public function tambahProduk()
    {   
        $session_data   = $this->session->userdata('logged_in');
        $url = URL_API.'insertprodukbarkas';
        $ch = curl_init($url);
   
        $jsonData = array(
            'session_key'       => $session_data['session_key'],
            'penitip_id'        => $this->input->post('penitip_id'),
            'kategori_id'       => $this->input->post('kategori_id'),
            'nama'              => $this->input->post('nama'),
            'berat'             => $this->input->post('berat'),
            'hargajual'         => $this->input->post('hargajual'),       
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
            redirect('Produk/daftarProduk','refresh');
        }
        else
        {
            $this->session->set_flashdata('message', 'Data gagal di tambah');
            redirect('Produk/daftarProduk','refresh');
        } 
    }

    public function editProduk()
    {   
        $session_data   = $this->session->userdata('logged_in');
        $url = URL_API.'getprodukbyid';
        $ch = curl_init($url);
        $id = $this->uri->segment(3);
   
        $jsonData = array(
            'session_key'       => $session_data['session_key'], 
            'produk_id'        => $id                
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
        $data['hasil']     = json_decode($result, true);   

        $url = file_get_contents(URL_APIS.'getPenitip');
        $data['penitip'] = json_decode($url,true);

        $url2 = file_get_contents(URL_APIS.'getKategori');
        $data['kategori'] = json_decode($url2,true);
        //print_r($data['hasil']);die();
        $dataSide['email'] = $session_data['data']['email'];
        $this->load->view('viewHalamanDepan', $dataSide);
        $this->load->view('produk/viewEditProduk', $data);
        $this->load->view('viewFooter');  
    }

    public function updateProdukBarkas()
    {   
        $session_data   = $this->session->userdata('logged_in');
        $url = URL_API.'updateprodukbarkas';
        $ch = curl_init($url);
        
        $jsonData = array(
            'session_key'   => $session_data['session_key'],
            'id'            => $this->input->post('id'),
            'penitip_id'    => $this->input->post('penitip_id'),
            'kategori_id'   => $this->input->post('kategori_id'),
            'nama'          => $this->input->post('nama'),
            'berat'         => $this->input->post('berat'),
            'hargajual'     => $this->input->post('hargajual'),
            'status'        => $this->input->post('status')
        );    
        
        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_close($ch);
        $hasil    = json_decode($result, true); 
        if ($hasil['status'] == '1') 
        {    
            $this->session->set_flashdata('success', 'Data Berhasil di update'); 
            redirect('Produk/daftarProduk','refresh');
        }
        else
        {
            $this->session->set_flashdata('message', 'Data gagal di update');
            redirect('Produk/daftarProduk','refresh');
        }   
    }

    public function hapusProduk()
    {
        $session_data   = $this->session->userdata('logged_in');        
        $url = URL_API.'deleteproduk';
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
            $this->session->set_flashdata('success', 'Produk berhasil di hapus'); 
            redirect('Produk/daftarProduk','refresh');
        }
        else
        {
            $this->session->set_flashdata('message', 'Produk gagal di hapus');
            redirect('Produk/daftarProduk','refresh');
        }  
    }  
}
?>