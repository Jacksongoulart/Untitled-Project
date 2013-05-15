<?php
	class Usuario {
		
		private $nome;
		private $email;
		private $nomeUsuario;
		private $senha;
		private $dataNascimento;
		private $sexo;

		public function setNome($nome) {
			$this->nome = $nome;
		}

		public function getNome() {
			return $this->nome;
		}

		public function setEmail($email) {
			$this->email = $email;
		}

		public function getEmail() {
			return $this->email;
		}

		public function setNomeUsuario($nomeUsuario) {
			$this->nomeUsuario = $nomeUsuario;
		}

		public function getNomeUsuario() {
			return $this->usuario;
		}

		public function setSenha($senha) {
			$this->senha = $senha;
		}

		public function getSenha() {
			return $this->senha;
		}

		public function setDataNascimento($dataNascimento) {
			$this->dataNascimento = $dataNascimento;
		}

		public function getDataNascimento() {
			return $this->dataNascimento;
		}

		public function setSexo($sexo) {
			$this->sexo = $sexo;
		}

		public function getSexo() {
			return $this->sexo;
		}

	}
	
?>