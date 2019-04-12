<?php

	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/conn/conn.php';

class DadosAlunoModel
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
	
	public function dadosAluno(){
	
	try {
    
		if($_SESSION['UsuarioID'] == '1'){
			$sql = $this->con->conectar()->prepare("SELECT * FROM tb_aluno");
			$sql->execute();
		}else{
			$sql = $this->con->conectar()->prepare("SELECT * FROM tb_aluno WHERE nMatricula = '".$_SESSION['UsuarioID']."' ");
			$sql->execute();
		}
		return $sql->fetchAll();
	
		
		}catch (PDOException $e) {
			echo 'erro: ' . $e->getMessage();
		}	
	
	}	
	
	public function cursosAluno(){
	
	try {
    
		if($_SESSION['UsuarioID'] == '1'){
			$sql = $this->con->conectar()->prepare("SELECT * FROM tb_aluno");
			$sql->execute();
		}else{
			$sql = $this->con->conectar()->prepare("SELECT * FROM tb_aluno a INNER JOIN turmaAluno t on t.nMatricula = a.nMatricula INNER JOIN curso m on m.idCurso = t.idCurso INNER JOIN turmas tu on tu.idTurma = t.idTurma WHERE a.nMatricula = '".$_SESSION['UsuarioID']."' ");
			$sql->execute();
		}
		return $sql->fetchAll();
	
		
		}catch (PDOException $e) {
			echo 'erro: ' . $e->getMessage();
		}	
	
	}
}