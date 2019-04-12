<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/conn/conn.php';
	
	$enum =  new EnumTurmas();
	$enum->Turmas($_POST['idCurso']);
	
class EnumTurmas
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
	
	public function Turmas(){
	 
	
	try {
    
		 
			$sql = $this->con->conectar()->prepare("SELECT idTurma , nomeTurma FROM turmas WHERE idCurso =  '". $_POST['idCurso']."' ");
			$sql->execute();
		  
			while($row = $sql->fetch(PDO::FETCH_ASSOC)){
				echo  '<option name="turma[]" value="' .$row['idTurma']. '"  >'. $row['nomeTurma'].'</option>';
			}
		
		}catch (PDOException $e) {
			echo 'erro: ' . $e->getMessage();
		}	
	
	}	
 
}