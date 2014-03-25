<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Sistema extends CI_Controller {

	/*
	 * Construtor da classe
	 */
	public function __construct() {
		parent::__construct();
		//Carrega a a biblioteca de seção
		$this -> load -> library('session');
		//Carrega a helper para url
		$this -> load -> helper('url');

	}

	public function index() {
		//Verifica se o usuario já não está logado no sistema
		if (!$this -> session -> userdata('usuarioLogado')) {
			//Se não estiver logado, acessa o controler de login
			redirect('login');

		} else {
			//Se já estiver logado acesso o menu
			redirect('dashboard');
		}
	}

}
