<?php

class Login_model extends CI_Model {

	public function buscaUsuarioSenha($dados) {

		//Regras de validação (WHERE do SQL)
		$this -> db -> where('username', $dados['usuario']);
		$this -> db -> where('senha', md5($dados['senha']));

		//Efetua consulta no banco retornando a primeira linha encontrada
		$usuario = $this -> db -> get('usuarios') -> row_array();

		//Retorna o usuario encontrado.
		return $usuario;

	}

}
