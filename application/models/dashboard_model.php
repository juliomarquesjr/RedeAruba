<?php

class Dashboard_model extends CI_Model {

	public function do_insert($dados = NULL, $tabela = NULL, $pagina = NULL) {
		if ($dados != NULL) {
			$this -> db -> insert($tabela, $dados);
			$this -> session -> set_flashdata('insereOK', TRUE);
			redirect($pagina);
		}
	}

	/**
	 * Função para buscar todos os valores de uma determinada tabela
	 * Recebe por referencia o nome da tabela
	 */
	public function get_all($tabela) {
		return $this -> db -> get($tabela) -> result_array();
	}

	/**
	 * Função para buscar os dispositivos cadastrados no banco de dados.
	 */
	public function get_dispositivos() {
		$sql = "SELECT d.nomedispositivo, d.ip, d.mac, u.nomecompleto FROM dispositivos d, usuarios u WHERE d.usuario = u.id";
		return $this -> db -> query($sql) -> result_array();
	}

	/**
	 * Função para buscar a caixa de entrada dos emails
	 * Recebe o ID do usuario logado e retorna os dados encontrado no banco.
	 */
	public function get_caixaEntrada($usuarios) {
		$sql = "SELECT u.nomecompleto, m.assunto, DATE_FORMAT(m.data_envio, '%d/%m/%Y') AS data_envio, m.id FROM mensagem m, usuarios u WHERE m.remetente = u.id AND m.removida = 'N' AND m.usuario = '" . $usuarios['id'] . "' ";
		return $this -> db -> query($sql) -> result_array();
	}

	public function get_quantidadeNovasMensagens($usuario) {
		$this -> db -> where('usuario', $usuario['id']);
		$this -> db -> where('nova', 'S');
		$this -> db -> from('mensagem');

		return $this -> db -> count_all_results();
	}

	/*
	 * Função para buscar os clientes do banco de dados.
	 */
	public function getClientes($id) {
		return $this -> db -> get_where('usuarios', array('id' => $id)) -> row_array();
	}

	/**
	 * Função para mostrar as até 3 primeiras mensagens da caixa de entrada
	 * Recebendo por parametro as dados do usuario logado.
	 */
	public function mostraMsgMenu($usuario) {
		$sql = "SELECT u.nomecompleto, m.assunto, DATE_FORMAT(m.data_envio, '%d/%m/%Y') AS data_envio, m.id FROM mensagem m, usuarios u WHERE m.remetente = u.id AND m.removida = 'N' AND m.nova = 'S' AND m.usuario = '" . $usuario['id'] . "'";
		return $this -> db -> query($sql) -> result_array();

	}

	/**
	 * Função para abrir o email selecionado pelo usuario
	 * Recebendo o id do email
	 */
	public function abrirEmail($id) {
		$sql = "UPDATE mensagem SET nova = 'N' WHERE id = " . $id . ";";
		$this -> db -> query($sql);

		$sql = "SELECT u.nomecompleto, m.assunto, DATE_FORMAT(m.data_envio, '%d/%m/%Y') AS data_envio, m.id, m.msg FROM mensagem m, usuarios u WHERE u.id = m.remetente AND m.id = '" . $id . "' ";
		return $this -> db -> query($sql) -> row_array();

	}

	/**
	 * Função para remover mensagens da caixa de entrada de entrada
	 * Recebe o ID da mensagem
	 */
	public function removerEmail($id = NULL) {

		if ($id) {
			$this -> db -> where('id', $id);
			$this -> db -> update('mensagem', array('removida' => 'S', 'nova' => 'N'));
		}
	}

	public function removerUsuario($id = NULL) {
		if ($id) {
			$this -> db -> where(array('id' => $id));
			$this->db->delete('usuarios');
		
		}
	}

	

}
