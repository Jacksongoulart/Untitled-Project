<?php

// require('IEvento.php');


class EventosDAO implements IEvento {


		public static function insere($evento){

			$sql = "INSERT INTO evento 
					VALUES (null,".$evento->getIdUsuario().",".$evento->getOpcaoEnd().",
							'".$evento->getDescricao()."' , '".$evento->getTipoEvento()."' ,
							'".$evento->getCorEvento()."' , '".$evento->getHorarioTermino."' ,
							'".$evento->getHorarioInicio."');";
			
			$query = mysql_query($sql);

			$sql = "INSERT INTO enderecoevento 
					VALUES (null,SELECT LAST_INSERT_ID();, '".$evento->getDescricao()."' , 
							'".$evento->getTipoEvento()."',	'".$evento->getCorEvento()."' ,
							'".$evento->getHorarioTermino."', '".$evento->getHorarioInicio."');";
			
			$query = mysql_query($sql);


		}

		public static function atualiza($evento){

			$sql = "UPDATE enderecoevento
					SET id_evento = ".$evento->getIdEvento().",
						rua= '".$evento->getRua()."' ,
						numero= '".$evento->getNumero()."' ,
						complemento = '".$eventoComplemento()."' ,
						bairro= '".$evento->getBairro()."' ,
						cidade= '".$evento->getCidade()."' ,
						estado= '".$evento->getEstado()."';";
			$query = mysql_query($sql);


			$sql = "UPDATE evento
					SET id_usuario=".$evento->getId().",
					descricao= '".$evento->getDescricao()."', 
					tipo_evento= '".$evento->getTipoEvento()."',
					cor_evento= '".$evento->getCorEvento()."',
					horario_termino= '".$evento->getHorarioTermino()."',
					horario_inicio= '".$evento->getHorarioInicio()."';"; 

			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);

		}

		public static function busca($evento){

			//procura esta sendo feita apenas por tipo de evento. 
			$sql = "SELECT * FROM evento WHERE '".$evento->getTipoEvento()."';";


			$query = mysql_query($sql);

			$row = mysql_fetch_array($query);

			if($row)
				return self::criarObjeto($row);


		}

		public static function deleta($evento){

			$sql = "DELETE FROM evento WHERE id_evento =".$evento->getIdEvento().";";

			$query = mysql_query($sql);

			$row = mysql_fetch_array($query);

			if($row)
				return self::criarObejto($row);

		}


		private function criarObjeto($row){
			$evento = new Evento();
			$evento->setIdEvento($row['id_evento']);
			$evento->setIdUsuario($row['id_usuario']);
			$evento->setDescricao($row['descricao']);
			$evento->setTipoEvento($row['tipo_evento']);
			$evento->setCorEvento($row['cor_evento']);
			$evento->setHorarioInicio($row['horario_inicio']);
			$evento->setHorarioTermino($row['horario_termino']);

			//setar os do enderecoevento tbm 
			$evento->setIdEndereco($row['id_endereco']);
			$evento->setRua($row['rua']);
			$evento->setNumero($row['numero']);
			$evento->setComplemento($row['complemento']);
			$evento->setBairro($row['bairro']);
			$evento->setCidade($row['cidade']);
			$evento->setEstado($row['estado']);	

			return $evento;
	}



}
?>