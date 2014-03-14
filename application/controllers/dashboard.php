<?php

$dados_menu = array(
    'titulo' => "Aruba Server :: Servidor de Internet",
    'titulo_interno' => 'Titulo',
    'sub_titulo_interno' => 'Sub-Titulo da página',
    'pg_ini' => 'index.php',
    'pg_cad_usr' => 'dashboard/cad_user',
    'pg_enviar_msg' => 'dashboard/enviar_msg',
    'pg_cad_dispositivos' => 'dashboard/cad_dispositivos',
    'pg_user_cadastrados' => 'dashboard/rel_usuarios',
    'pg_envia_cobranca' => 'dashboard/envia_cobranca',);

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        global $dados_menu;
        $dados_menu['titulo_interno'] = 'Página Inicial';
        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);
        $this->load->view('dashboard');
        $this->load->view('includes/footer');
    }

    public function cad_user() {
        global $dados_menu;
        $dados_menu['titulo_interno'] = 'Incluir Usuário';
        $dados_menu['sub_titulo_interno'] = '** Cadastro de usuários que utilizam a rede.';

        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);
        $this->load->view('cad_usuario');
        $this->load->view('includes/footer');
    }

    public function cad_dispositivos() {
        global $dados_menu;
        $dados_menu['titulo_interno'] = 'Incluir Dispositovo';
        $dados_menu['sub_titulo_interno'] = '** Cadastro de dispositivos que utilizarão a rede.';

        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);
        $this->load->view('cad_dispositivos');
        $this->load->view('includes/footer');
    }

    public function enviar_msg() {
        global $dados_menu;
        $dados_menu['titulo_interno'] = 'Enviar Mensagem';
        $dados_menu['sub_titulo_interno'] = '** Envie mensagem entre usuarios da rede.';

        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);
        $this->load->view('enviar_msg');
        $this->load->view('includes/footer');
    }

    public function rel_usuarios() {
        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);
        $this->load->view('enviar_msg');
        $this->load->view('includes/footer');
    }

    public function envia_cobranca() {
        $this->form_validation->set_rules('valor', 'Aqui fica mensagem de erro', 'required|');
        
        global $dados_menu;
        $dados_menu['titulo_interno'] = 'Enviar Cobrança';
        $dados_menu['sub_titulo_interno'] = '** Envie cobrança para os clientes da rede';

        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);
        $this->load->view('cobranca');
        $this->load->view('includes/footer');
    }

}
