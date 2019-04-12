<?php   
	require_once '../model/teacher_registrationModel.php' ; 
	
	if(isset($_POST['btCad'])){
		$cpm = new Teacher_registrationModel();
					
		if($cpm->teacher_registration($_POST) == 'ok'){
			//header("Location: https://viahavok.com.br/AreaAluno/painel.php"); 
		exit;
		}
	}else{
			echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
	}