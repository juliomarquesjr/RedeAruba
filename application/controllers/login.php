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

		//Carrega o Model dp login
		$this -> load -> model('login_model');
	}

	public function index() {

		//Regrade de validação do formulario de login
		$this -> form_validation -> set_rules('usuario', 'Nome Usuário', 'required|trim');
		$this -> form_validation -> set_rules('senha', 'Senha', 'required');

		/* Verifica se a validação passou, se não haver problemas */
		if ($this -> form_validation -> run() == TRUE) {
			//Guarda em array os dados do usuario vindos do formulario de login
			$dadosConsulta = elements(array('usuario', 'senha'), $this -> input -> post());

			//Busca usuario e senha no banco;
			$usuario = $this -> login_model -> buscaUsuarioSenha($dadosConsulta);

			if ($usuario) {
				$this -> session -> set_userdata('usuarioLogado', $usuario);
				redirect('dashboard');
			} else {
				//Cria uma seção para proxima pagina informando erro no login
				$this -> session -> set_flashdata('erroLogin', TRUE);
				//Redireciona para o controller login
				redirect('login');
				
			}

		} else {
			//Havendo problema de validação do formulario
			$this -> load -> view('login/login');
		}

		$this -> load -> view('includes/footer');
	}

}
