<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/conn/conn.php';

Class Teacher_registrationModel{

	private $conn;
	private $name;
	private $pass;
	private $email;
	private $rg;
	private $cpf;
	private $area_de_formacao;
	private $minicurriculo;
	private $courses;
	private $data;
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

public function teacher_registration($data){

	try{
		
		$this->name = $data['name']; 
		$this->pass = $data['pass'];		
		$this->email = $data['email'];		
		$this->rg = $data['rg'];
		$this->cpf = $data['cpf'];
		$this->area_de_formacao = $data['areadeformacao'];
		$this->minicurriculo = $data['minicurriculo'];
		$this->courses = $data['course']; 
		$this->class = $data['class']; 
		$this->data = date('Y/m/d');
		date_default_timezone_set('America/Sao_Paulo');
		$this->time = date('H:i:s');
		
		foreach(array_combine($this->courses, $this->class) as $c => $t) {
		
			$sql = "INSERT INTO `courseteacher` (`idcourse`, `idclass`, `cpf`) VALUES (  '".$c."' ,  '".$t."' , :cpf )";
			$insert = $this->con->conectar()->prepare($sql);
			$insert->bindParam(':cpf', $this->cpf);  
			$insert->execute();
		} 
			$sql = "INSERT INTO `tb_teacher`( `name`, `pass`, `email`, `rg`, `cpf`, `area_de_formacao`, `minicurriculo`, `data`, `time` ) VALUES ( :name ,  :pass ,  :email ,  :rg , :cpf , :area_de_formacao , :minicurriculo , :data , :time )";
			$insert = $this->con->conectar()->prepare($sql);  
			
			$insert->bindParam(':name', $this->name);  
			$insert->bindParam(':pass', $this->pass);  
			$insert->bindParam(':email', $this->email);  
			$insert->bindParam(':rg', $this->rg);  
			$insert->bindParam(':cpf', $this->cpf);  
			$insert->bindParam(':area_de_formacao', $this->area_de_formacao);  
			$insert->bindParam(':minicurriculo', $this->minicurriculo);  
			$insert->bindParam(':time', $this->time);  
			$insert->bindParam(':data', $this->data);  
			
			$insert->execute();
			return 'ok';	
	}
	catch (PDOException $e) {
		echo 'erro: ' . $e->getMessage();
	}
	
	}	
}