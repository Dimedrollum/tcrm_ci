<?php

/**
 * Extention to CI controller to implement simple Layout f-ty
 */
class MY_Controller extends CI_Controller {

    /**
     *
     * @var array - layout container
     */
    private $content_areas;
    
    /**
     * Inherit parrent constructor
     */
    function __construct()
    {
	parent::__construct();
    }
    /**
     * Add view to an appropriate Content areaarea 
     * 
     * @param str $content_area - the place in layout
     * @param str $view - View to insert to layout
     * @param array $data = array() - Non Mandatory - array with data to wrap
     */
    public function add_view($content_area, $view, $data = array())
    {
	$this->add_content($content_area, $this->load->view($view, $data, TRUE));
    }
    
    /**
     * The adder to content
     * 
     * @param str $content_area
     * @param str $content
     */
    private function add_content($content_area, $content)
    {
	$this->content_areas[$content_area] = $this->content_areas[$content_area] . $content;
    }

    /**
     * Renders collected layout
     * 
     * @param string $layout = "default" - change the layout
     */
    
    public function render($layout = "default")
    {
	$this->load->view('layouts/' . $layout, $this->content_areas);
    }

}