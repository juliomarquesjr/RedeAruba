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
    'pg_envia_cobranca' => 'dashboard/cobranca',);

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
    }

    public function index()
    {
        global $dados_menu;
        $dados_menu['titulo_interno'] = 'Página Inicial';
        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);
        $this->load->view('dashboard');
        $this->load->view('includes/footer');
    }
    
    /* Cadastro de Usuarios */
    public function cad_user()
    {
        global $dados_menu;
        $dados_menu['titulo_interno'] = 'Incluir Usuário';
        $dados_menu['sub_titulo_interno'] = '** Cadastro de usuários que utilizam a rede.';
        
        /*Regras de validação do formulario */
        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);
        $this->form_validation->set_rules('nomecompleto', 'Nome do Usuario', 'required|trim]');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('apartamento', 'Apartamento', 'required|alpha_numeric|is_unique[usuarios.apartamento]');
        $this->form_validation->set_message('is_unique', 'Já existe um cadastro para de %s, por favor tente outro.');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required|alpha_numeric|');
        $this->form_validation->set_rules('username', "Username", 'required|aplha|is_unique[usuarios.username]');
        
        /* Verifica se não há erros na validação */
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('cad_usuario');
        } else {
            $dadosBanco = element(array('nomecompleto','email','apartamento', 'telefone', 'username'), $this->input->post());
            $this->load->model('dashboard_model');
            $this->dashboard_model->do_insert($dados);      
        }
        $this->load->view('includes/footer');
    }

    public function cad_dispositivos()
    {
        global $dados_menu;
        $dados_menu['titulo_interno'] = 'Incluir Dispositovo';
        $dados_menu['sub_titulo_interno'] = '** Cadastro de dispositivos que utilizarão a rede.';

        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);
        $this->load->view('cad_dispositivos');
        $this->load->view('includes/footer');
    }

    public function enviar_msg()
    {
        global $dados_menu;
        $dados_menu['titulo_interno'] = 'Enviar Mensagem';
        $dados_menu['sub_titulo_interno'] = '** Envie mensagem entre usuarios da rede.';

        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);
        $this->load->view('enviar_msg');
        $this->load->view('includes/footer');
    }

    public function rel_usuarios()
    {
        global $dados_menu;

        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);
        $this->load->view('enviar_msg');
        $this->load->view('includes/footer');
    }

    public function cobranca()
    {
        global $dados_menu;
        $dados_menu['titulo_interno'] = 'Enviar Cobrança';
        $dados_menu['sub_titulo_interno'] = '** Envie cobrança para os clientes da rede';

        $this->form_validation->set_rules('valor', 'Valor cobrado', 'required|numeric');

        $this->load->view('includes/reader', $dados_menu);
        $this->load->view('includes/menu_navegacao', $dados_menu);

        /* Verifica se a validação passou */
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('cobranca');
        } else {
            echo passsei;
        }

        $this->load->view('includes/footer');
    }

}