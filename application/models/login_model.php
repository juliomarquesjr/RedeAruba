<?php

class Login_model extends CI_Model{
    
    public function get_login($dados){
        
        $where = "username = '".$dados['usuario']."' AND senha = '".md5($dados['senha'])."'";
        $this->db->from('usuarios')->where($where);
       
        $resultado = $this->db->get();
        print_r($resultado);
        
    }
    
}
