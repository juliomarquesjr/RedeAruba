<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> helper('form');
		$this -> load -> library('form_validation');
		$this -> load -> helper('array');
		$this -> load -> library('session');
	}

	public function index() {
		//Carrega o reader da página
		$this -> load -> view('login/login');
	}

	public function verifica() {
		//Regrade de validação do formulario de login
		$this -> form_validation -> set_rules('usuario', 'Nome Usuário', 'required|trim');
		$this -> form_validation -> set_rules('senha', 'Senha', 'required');

		/* Verifica se a validação passou, se não haver problemas */
		if ($this -> form_validation -> run() == TRUE) {
			
			//Guarda em array os dados do usuario vindos do formulario de login
			$dadosConsulta = elements(array('usuario', 'senha'), $this -> input -> post());
			//Carrega o Model dp login
			$this -> load -> model('login_model');
			//Chama função para verificação do usuario e a senha do cliente
			$this -> login_model -> get_login($dadosConsulta);

		} else {
			//Havendo problema de validação do formulario 
			$this -> load -> view('login/login');
			$this -> load -> view('includes/footer');
		}
	}

}
