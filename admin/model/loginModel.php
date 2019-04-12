<?php

ob_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/conn/conn.php';

class Login
{
    
    private $id;
    private $name;
    private $user;
    private $senha;
    private $con;
    
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
    
    
    public function Login($dados)
    {
        
        
        try {
            
            $this->name    = $dados['name'];
            $this->user = $dados['user'];
            $this->pass  = $dados['senha'];
            
            // Validação do usuário/passdigitados
            $sql = $this->con->conectar()->prepare("SELECT id, name FROM administradores WHERE (name = '" . $this->user . "') AND (pass= '" . $this->pass. "') ");
            $sql->execute();
            $count = $sql->rowCount();
            $res   = $sql->fetchAll(PDO::FETCH_ASSOC);
            
            if ($count != 1) {
                /*aqui você pode redirecionar para uma determinada página*/
                echo "<script>alert('Login ou passInvalidos!'); document.location.href='../register.php';</script>";
            } else {
                $exibe_res = $res[0];
                
                // Se a sessão não existir, inicia uma
                session_start();
                
                ini_set('default_charset', 'UTF-8');
                // Salva os dados encontrados na sessão
                $_SESSION['userID']   = $exibe_res['id'];
                $_SESSION['username'] = $exibe_res['name'];
                $_SESSION['user']     = $exibe_res['user'];
                
                // Redireciona o visitante
                return 'ok';
                
            }
        }
        catch (PDOException $e) {
            echo 'erro: ' . $e->getMessage();
        }
    }
}