<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/conn/conn.php';

class Materiais
{
    
    private $id_turma;
	private $pdf;
    private $videoaulas;
    private $diversos;
  
   
    
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
	
	public function exibeMateriais(){
	try {
    
		$sql = $this->con->conectar()->prepare("SELECT * FROM tb_aluno a inner join turmaAluno t on t.nMatricula = a.nMatricula INNER JOIN materiais_apoio m on m.turma = t.idTurma WHERE a.nMatricula = '" . $_SESSION['UsuarioID'] . "' ");
		$sql->execute();
		 
	    return $sql->fetchAll();
	 
 
	}
	catch (PDOException $e) {
    echo 'erro: ' . $e->getMessage();
	}	
		
	}
}