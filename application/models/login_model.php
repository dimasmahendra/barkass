<?php

Class login_model extends CI_Model
{
    
    // Insert registration data in database
    function registration_insert($data)
    {
        
        // Query to check whether username already exist or not
        $condition = "user_name =" . "'" . $data['user_name'] . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            // Query to insert data in database
            $this->db->insert('user_login', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }
    
    // Read data using username and password
    function login($daftarData)
    {
        
        $condition = "username =" . "'" . $daftarData['username'] . "' AND " . "password =" . "'" . $daftarData['password'] . "'";  

        $this->db->select('*');
        $this->db->from('t_user_admin');
        $this->db->where($condition);        
        $this->db->limit(1);
        $query = $this->db->get();          

        if ($query->num_rows() == 1) {
            $result  = $query->result_array();            
            if($result[0]['status'] = 'merchant'){
                return true;
            }            
        } else {
            return false;
        }
    }
    
    // Read data from database to show data in admin page
    function read_user_information($username)
    {        
        $condition = "username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('t_user_admin');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    
}

?>