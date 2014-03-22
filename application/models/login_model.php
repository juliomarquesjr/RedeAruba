<?php

class Login_model extends CI_Model{
    
    public function get_login($dados){
        $where = "username = '".$dados['usuario']."' AND senha = '".md5($dados['senha'])."'";
        $this->db->from('usuarios')->where($where);
       
        $resultado = $this->db->get();
		
		
        if($resultado->num_rows()> 0){
            redirect('dashboard');
        }else{
            $this->session->set_flashdata('erroLogin', TRUE);
            redirect('login');
        }
    }
}
