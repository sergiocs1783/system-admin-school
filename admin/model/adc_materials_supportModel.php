<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/conn/conn.php';

Class adcMateriaisApoioModel{

private $conn; 
private $course;
private $class;
private $descricao;
private $conteudo;
 
public function __construct(){
		$this->con = new Conexao();
		}
	public function __set($attr, $value){
			$this->$attr = $value;
		}
	public function __get($attr){
			return $this->$attr;
		}	

public function adcMateriaisApoio($dados){

	try{
 
		$this->course = $dados['course']; 
		$this->class = $dados['class']; // Evita o sql injection
		$this->descricao = $dados['descricao']; // Evita o sql injection
		 
		$images=$_FILES['conteudo']['name'];
        $tmp_dir=$_FILES['conteudo']['tmp_name'];
        $imageSize=$_FILES['conteudo']['size'];
 
        $upload_dir='../model/uploads/';
        $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
        $conteudo=rand(1000, 1000000).".".$imgExt;
 
        move_uploaded_file($tmp_dir, $upload_dir.$conteudo);

		$sql = "INSERT INTO materials_support (course, class, descricao, conteudo)  VALUES (:course,:class, :descricao, '".$conteudo."')";
		$insert = $this->con->conectar()->prepare($sql);
		$insert->bindParam(':course', $this->course);     
		$insert->bindParam(':class', $this->class);  
		$insert->bindParam(':descricao', $this->descricao);  
   
			$insert->execute();
			return 'ok';	
	}
	catch (PDOException $e) {
		echo 'erro: ' . $e->getMessage();
	}
	
}	
}