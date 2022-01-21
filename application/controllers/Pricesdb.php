<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pricesdb
 *
 * @author tamas
 */
class Pricesdb extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }
    
    public function index(){
        $crud = new grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_subject('Ár');
        $crud->set_table('price');
        $crud->display_as('price_1day', '1 napi ár');
        $crud->display_as('price_3days', 'Napi ár 3 naptól');
        $crud->display_as('price_7days', 'Napi ár 7 naptól');
        $crud->display_as('deposit', 'kaució');
        $output = [];
        $output = $crud->render();
        $output = (array)$output;
        $output['page']         = 'pricesdb';
        $output['username']     = $this->session->get_userdata('user')['user']['utonev'];
        $this->load->view('admin', $output);
    }
}
