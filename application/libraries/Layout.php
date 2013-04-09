<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout {
     /**
     *
     * @var array - layout container
     */
    private $content_areas = array();
    private $CI;
    
    public function __construct()
    {
        $this->CI =& get_instance();
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
        $this->_add_content($content_area, $this->CI->load->view($view, $data, TRUE));
    }
    
    /**
     * The adder to content
     * 
     * @param str $content_area
     * @param str $content
     */
    private function _add_content($content_area, $content)
    {
        if ( ! isset($this->content_areas[$content_area]))
        {
            $this->content_areas[$content_area]='';
        }
        $this->content_areas[$content_area] = $this->content_areas[$content_area] . $content;
    }

    /**
     * Renders collected layout
     * 
     * @param string $layout = "default" - change the layout
     */
    
    public function render($layout = 'default')
    {
	$this->CI->load->view('layouts/' . $layout, $this->content_areas);
    }

}
