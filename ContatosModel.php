<?php

    class ContatosModel extends CI_Model{
        

        public function SelecionaTodos(){
            $ret = $this->db->get('contatos',100);
            return $ret->result();
        }

        public function Incluir($tabela){
            
            $this->db->insert('contatos',$tabela);

            return;
        }

        public function Selecionar($where){
           $retorno = $this->db->get_where('contatos',$where);
           return $retorno->result();
        }

        public function SalvarAlteracao($where,$dados){
            $this->db->update('contatos',$dados,$where);
        }

        public function excluir($where){
            $this->db->delete('contatos',$where);
        }
    }
?>