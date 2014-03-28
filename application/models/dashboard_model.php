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
	public function get_caixaEntrada($idLogado) {

		$sql = "SELECT u.nomecompleto, m.assunto, m.data_envio FROM mensagem m, usuarios u WHERE m.usuario = u.id AND m.removida = 'N' AND m.usuario = '" . $idLogado['id'] . "' ";
		return $this -> db -> query($sql) -> result_array();

	}

	/*
	 * Função para buscar os clientes do banco de dados.
	 */
	public function getClientes($id) {
		return $this -> db -> get_where('usuarios', array('id' => $id)) -> row_array();
	}

}
