<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/admin/conn/conn.php';
Class save{

private $conn;

public function __construct(){
		$this->con = new Conexao();
		}
	public function __set($attr, $value){
			$this->$attr = $value;
		}
	public function __get($attr){
			return $this->$attr;
		}	
public function course(){

	try{    
		$sql = "SELECT * FROM `course` ORDER BY `idcourse` DESC LIMIT 1";
		$insert = $this->con->conectar()->prepare($sql);
		$insert->execute();
		return $insert->fetchAll();
		
	}catch (PDOException $e) {
		echo 'erro: ' . $e->getMessage();
	}
	
}
public function class(){

	try{    
		$sql = "SELECT * FROM `class` ORDER BY `idclass` DESC LIMIT 1";
		$insert = $this->con->conectar()->prepare($sql);
		$insert->execute();
		return $insert->fetchAll();
		
	}catch (PDOException $e) {
		echo 'erro: ' . $e->getMessage();
	}
	
}
public function Materiais(){

	try{    
		$sql = "SELECT * FROM `materials_support` ORDER BY `idclass` DESC LIMIT 1";
		$insert = $this->con->conectar()->prepare($sql);
		$insert->execute();
		return $insert->fetchAll();
		
	}catch (PDOException $e) {
		echo 'erro: ' . $e->getMessage();
	}
	
}


}
