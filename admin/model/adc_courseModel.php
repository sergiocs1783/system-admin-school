<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/admin/conn/conn.php';
Class Adc_courseModel{

private $conn; 
private $idcourse;
 
public function __construct(){
		$this->con = new Conexao();
		}
	public function __set($attr, $value){
			$this->$attr = $value;
		}
	public function __get($attr){
			return $this->$attr;
		}	

public function adccourse($dados){

	try{
		$this->nomecourse = $dados['nomecourse'];    
		$sql = "INSERT INTO `course`(`nomecourse`) VALUES (:nomecourse) ";
		$insert = $this->con->conectar()->prepare($sql);
		$insert->bindParam(':nomecourse', $this->nomecourse);  
		
		$insert->execute();
			return 'ok';	
	}catch (PDOException $e) {
		echo 'erro: ' . $e->getMessage();
	}
	

}	

public function todoscourse(){

	try{    
		$sql = "SELECT * FROM course";
		$insert = $this->con->conectar()->prepare($sql);
		$insert->execute();
		return $insert->fetchAll();
		
	}catch (PDOException $e) {
		echo 'erro: ' . $e->getMessage();
	}
	
}


}
