<?php
 require '../model/adcMateriaisApoioModel.php';

 
	if(isset($_POST['btCad'])){
		$adc_materials_support = new MaterialsAll();
					
	if($adc_materials_support->adc_materials_support($_POST) == 'ok'){
		include'../include/save.php';
		exit;
	}
   }else{
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
    }
	 
 