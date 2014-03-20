<?php

class Dashboard_model extends CI_Model
{
    public function do_insert($dados = NULL)
    {
        if ($dados != NULL) {
            $this->db->insert('usuarios', $dados);
            $this->session->set_flashdata('insereOK', TRUE);
            redirect('dashboard/cad_user');
        }
    }

    public function get_all($tabela)
    {
        return $this->db->get($tabela);
    }
}
