<?php

include ("../Controller/ControleUsuario.php");


	class ControleUsuario {

		private $usuario;

		private static function criarObjeto($nome, $email, $nomeUsuario, $senha, $dataNascimento, $sexo) {
			$this->usuario = new Usuario();
			$this->usuario->setNome($nome);
			$this->usuario->setEmail($email);
			$this->usuario->setNomeUsuario($nomeUsuario);
			$this->usuario->setSenha($senha);
			$this->usuario->setDataNascimento($dataNascimento);
			$this->usuario->setSexo($sexo);
			return $this->usuario;
		}

		private static function criarObjeto($usuario, $senha) {
			$this->usuario = new Usuario();
			$this->usuario->setNomeUsuario($nomeUsuario);
			$this->usuario->setSenha($senha);
			return $this->usuario;
		}


		public static function cadastrar($nome, $email, $nomeUsuario, $senha, $dataNascimento, $sexo) {
			UsuarioDAO::cadastrar(self::criarObjeto($nome, $email, $nomeUsuario, $senha, $dataNascimento, $sexo));
		}

		public static function logar($usuario, $senha) {
			UsuarioDAO::logar(self::criarObjeto($usuario, $senha));
		}

		public function deslogar() {
			$this->usuario->deslogar();
		}


	}

?>