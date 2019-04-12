<?php
 require '../model/loginModel.php';

 
	if(isset($_POST['btCadastrar'])){
		$login = new LoginModel();
					
	if($login->Login($_POST) == 'ok'){
	header("Location: https://havokschool.com.br/admin/areateacher/view/painel.php"); 
		exit;
	}
   }else{
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
    }
	 
 