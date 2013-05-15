<?php
	class Evento {
		
		private $opcaoEnd;
		private $endereco;
		private $descricao;
		private $tipoEvento;
		private $corEvento;
		private $horarioInicio;
		private $horarioTermino;

		public function setOpcaoEnd($opcaoEnd) {
			$this->opcaoEnd = $opcaoEnd;
		}

		public function getOpcaoEnd() {
			return $this->opcaoEnd
;		}

		public function setEndereco($endereco) {
			$this->endereco = $endereco;
		}

		public function getEndereco() {
			return $this->endereco;
		}

		public function setDescricao($descricao) {
			$this->usuario = $usuario;
		}

		public function getDescricao() {
			return $this->usuario;
		}

		public function setTipoEvento($tipoEvento) {
			$this->tipoEvento = $tipoEvento;
		}

		public function getTipoEvento() {
			return $this->tipoEvento;
		}

		public function setCorEvento($corEvento) {
			$this->corEvento = $corEvento;
		}

		public function getCorEvento() {
			return $this->corEvento;
		}

		public function setHorarioInicio($horarioTermino) {
			$this->horarioInicio = $horarioInicio;
		}

		public function getHorarioInicio() {
			return $this->horarioInicio;
		}

		public function setHorarioTermino($horarioTermino) {
			$this->horarioTermino = $horarioTermino;
		}

		public function getHorarioTermino() {
			return $this->horarioTermino;
		}
	}
	
?>