<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Checks if user has access and shows Welcome or Access denied page
 */
class Home extends CI_Controller {

    public function index()
    {
	//checking user session using login_helper
	if (logged_in())
	{
	    $this->welcome(); //redirecting to welcome mothod
	}
	else
	{
	    $this->access_denied(); //redirecting to access Denied page
	}
    }

    public function welcome()
    {	
	$this->layout->add_view($blocks, 'blocks/login_block');
	
    }
    
    /**
     * Dis
     */
    public function access_denied()
    {
	$this->layout->add_view('blocks', 'blocks/login_block');
	$this->layout->add_view('main','home/denied_view');
	$this->layout->render();
    }
    /**
     * check wheather user can log in or not
     */
    public function login()
    {	
	//setting rules
	$this->form_validation->set_rules('username', 'Логин', 'trim|required|xss_clean');
	$this->form_validation->set_rules('password', 'Пароль', 'md5|trim|required');
	
	//$this->load->language('form_validation', 'russian');
	//running form validation
	$this->form_validation->run();
	
	$this->layout->add_view('blocks', 'blocks/login_block');
	$this->layout->add_view('main','home/denied_view');
	$this->layout->render();
	
    }

}