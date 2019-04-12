<?php
	
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/conn/conn.php';

class Feedback_studentsModel
{
  
    public function __construct()
    {
        $this->con = new Conexao();
    }
    
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    
    public function __get($atributo)
    {
        return $this->$atributo;
    }
	
	public function feedback_students(){
	
	try {
    
		if($_SESSION['userID'] == '1'){
			$sql = $this->con->conectar()->prepare("	
			SELECT * FROM feedback_student fa 
		INNER JOIN tb_student a on a.nMatricula = fa.nMatricula
		INNER JOIN class t on t.idclass = fa.class
		INNER JOIN course c on c.idcourse = fa.course	 
			");
			$sql->execute();
		}else{
			
			$sql = $this->con->conectar()->prepare("
			SELECT * FROM feedbackstudent fa 
			INNER JOIN tb_student a on a.nMatricula = fa.nMatricula
			INNER JOIN classs t on t.idclass = fa.class
			INNER JOIN course c on c.idcourse = fa.course
			INNER JOIN courseteacher cp on cp.idclass = fa.class
			WHERE cp.cpf = '".$_SESSION['userID']."'
			");
		
			$sql->execute();
		}
		return $sql->fetchAll();
	
		
		}catch (PDOException $e) {
			echo 'erro: ' . $e->getMessage();
		}	
	
	}	
 
}