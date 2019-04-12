<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/conn/conn.php';

class MaterialsAll
{
    
    private $idclass;
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
	
	public function show_materialsAll(){
	try {
    
		$sql = $this->con->conectar()->prepare
		("SELECT * FROM materials_support");
		$sql->execute();
		 
	    return $sql->fetchAll();
	 
 
	}
	catch (PDOException $e) {
    echo 'erro: ' . $e->getMessage();
	}	
		
	}
}