<?php

	class Participante{
		
		private $id;
		private $nome;
		private $cpf;
		private $email;
		private $cidade;
		private $cep;
		private $telefone;
		private $endereco;
		private $estado;
		private $bairro;				
		private $nascimento;


		function __construct($nome, $cpf, $email, $cidade, $cep, $telefone, $endereco, $estado, $bairro, $nascimento){
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->email = $email;			
			$this->cidade = $cidade;
			$this->cep = $cep;
			$this->telefone = $telefone;
			$this->endereco = $endereco;
			$this->estado = $estado;
			$this->bairro = $bairro;						
			$this->nascimento = $nascimento;			
			
		}

		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function getNome() {
			return $this->nome;
		}
	
		public function getEmail() {
			return $this->email;
		}
	
		public function getCpf() {
			return $this->cpf;
		}
	
		public function getEstado() {
			return $this->estado;
		}
	
		public function getCidade() {
			return $this->cidade;
		}
	
		public function getBairro() {
			return $this->bairro;
		}
	
		public function getEndereco() {
			return $this->endereco;
		}
	
		public function getTelefone() {
			return $this->telefone;
		}
	
		public function getNascimento() {
			return $this->nascimento;
		}
	
		public function getCep() {
			return $this->cep;
		}
		
	}

	


	

?>