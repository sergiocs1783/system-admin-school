<?php
 require '../model/adc_classModel.php';

 
	if(isset($_POST['btCad'])){
		$adc_classModel = new adc_classModel();
					
	if($adc_classModel->adc_class($_POST) == 'ok'){
		include '../include/save.php'; 
		exit;
	}
   }else{
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
    }
	 
 