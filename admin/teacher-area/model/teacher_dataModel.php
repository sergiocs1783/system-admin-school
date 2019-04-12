<?php

	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/conn/conn.php';

class dateteacher
{
  
    public function __construct()
    {
        $this->con = new Conexao();
    }
    
    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
    
    public function __get($attr)
    {
        return $this->$attr;
    }
	
	public function dadosteacher(){
	
	try {
    
		if($_SESSION['userID'] == '1'){
			$sql = $this->con->conectar()->prepare("SELECT * FROM tb_teacher");
			$sql->execute();
		}else{
			$sql = $this->con->conectar()->prepare("SELECT * FROM tb_teacher WHERE cpf = '".$_SESSION['userID']."' ");
			$sql->execute();
		}
		return $sql->fetchAll();
	
		
		}catch (PDOException $e) {
			echo 'erro: ' . $e->getMessage();
		}	
	
	}	
	
	public function coursesteacher(){
	
	try {
    
		if($_SESSION['userID'] == '1'){
			$sql = $this->con->conectar()->prepare("SELECT * FROM tb_teacher");
			$sql->execute();
		}else{
			$sql = $this->con->conectar()->prepare("SELECT * FROM tb_teacher a INNER JOIN courseteacher t on t.cpf = a.cpf  INNER JOIN course m on m.idcourse = t.idcourse WHERE a.cpf = '".$_SESSION['userID']."' ");
			$sql->execute();
		}
		return $sql->fetchAll();
	
		
		}catch (PDOException $e) {
			echo 'erro: ' . $e->getMessage();
		}	
	
	}
}