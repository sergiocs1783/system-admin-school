<?php   
	require_once '../model/feedBackAlunoModel.php' ; 
	
	if(isset($_POST['btCadastrar'])){
		$cpm = new FeedBackAlunoModel();
					
		if($cpm->FeedBackAluno($_POST) == 'ok'){
			include '../../include/salvou.php';
		exit;
		}
	}else{ echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; }