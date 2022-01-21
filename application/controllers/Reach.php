<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Reach
 *
 * @author tamas
 */
class Reach extends CI_Controller{
    
    public function index(){
        $this->load->view('reach');
        
    }
}
