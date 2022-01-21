<?php

/**
 * Description of Cardb
 *
 * @author tamas
 */
class Cardb extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }
    
    public function index(){
        $crud = new grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_subject('Autó');
        $crud->set_table('car');
        $crud->display_as('car_type', 'Autó típusa');
        $crud->display_as('car_image', 'Fotó');
        $crud->display_as('price_id', '1 napi ár');
        $crud->set_relation('price_id', 'price', 'price_1day');
        $crud->set_field_upload('car_image','assets/img');
        $output = [];
        $output = $crud->render();
        $output = (array)$output;
        $output['page']         = 'cardb';
        $output['username']     = $this->session->get_userdata('user')['user']['utonev'];
        $this->load->view('admin', $output);
    }
}
