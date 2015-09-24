<?php
class User_model extends CI_Model
{
    public function login($name, $password, $role)
    {
        $this->load->database();
        $this->db->select('Role,Username,Password');
        $this->db->from('user');
        $this->db->where('Role',$role);
        $this->db->where('Username',$name);
        $this->db->where('Password',$password);        
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            return true;
        }
        else 
            return false;
    }
    
   
}
