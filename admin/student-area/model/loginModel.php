<?php

ob_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/conn/conn.php';

class LoginModel
{
    
 
    private $con;
	private $nMatricula;
    private $senha;

    
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
    
    
    public function Login($dados)
    {
        
        
        try {
            
            $this->nMatricula    = $dados['nMatricula'];
            $this->senha = $dados['senha']; 
            
            // Validação do usuário/senha digitados
            $sql = $this->con->conectar()->prepare("SELECT nome, nMatricula, senha FROM tb_aluno WHERE (nMatricula = '" . $this->nMatricula . "') AND (senha = '" . $this->senha . "') ");
            $sql->execute();
            $count = $sql->rowCount();
            $res   = $sql->fetchAll(PDO::FETCH_ASSOC);
            
            if ($count != 1) {
                /*aqui você pode redirecionar para uma determinada página*/
                echo "<script>alert('Login ou Senha Invalidos!'); document.location.href='https://havokschool.com.br/admin/areaaluno/view/login.php';</script>";
            } else {
                $exibe_res = $res[0];
                
                // Se a sessão não existir, inicia uma
                session_start();
                
                ini_set('default_charset', 'UTF-8');
                // Salva os dados encontrados na sessão
                $_SESSION['UsuarioID']   = $exibe_res['nMatricula'];
                $_SESSION['UsuarioNome'] = $exibe_res['nome']; 
                
                // Redireciona o visitante
                return 'ok';
                
            }
        }
        catch (PDOException $e) {
            echo 'erro: ' . $e->getMessage();
        }
    }
}