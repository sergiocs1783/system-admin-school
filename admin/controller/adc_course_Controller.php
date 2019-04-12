<?php
 require '../model/adc_courseModel.php';

 
	if(isset($_POST['btCad'])){
		$adc_courseModel = new Adc_courseModel();
					
	if($adc_courseModel->adc_course($_POST) == 'ok'){
			include '../include/save.php'; 
		exit;
	}
   }else{
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
    }
	 
 