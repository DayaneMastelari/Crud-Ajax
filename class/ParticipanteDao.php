<?php
require_once("Participante.php");

    class ParticipanteDao {

        private $conexao;

        function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function insereParticipante(Participante $participante){
            $query = "insert into participantes (nome, cpf, email, cidade, cep, telefone, endereco, estado, 
            bairro, nascimento) 
            values ('{$participante->getNome()}', '{$participante->getCpf()}', '{$participante->getEmail()}', 
            '{$participante->getCidade()}', '{$participante->getCep()}', '{$participante->getTelefone()}', 
            '{$participante->getEndereco()}', '{$participante->getEstado()}', '{$participante->getBairro()}', 
            '{$participante->getNascimento()}')";
            
            return mysqli_query($this->conexao, $query);
        }
    
        public function listaParticipante(){
            
            $resultado = mysqli_query($this->conexao, "select * from participantes");
    
            while($participante_array = mysqli_fetch_assoc($resultado)){
    
                $vetor[] = array_map('utf8_encode', $participante_array);
            }    
            echo json_encode($vetor);
        }
    
        function removeParticipante($id) {
            $query = "delete from participantes where id = {$id}";
            return mysqli_query($this->conexao, $query);
        }

        public function buscaParticipante($id) {

            $query = "select * from participantes where id = {$id}";
            $resultado = mysqli_query($this->conexao, $query);
            $participante_buscado = mysqli_fetch_assoc($resultado);
            
                $nome = $participante_buscado['nome'];
                $cpf = $participante_buscado['cpf'];
                $email = $participante_buscado['email'];
                $cidade = $participante_buscado['cidade'];
                $cep = $participante_buscado['cep'];
                $telefone = $participante_buscado['telefone'];
                $endereco = $participante_buscado['endereco'];
                $estado = $participante_buscado['estado'];
                $bairro = $participante_buscado['bairro'];
                $nascimento = $participante_buscado['nascimento'];
    
            $participante = new Participante($nome, $cpf, $email, $cidade, $cep, $telefone, $endereco, $estado, $bairro, $nascimento);
            $participante->setId($participante_buscado['id']);
    
            return $participante;
        }

        function alteraParticipante(Participante $participante) {

            $query = "update participantes set nome = '{$participante->getNome()}', cpf = '{$participante->getCpf()}', email = '{$participante->getEmail()}', 
            cidade = '{$participante->getCidade()}', cep = '{$participante->getCep()}', telefone = '{$participante->getTelefone()}', 
            endereco = '{$participante->getEndereco()}', estado = '{$participante->getEstado()}', bairro = '{$participante->getBairro()}', 
            nascimento = '{$participante->getNascimento()}' where id = '{$participante->getId()}'";
    
            return mysqli_query($this->conexao, $query);
        }
    }

?>