<?php
 require '../model/loginModel.php';

 
	if(isset($_POST['btCad'])){
		$login = new Login();
					
	if($login->Login($_POST) == 'ok'){
		header("Location: ../view/adcMateriaisApoio.php"); 
		exit;
	}
   }else{
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
    }
	 
 