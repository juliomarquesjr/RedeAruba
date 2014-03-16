<?php

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('login/login');
        $this->load->view('includes/footer');
    }
    
    public function verifica(){
        
        $this->form_validation->set_rules('usuario', 'Usuario', 'required|trim');
        
    }

}
