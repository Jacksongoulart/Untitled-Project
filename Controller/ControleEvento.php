<?php

	use '../Model/Evento.php';

	class ControleEvento {

		private $evento;
		
		private static function criarObjeto($opcaoEnd, $endereco, $descricao, $tipoEvento, $corEvento, $horarioInicio, $horarioTermino) {
			$evento = new Evento();
			$evento->setOpcaoEnd($opcaoEnd);
			if($opcaoEnd)
				$evento->setEndereco($endereco);
			$evento->setDescricao($descricao);
			$evento->setTipoEvento($tipoEvento);
			$evento->setCorEvento($corEvento);
			$evento->setHorarioInicio($horarioInicio);
			$evento->setHorarioTermino($horarioTermino);
			return $this->evento;
		}

		public static function agendar($opcaoEnd, $endereco, $descricao, $tipoEvento, $corEvento, $horarioInicio, $horarioTermino) {
			EventoDAO::agendar(self::criarOBjeto($opcaoEnd, $endereco, $descricao, $tipoEvento, $corEvento, $horarioInicio, $horarioTermino));
		}

		public static function buscar($entrada) {
			return EventosDAO::buscar($entrada);
		}

	}
?>