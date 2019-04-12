<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/conn/conn.php';

class Materials
{
    
    private $id_class;
	private $pdf;
    private $videoaulas;
    private $diversos;
  
   
    
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
	
	public function exibematerials(){
	try {
    
		$sql = $this->con->conectar()->prepare
		("SELECT * FROM tb_teacher tp INNER JOIN courseteacher cp on cp.cpf = tp.cpf INNER JOIN materials_apoio m on m.class = cp.idclass WHERE cp.cpf = '".$_SESSION['userID']."'");
		$sql->execute();
		 
	    return $sql->fetchAll();
	 
 
	}
	catch (PDOException $e) {
    echo 'erro: ' . $e->getMessage();
	}	
		
	}
}