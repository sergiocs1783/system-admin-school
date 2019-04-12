<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/conn/conn.php';

Class Feedback_teacherModel{

	private $conn;
	private $course;
	private $class;
	private $feed;
	private $date;
	private $time;

public function __construct(){
		$this->con = new Conexao();
		}
	public function __set($attr, $value){
			$this->$attr = $value;
		}
	public function __get($attr){
			return $this->$attr;
		}	

public function Feedback_teacher($dados){

	try{
		
		$this->course = $dados['course']; 
		$this->class = $dados['class'];		
		$this->feed = $dados['feed'];
		$this->date = date('Y/m/d');
		date_default_timezone_set('America/Sao_Paulo');
		$this->time = date('H:i:s');
		
		$sql = "INSERT INTO `feedback_teacher`(`cpf`, `course`, `class`, `feedback`, `date`, `time`) VALUES ('".$_SESSION['UsuarioID']."' ,:course , :class , :feed , :date , :time )";
		$insert = $this->con->conectar()->prepare($sql);  
			
			 
		$insert->bindParam(':course', $this->course);  
		$insert->bindParam(':class', $this->class);  
		$insert->bindParam(':feed', $this->feed);  
		$insert->bindParam(':time', $this->time);  
		$insert->bindParam(':date', $this->date);  
			
		$insert->execute();
		return 'ok';	
	}
	catch (PDOException $e) {
		echo 'erro: ' . $e->getMessage();
	}
	
	}	
}