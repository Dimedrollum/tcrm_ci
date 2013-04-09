<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

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
    
    public function access_denied()
    {
	$this->layout->add_view('blocks', 'blocks/login_block');
	$this->layout->add_view('main','home/denied_view');
	$this->layout->render();
    }
    
}