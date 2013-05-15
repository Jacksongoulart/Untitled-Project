<?php
public class Usuario implements IUsuario{
	
	public static function insere($usuario){

		$sql = "INSERT INTO usuario VALUES(null, '".$evento->getNomeCompleto()."','".$evento->getNomeUsuario()."','".$evento->getSenha()."','".$evento->getDataNascimento()."','".$evento->getSexo()."','".$evento->getEmail()."');"
		$query = mysqli->query($sql);
		

	}

	public function busca($usuario){

		$sql = "SELECT * FROM usuario WHERE "$evento->getIdUsuario()";";
		$query = mysqli->query($sql);

		$row = $query->fetch_array(MYSQLI_BOTH);
		if($row)
			return self::criarObjeto($row);

	}


	public static function cadastra($usuario){
		//se for fazer verificacao... 
		self::insere($usuario);

	}

	private function criarObjeto($row){

		$usuario = new Usuario();
		$usuario->setIdUsuario($row['id_usuario']);
		$usuario->setIdNomeCompleto($row['nome_completo']);
		$usuario->setIdNomeUsuario($row['nome_usuario']);
		$usuario->setIdSenha($row['senha']);
		$usuario->setIdDataNascimento($row['data_nascimento']);
		$usuario->setIdSexo($row['sexo']);
		$usuario->setIdEmail($row['email']);

		return $usuario;

}s



?>
