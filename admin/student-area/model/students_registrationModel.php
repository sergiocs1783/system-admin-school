<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/conn/conn.php';

Class CadastroAlunoModel{

	private $conn;
	private $nMatricula;
	private $nome;
	private $senha;
	private $email;
	private $turma;
	private $cursos;
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

public function cadastraAluno($dados){

	try{
		
		$this->nMatricula = $dados['nMatricula'];
		$this->nome = $dados['nome']; 
		$this->senha = $dados['senha']; 
		$this->email = $dados['email']; 
		$this->turma = $dados['turma']; 
		$this->cursos = $dados['curso']; 
		$this->data = date('Y/m/d');
		date_default_timezone_set('America/Sao_Paulo');
		$this->hora = date('H:i:s');
		
		foreach(array_combine($this->cursos, $this->turma) as $c => $t) {
		
			$sql = "INSERT INTO `turmaAluno`(`idTurma`, `nMatricula`, `idCurso`) VALUES ('".$t."' , :nMatricula, '".$c."')";
			$insert = $this->con->conectar()->prepare($sql);
			$insert->bindParam(':nMatricula', $this->nMatricula);  
			$insert->execute();
		}
			$sql = "INSERT INTO tb_aluno (nMatricula, nome, email, senha , hora, data)  VALUES (:nMatricula,:nome, :email, :senha,  :hora, :data)";
			$insert = $this->con->conectar()->prepare($sql);
			$insert->bindParam(':nMatricula', $this->nMatricula);  
			$insert->bindParam(':nome', $this->nome);  
			$insert->bindParam(':email', $this->email);  
			$insert->bindParam(':senha', $this->senha);   
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