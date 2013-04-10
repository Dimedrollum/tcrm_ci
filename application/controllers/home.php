<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

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
/**
 * Load access Granted view
 */
    public function welcome()
    {
	$main_data = array(
	    'userdata' => print_r($this->session->all_userdata(),true)
	);
	$block_data = array(
	    'name' => $this->session->userdata('name')
	);
	$this->layout->add_view('blocks', 'blocks/logged_block', $block_data);
	$this->layout->add_view('blocks', 'blocks/search_block');
	$this->layout->add_view('blocks', 'blocks/links_block');
	$this->layout->add_view('main', 'home/granted_view', $main_data);
	$this->layout->render();
    }

    /**
     * Load Access denied view
     */
    public function access_denied()
    {
	$this->layout->add_view('blocks', 'blocks/login_block');
	$this->layout->add_view('main', 'home/denied_view');
	$this->layout->render();
    }

    /**
     * Сheck wheather user can log in or not
     */
    public function login()
    {
	//setting rules
	$this->form_validation->set_rules('username', 'Логин', 'trim|required|xss_clean');
	$this->form_validation->set_rules('password', 'Пароль', 'md5|trim|required');

	//runnning check
	//checking if post is sent, where 'login' is id of form submit button
	if ($this->input->post('login'))
	{
	    if ($this->form_validation->run()) //check the form validation
	    {
		$this->load->model('login_model'); //loading model
		
		
		//check if correct credentials provided
		if ($this->login_model->correct_credentials())
		{
		    //open session
		    $session_data = array(
			'is_logged_in' => TRUE,
			'name' => $this->login_model->correct_credentials()
		    );
		    $this->session->set_userdata($session_data);
		    redirect('');
		}
		else
		{
		    $this->form_validation->set_message('', 'Неверные Логин/Пароль');

		    $data = array(
			'wrong_creds' => "Неверные данные"
		    );
		    $this->layout->add_view('blocks', 'blocks/login_block', $data);
		    $this->layout->add_view('main', 'home/denied_view');
		    $this->layout->render();
		}
	    }
	    else //if from validaiton failed
	    {
		$this->layout->add_view('blocks', 'blocks/login_block');
		$this->layout->add_view('main', 'home/denied_view');
		$this->layout->render();
	    }
	}
    }
    
    public function logout()
    {
	$this->session->unset_userdata('is_logged_in');
	redirect('');
    }

}