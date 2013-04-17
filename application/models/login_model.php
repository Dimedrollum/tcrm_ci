<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Handels all Login Logics
 */
class Login_model extends CI_Model {
    
    public function correct_credentials()
    {
	//select db
	//$this->load->database();
	//set conditions
	$this->db->where('login', $this->input->post('username'));
	$this->db->where('password', $this->input->post('password'));
	//run query
	$query=$this->db->get('users');
	$row = $query->row();
	
	

	
	if ($row)
	{
	
	    return $row->name;
	}
	else
	{
	    return FALSE;
	}
    }
    
}