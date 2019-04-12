<?php   
	require_once '../model/feedback_teacherModel.php' ; 
	
	if(isset($_POST['btCad'])){
		$cpm = new FeedBack_teacherModel();
					
		if($cpm->Feedback_teacher($_POST) == 'ok'){
			include '../../include/save.php';
		exit;
		}
	}else{ echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; }