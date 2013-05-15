<?php
 	

class Conexao{

	private static $DSN = 'mysql:dbname=treinamento; host=localhost';
	private static $USERNAME = 'dba';
	private static $PASSWORD = 'dba';
	private static $instance = null;
	private $con = null;

	private function __construct() {
        $this->con = new PDO(self::$DSN, self::$USERNAME, self::$PASSWORD);
    }


	public static getInstancia(){
		if($instance==null)
				return new Conexao();
		else
				return $instance;
	}


	public static getConexao(){
		return $con;

	}
}
?>