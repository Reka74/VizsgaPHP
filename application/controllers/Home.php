<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Home
 *
 * @author tamas
 */
class Home extends CI_Controller {
    public function __construct(){
            parent::__construct();
            $this->load->model(array('auser'));
        }

    public function index(){
        
        $this->load->view('home');
        
    }
    
    public function login(){
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Jelszó', 'required|callback_usercheck');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        } else
        {
            redirect('Admin/index');
        }
    }
    
    public function logout() {
            $this->session->unset_userdata('user');
            redirect('Home/index');
        }
    
    public function usercheck (){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $userdata = $this->auser->getUserByEmailPassword($email, $password);
        if(count($userdata)=== 0){
            $this->form_validation->set_message('usercheck', 'Hibás felhasználónév vagy jelszó!');
             return false;
        }else{
            $this->session->set_userdata('user', $userdata);
            return true;
        }
    }
}
