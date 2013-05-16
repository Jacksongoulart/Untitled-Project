<?php

	class VisaoUsuario {
		public static function logar () {
	        ControleUsuario::logar($_POST['username'], $_POST['password']);
	    }

	}

?>