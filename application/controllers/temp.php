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
        $this->blocks();
	
    }
    /**
     * 
     * Test method to check templates part by part
     * 
     */
    public function blocks()
    {
        $this->layout->add_view('blocks', 'blocks/login_block');
        $this->layout->add_view('blocks', 'blocks/search_block');
        $this->layout->add_view('blocks', 'blocks/links_block');
        $this->layout->add_view('blocks', 'blocks/links_block');
        $this->layout->add_view('main', 'template/post_view');
        $this->layout->add_view('main', 'template/tags_view');
        $this->layout->render();
        
    }
}