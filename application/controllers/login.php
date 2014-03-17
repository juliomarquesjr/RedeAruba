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
        
        $this->form_validation->set_rules('usuario', 'Nome Usuário', 'required|trim');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        
        /*Verifica se a validação passou*/
        if($this->form_validation->run() == TRUE){
            //Criar um metodo para consulta de usuario e senha no banco.
            redirect('dashboard'); //Redirecino para tela de login.
        }
        else{
        $this->load->view('login/login');
        $this->load->view('includes/footer');
        }
    }
}
