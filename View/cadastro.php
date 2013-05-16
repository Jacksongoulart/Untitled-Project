<?php

	class Cadastro {

		public function trataDados(){
			ControleUsuario::cadastrar($_POST['user_name'], $_POST['user_email'] , $_POST['user_username'], $_POST['pwd'], $_POST['data_nascimento'], $_POST['gender']);

	}

 ?>
