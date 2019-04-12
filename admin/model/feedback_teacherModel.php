<?php
	
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/conn/conn.php';

class Feedback_teacherModel
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
	
	public function feedback_teacher(){
	
	try {
    
		if($_SESSION['userID'] == '1'){
		$sql = $this->con->conectar()->prepare("
                    SELECT * FROM feedback_teacher fp 
                    INNER JOIN tb_teacher tp on tp.cpf = fp.cpf 
                    INNER JOIN class t on t.idclass = fp.class 
                    INNER JOIN course c on c.idcourse = fp.course 
                ");
			$sql->execute();
		} 
		return $sql->fetchAll();
	
		
		}catch (PDOException $e) {
			echo 'erro: ' . $e->getMessage();
		}	
	
	}	
 
}