<?php
class Conexao{
    
	private $usuario;
    private $pass;
    private $banco;
    private $servidor;
    private static $pdo;
    
    public function __construct(){
        $this->servidor = "localhost";
        $this->banco = "";
        $this->usuario = "";
        $this->pass = "";
    }
    
    public function conectar(){
        try{
            if(is_null(self::$pdo)){
                self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco . '; charset=utf8' , $this->usuario, $this->pass);
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            }
            return self::$pdo;
        } catch (PDOException $ex) {
			echo $ex->getMessage();
        }
    }
    
}
 