<?php

/**
 * This helper is created to provide sessionchecks for logging in
 */

/**
 * Check if user is logged in
 * 
 * @return bool
 */
function logged_in()
{
    //Get CI instance (used instead of $this)
    $CI =& get_instance();
    
    //creating User var to be chseked
    $user = $CI->session->userdata('is_logged_in');
    
    return ( ! empty($user)) ? TRUE : FALSE;
}