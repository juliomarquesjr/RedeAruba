<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

$dados_menu = array('titulo' => "Aruba Server :: Servidor de Internet", 'novas_mensagens' => '0', 'titulo_interno' => 'Titulo', 'sub_titulo_interno' => 'Sub-Titulo da página', 'pg_ini' => 'index.php', 'pg_cad_usr' => 'dashboard/cad_user', 'pg_enviar_msg' => 'dashboard/enviar_msg', 'pg_cad_dispositivos' => 'dashboard/cad_dispositivos', 'pg_user_cadastrados' => 'dashboard/rel_usuarios', 'pg_envia_cobranca' => 'dashboard/cobranca', 'pg_sair' => 'login', 'pg_rel_dispositivos' => 'dashboard/rel_dispositivos', 'pg_caixa_entrada' => 'dashboard/caixa_entrada');
class Dashboard extends CI_Controller {

	/*
	 * Contrutor da classe
	 */
	function __construct() {
		global $dados_menu;

		parent::__construct();
		$this -> load -> helper('form');
		$this -> load -> helper('array');
		$this -> load -> helper('url');
		$this -> load -> library('form_validation');

		//Manipulação variaveis de seção
		$this -> load -> library('session');
		//Manipulação de tabelas
		$this -> load -> library('table');

		//Carrega o Model da controler
		$this -> load -> model('dashboard_model');

		//Carrega o numero de mensagens novas
		$numero = $this -> dashboard_model -> get_quantidadeNovasMensagens($this -> session -> userdata('usuarioLogado'));
		if ($numero) {
			$dados_menu['novas_mensagens'] = $numero;
		}

		//$mensagens = $this -> dashboard_model -> mostraMsgMenu($this -> session -> userdata('usuarioLogado'));

	}

	public function index() {
		global $dados_menu;
		$dados_menu['titulo_interno'] = 'Página Inicial';
		$this -> load -> view('includes/reader', $dados_menu);
		$this -> load -> view('includes/menu_navegacao');
		$this -> load -> view('dashboard');
		$this -> load -> view('includes/footer');
	}

	/*
	 * Cadastro de Usuarios
	 */

	public function cad_user($id = NULL) {

		global $dados_menu;
		//Seta o titulo interno da página
		$dados_menu['titulo_interno'] = 'Incluir Usuário';
		//Seta o subtitulo interno da página.
		$dados_menu['sub_titulo_interno'] = '** Cadastro de usuários que utilizam a rede.';

		//Carrega o Reader da página
		$this -> load -> view('includes/reader', $dados_menu);
		//Carrega o menu da página
		$this -> load -> view('includes/menu_navegacao');

		//Regras de validação
		if ($id) {
			$this -> form_validation -> set_rules('nomecompleto', 'Nome do Usuario', 'required|trim');
			$this -> form_validation -> set_rules('email', 'E-mail', 'required|valid_email]');
			$this -> form_validation -> set_rules('apartamento', 'Apartamento', 'required|alpha_numeric');
			$this -> form_validation -> set_rules('username', "Username", 'required|aplha');
			$this -> form_validation -> set_rules('bloco', "Bloco", 'required');
		} else {
			$this -> form_validation -> set_rules('nomecompleto', 'Nome do Usuario', 'required|trim|is_unique[usuarios.nomecompleto]');
			$this -> form_validation -> set_message('is_unique', 'Já existe um cadastro de %s, por favor tente outro.');
			$this -> form_validation -> set_rules('email', 'E-mail', 'required|valid_email|is_unique[usuarios.email]');
			$this -> form_validation -> set_rules('apartamento', 'Apartamento', 'required|alpha_numeric|is_unique[usuarios.apartamento]');
			$this -> form_validation -> set_message('is_unique', 'Já existe um cadastro de %s, por favor tente outro.');
			$this -> form_validation -> set_rules('username', "Username", 'required|aplha|is_unique[usuarios.username]');
			$this -> form_validation -> set_rules('bloco', "Bloco", 'required');
		}

		$this -> form_validation -> set_rules('telefone', 'Telefone', 'required|alpha_numeric|');

		/* Verifica se não há erros na validação */
		if ($this -> form_validation -> run() == FALSE) {

			if ($id) {
				$dados = $this -> dashboard_model -> getClientes($id);
			}
		} else {
			//Cria array com dados do post.
			$dadosBanco = elements(array('nomecompleto', 'email', 'apartamento', 'telefone', 'username', 'senha', 'bloco'), $this -> input -> post());
			//Insere mais uma linha no array do banco. Linha contendo a senha em MD5
			$dadosBanco['senha'] = md5("1234");
			//Chama o Model para inserir no banco, enviando a tabela a ser inserida e a página a ser redirecionada
			$this -> dashboard_model -> do_insert($dadosBanco, 'usuarios', 'dashboard/cad_user');
		}
		//Carrega o Footer da página
		$this -> load -> view('cad_usuario', $dados);
		$this -> load -> view('includes/footer');
	}

	/*
	 * Função para cadastro de dispositivos
	 */

	public function cad_dispositivos() {
		global $dados_menu;

		//Inclui os dados interno da página
		$dados_menu['titulo_interno'] = 'Incluir Dispositovo';
		$dados_menu['sub_titulo_interno'] = '** Cadastro de dispositivos que utilizarão a rede.';

		//Inicializa o Reader da View
		$this -> load -> view('includes/reader', $dados_menu);
		//Inicializa o menu da view
		$this -> load -> view('includes/menu_navegacao');

		//Guarda o array de usuarios vindo do banco
		$dados = $this -> dashboard_model -> get_all('usuarios');
		//Criar um array de usuarios os o array vindo do banco. (Somente para passar por referencia)
		$usuarios = array('usuarios' => $dados);

		$this -> form_validation -> set_rules('nomedispositivo', 'Nome do dispositivo', 'required');
		$this -> form_validation -> set_rules('ip', 'Endereço de IP', 'required|is_unique[dispositivos.ip]');
		$this -> form_validation -> set_message('is_unique', 'Campo %s, já cadastrado no banco.');
		$this -> form_validation -> set_rules('mac', 'Endereço MAC', 'required|is_unique[dispositivos.mac]');
		$this -> form_validation -> set_message('is_unique', 'Campo %s, já cadastrado no banco.');

		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('cad_dispositivos', $usuarios);
		} else {
			$dados = elements(array('usuario', 'nomedispositivo', 'ip', 'mac'), $this -> input -> post());

			$this -> dashboard_model -> do_insert($dados, 'dispositivos', 'dashboard/cad_dispositivos');
		}

		$this -> load -> view('includes/footer');
	}

	public function enviar_msg() {
		global $dados_menu;
		$dados_menu['titulo_interno'] = 'Enviar Mensagem';
		$dados_menu['sub_titulo_interno'] = '** Envie mensagem entre usuarios da rede.';

		$this -> load -> view('includes/reader', $dados_menu);
		$this -> load -> view('includes/menu_navegacao', $dados_menu);

		//Guarda os valores do array vindos do banco
		$dadosBanco = $this -> dashboard_model -> get_all('usuarios');
		$usuarios = array('usuarios' => $dadosBanco);

		//Regras de validação do formulario
		$this -> form_validation -> set_rules('assunto', 'Assunto', 'required');
		$this -> form_validation -> set_rules('msg', 'Mensagem', 'required|trim');

		//Verifica se as validações estão corretas
		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('enviar_msg', $usuarios);
		} else {
			//Guarda em um array os elementos vindo por POST
			$dadosBanco = elements(array('usuario', 'assunto', 'msg', 'remetente'), $this -> input -> post());
			$idUsuario = $this -> session -> userdata('usuarioLogado');

			$dadosBanco['remetente'] = $idUsuario['id'];
			$this -> dashboard_model -> do_insert($dadosBanco, 'mensagem', 'dashboard/enviar_msg');

		}

		$this -> load -> view('includes/footer');
	}

	/**
	 * Função para exibir o email selecionado pelo usuario
	 * Recebendo o id do email
	 */

	public function exibir_mensagem($id) {
		global $dados_menu;
		$dados_menu['titulo_interno'] = 'Exibir Email';
		$dados_menu['sub_titulo_interno'] = '** Visualiza mensagem selecionada.';

		$this -> load -> view('includes/reader', $dados_menu);
		$this -> load -> view('includes/menu_navegacao');
		$this -> load -> view('exibir_email');
		$this -> load -> view('includes/footer');
	}

	/*
	 * Controler de envio de cobrança ao usuarios
	 * */

	public function cobranca() {
		global $dados_menu;

		//Seta o titulo interno da página
		$dados_menu['titulo_interno'] = 'Enviar Cobrança';
		//Seta o menu da página
		$dados_menu['sub_titulo_interno'] = '** Envie cobrança para os clientes da rede';

		//Regras de validação do formulario
		$this -> form_validation -> set_rules('valor', 'Valor cobrado', 'required|numeric');

		$dadosBanco = array('usuarios' => $this -> dashboard_model -> get_all('usuarios'));

		//Inicializa a view
		$this -> load -> view('includes/reader', $dados_menu);
		$this -> load -> view('includes/menu_navegacao');

		/* Verifica se a validação passou */
		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('cobranca', $dadosBanco);
		} else {
			echo passsei;
		}

		$this -> load -> view('includes/footer');
	}

	public function rel_usuarios() {
		global $dados_menu;
		
		//Seta o titulo interno da página
		$dados_menu['titulo_interno'] = 'Relação de Usuários';
		//Seta o menu da página
		$dados_menu['sub_titulo_interno'] = '** Lista de usuarios que utilizam a rede';
		
		//Retorna a consulta com todos os usuarios do banco
		$dadosBanco = array('usuarios' => $this -> dashboard_model -> get_all('usuarios'));

		//Inicializa a view
		$this -> load -> view('includes/reader', $dados_menu);
		$this -> load -> view('includes/menu_navegacao');
		$this -> load -> view('rel_usuarios', $dadosBanco);
		$this -> load -> view('includes/footer');
	}

	public function rel_dispositivos() {
		global $dados_menu;

		//Seta o titulo interno da página
		$dados_menu['titulo_interno'] = 'Relação de Usuários';
		//Seta o menu da página
		$dados_menu['sub_titulo_interno'] = '** Lista de usuários ativos no sistema.';

		$dadosBanco = array('dispositivos' => $this -> dashboard_model -> get_dispositivos());

		//Inicializa a View
		$this -> load -> view('includes/reader', $dados_menu);
		$this -> load -> view('includes/menu_navegacao');
		$this -> load -> view('rel_dispositivos', $dadosBanco);
		$this -> load -> view('includes/footer');

	}

	public function caixa_entrada() {
		global $dados_menu;

		//Seta o titulo interno da página
		$dados_menu['titulo_interno'] = 'Relação de Usuários';
		//Seta o menu da página
		$dados_menu['sub_titulo_interno'] = '** Lista de usuários ativos no sistema.';
		$this -> load -> view('includes/reader', $dados_menu);
		$this -> load -> view('includes/menu_navegacao');

		$dadosBanco = array('emails' => $this -> dashboard_model -> get_caixaEntrada($this -> session -> userdata('usuarioLogado')));

		$this -> load -> view('rel_emails', $dadosBanco);
		$this -> load -> view('includes/footer');

	}

	/**
	 * Função para exibir o email selecionado pelo usuario
	 * Recebe o ID da mensagem.
	 */
	public function abrirEmail($id) {
		global $dados_menu;
		$mensagem = array('mensagem' => NULL);
		$mensagem['mensagem'] = $this -> dashboard_model -> abrirEmail($id);

		$this -> load -> view('includes/reader', $dados_menu);
		$this -> load -> view('includes/menu_navegacao');

		$this -> load -> view('exibir_email', $mensagem);

		$this -> load -> view('includes/footer');
	}

	/**
	 * Função para remover o email selecionado pelo usuario
	 * Recebe o ID do email.
	 */
	public function apagarEmail($id) {
		if ($id) {
			$this -> dashboard_model -> removerEmail($id);
			redirect('dashboard/caixa_entrada');

		}
	}

}
