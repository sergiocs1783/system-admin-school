<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/conn/conn.php';

Class Adc_classModel{

private $conn; 
private $idcourse;
private $nomeclass;
 
public function __construct(){
		$this->con = new Conexao();
		}
	public function __set($attr, $value){
			$this->$attr = $value;
		}
	public function __get($attr){
			return $this->$attr;
		}	

public function adcclass($dados){

	try{
 
		$this->idcourse = $dados['course']; 
		$this->nomeclass = $dados['class']; // Evita o sql injection
		  
		$sql = "INSERT INTO `class`(`idcourse`, `nomeclass`) VALUES (:course, :class) ";
		$insert = $this->con->conectar()->prepare($sql);
		$insert->bindParam(':course', $this->idcourse);     
		$insert->bindParam(':class', $this->nomeclass);  
		
		$insert->execute();
			return 'ok';	
	}catch (PDOException $e) {
		echo 'erro: ' . $e->getMessage();
	}
	
}	
}