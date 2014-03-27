<?php

class Dashboard_model extends CI_Model
{
    public function do_insert($dados = NULL, $tabela = NULL, $pagina = NULL)
    {
        if ($dados != NULL) {
            $this->db->insert($tabela, $dados);
            $this->session->set_flashdata('insereOK', TRUE);
            redirect($pagina);
        }
    }

    public function get_all($tabela)
    {
        return $this->db->get($tabela)->result_array();
    }
	
	public function get_dispositivos(){
		$sql = "SELECT d.nomedispositivo, d.ip, d.mac, u.nomecompleto FROM dispositivos d, usuarios u WHERE d.usuario = u.id";
		return $this->db->query($sql)->result_array();
	}
	
	public function get_caixaEntrada(){
		$sql = "SELECT d.nomedispositivo, d.ip, d.mac, u.nomecompleto FROM dispositivos d, usuarios u WHERE d.usuario = u.id";
		return $this->db->query($sql)->result_array();
	}
    
    public function getClientes($id){
        
        return $this->db->get_where('usuarios', array('id' => $id))->row_array();
        
    }
    
}
