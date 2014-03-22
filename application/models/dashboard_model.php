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
}
