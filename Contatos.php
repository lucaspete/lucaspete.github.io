<?php

    class Contatos extends CI_Controller{

        public function index(){
            $this->load->model('ContatosModel');
            $dados = array(
                "titulo" => "Cadastro de Contatos",
                "pagina" => "contatos/index.php",
                "tabela" => $this->ContatosModel->SelecionaTodos()             
            );

            $this->load->view("index", $dados);
        }
    
        public function novo(){
            $dados = array(
                "titulo"=>"Formulario de Cadastro",
                "pagina"=>"contatos/novo.php"
            );

            $this->load->view('index',$dados);
        }

        public function salvar(){
            $this->load->model('ContatosModel');

            $nome= $this->input->post('nome');
            $telefone= $this->input->post('telefone');
            $email= $this->input->post('email');
            
            $tabela = array(
                'nome'=>$nome,
                'telefone'=>$telefone,
                'email'=>$email
            );

            $this->ContatosModel->incluir($tabela);

            redirect('contatos');
        }

        public function alterar($codigo){
            $this->load->model('ContatosModel');
            $where = array('id' =>$codigo);
            $resultado = $this->ContatosModel->Selecionar($where);
            $dados = array(
                'titulo'=>'Alteração do Contato,',
                'pagina'=>'contatos/alterar.php',
                'tabela'=>$resultado
            );

            $this->load->view('index',$dados);
        }

        public function SalvarAlteracao(){
            $id = $this->input->post('id');
            $nome = $this->input->post('nome');
            $telefone = $this->input->post('telefone');
            $email = $this->input->post('email');

            $dados = array(
                'nome'=>$nome,
                'telefone'=>$telefone,
                'email'=>$email
            );

            $where = array(
                'id'=>$id
            );

            $this->load->model('ContatosModel');
            $this->ContatosModel->SalvarAlteracao($where, $dados);
            redirect('contatos');
        }

        public function excluir($codigo){
            $this->load->model('ContatosModel');
            $where = array ('id'=>$codigo);
            $this->ContatosModel->excluir($where);
            redirect('contatos');
        }
    }
?>