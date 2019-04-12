<?php 
	require '../model/cadastroAlunoModel.php';

	if(isset($_POST['btCadastrar'])){
		$cam = new CadastroAlunoModel();
					
		if($cam->cadastraAluno($_POST) == 'ok'){
			 include '../../include/salvou.php'; 
		exit;
		}
	}else{
			echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
	}