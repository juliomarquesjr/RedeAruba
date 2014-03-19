<?php

class Dashboard_model extends CI_Model
{
    public function do_insert($dados = NULL){
        
        if($dados != NULL){
          $this->db->insert('usuarios', $dados);  
        }
    }
}
