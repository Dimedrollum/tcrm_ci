<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This is a temporary controller to check template
 */
class Temp extends CI_Controller {
    
    /**
     * Index loading tempalte view
     */
    public function index()
    {
        $this->load->view('template');
	
    }
    /**
     * 
     * Test method to check templates part by part
     * 
     */
    public function blocks()
    {
	$this->add_view()
    }
}