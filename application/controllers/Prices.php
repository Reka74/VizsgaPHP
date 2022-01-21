<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Prices
 *
 * @author tamas
 */
class Prices extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model(array('cars'));
    }
        
    public function index(){
       
        $output['cardetails'] = $this->cars->getCars();
        $this->load->view('prices', $output);
        
    }
   
}
