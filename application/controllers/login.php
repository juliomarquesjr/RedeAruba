<?php

class Login extends CI_Controller {

    public function index() {
        $this->load->view('login/login');
        $this->load->view('includes/footer');
    }

}
