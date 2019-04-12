<?php
ob_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/conn/conn.php';
class LoginModel
{
    
 
    private $con;
	private $cpf;
    private $pass;

    
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
    
    
    public function Login($data)
    {
        
        
        try {
            
            $this->cpf    = $data['cpf'];
            $this->pass = $data['pass']; 
             // Validação do user/pass digitados
            $sql = $this->con->conectar()->prepare("SELECT name, cpf, pass FROM tb_teacher WHERE ( cpf = '" . $this->cpf . "') AND (pass = '" . $this->pass . "') ");
            $sql->execute();
            $count = $sql->rowCount();
            $res   = $sql->fetchAll(PDO::FETCH_ASSOC);
            
            if ($count != 1) {
                /*aqui você pode redirecionar para uma determinada página*/
                echo "<script>alert('Login ou pass Invalidos!'); document.location.href='../view/login.php';</script>";
            } else {
				
                $show_res = $res[0];
                
                // Se a sessão não existir, inicia uma
                session_start();
                
                ini_set('default_charset', 'UTF-8');
                // Salva os dados encontrados na sessão
                $_SESSION['userID']   = $show_res['cpf'];
                $_SESSION['userName'] = $show_res['name']; 
                
                // Redireciona o visitante
                return 'ok';
                
            }
        }
        catch (PDOException $e) {
            echo 'erro: ' . $e->getMessage();
        }
    }
}