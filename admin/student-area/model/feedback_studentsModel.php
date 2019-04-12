<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/conn/conn.php';

Class FeedBackAlunoModel{

	private $conn;
	private $curso;
	private $turma;
	private $feedback;
	private $qualidade;
	private $data;
	private $hora;

public function __construct(){
		$this->con = new Conexao();
		}
	public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}
	public function __get($atributo){
			return $this->$atributo;
		}	

public function FeedBackAluno($dados){

	try{
		
		$this->curso = $dados['curso']; 
		$this->turma = $dados['turma'];		
		$this->feedback = $dados['feedback'];
		$this->qualidade = $dados['qualidade'];
		$this->data = date('Y/m/d');
		date_default_timezone_set('America/Sao_Paulo');
		$this->hora = date('H:i:s');
		
		$sql = "INSERT INTO `feedbackAluno`(`nMatricula`, `curso`, `turma`, `feedback`, `qualidade`, `data`, `hora`)  VALUES ('".$_SESSION['UsuarioID']."' ,:curso , :turma , :feedback , :qualidade ,:data , :hora )";
		$insert = $this->con->conectar()->prepare($sql);  
			
			 
		$insert->bindParam(':curso', $this->curso);  
		$insert->bindParam(':turma', $this->turma);  
		$insert->bindParam(':feedback', $this->feedback);  
		$insert->bindParam(':qualidade', $this->qualidade);  
		$insert->bindParam(':hora', $this->hora);  
		$insert->bindParam(':data', $this->data);  
			
		$insert->execute();
		return 'ok';	
	}
	catch (PDOException $e) {
		echo 'erro: ' . $e->getMessage();
	}
	
	}	
}