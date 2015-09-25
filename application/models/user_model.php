<?php
class user_model extends CI_Model
{
    public function login($name, $pass, $role)
    {
        $this->db->select('Role,Username,Password');
        $this->db->from('user');
        $this->db->where('Role',$role);
        $this->db->where('Username',$name);
        $this->db->where('Password',$pass);        
        $query = $this->db->get();

        if($query->num_rows() >= 1)
        {
            return true;
        }
        else 
            return false;
    }
    
   
}
