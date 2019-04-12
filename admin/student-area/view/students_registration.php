<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php' ;
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/student_area/enum/enumclasss.php';
?>  

<style>
	select.form-group-material {
	border-top: none;
	border-left: none;
	border-radius: ;
	border-right: navajowhite;
	border-bottom: 1px solid #dedede;
	padding: 0;
	margin-top: 11px;
	}
</style>

	 <div class="page login-page col-md-12">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="col-md-12 form-inner">
            <div class="logo text-uppercase"><span>Cadastro do Aluno</strong></div>
             <form action="../controller/cadastroAlunoController.php?salvo=cad-aluno" method="post" class="text-left form-validate">
            <div class="row">
				<div class="col-md-6">
					  <div class="form-group-material">
						  <input placeholder="Nome" id="register-username" class="input-material" name="name">
					  </div>
					  
					  <div class="form-group-material">
						 <input placeholder="pass" id="register-username" class="input-material" name="pass" type="password">
					  </div>       

					  <div class="form-group-material">
						 <input placeholder="Email" id="register-username" class="input-material" name="email" type="email">
					  </div>	

					  <div class="form-group-material">
						 <input placeholder="N° Matricula" id="register-username" class="input-material" name="nMatricula" type="text">
					  </div>	
				</div>
			  
				<div class="col-md-6">
				
                        <div class="mt-4 mb-2 i-checks">
                          <input id="checkboxCustom1" type="checkbox" name="course[]" value="1" class="course1 form-control-custom">
                          <label for="checkboxCustom1">Pantheon  Maquete 3D Imersiva </label>
														 
						<div id="campo-escondido-pant" style="margin-left: 18px;">
								<select name="class[]" id="aqui1"  class="ml-4 col-md-5 form-group-material">  </select>
						</div>
						
						</div>
                        
						<div class="mb-2 i-checks">
                          <input id="checkboxCustom2" type="checkbox" name="course[]" value="2" class="course2 form-control-custom">
                          <label for="checkboxCustom2">Ignition Houdine FX</label>
							 
								 
						<div id="campo-escondido-ig" style="margin-left: 18px;">
								<select name="class[]" id="aqui2"  class="ml-4 col-md-5 form-group-material">  </select>
						</div>
							
						  </div>
                         
						
                        <div class="mb-2 i-checks">
                          <input id="checkboxCustom3" type="checkbox" name="course[]" value="3" class="course3 form-control-custom">
                          <label for="checkboxCustom3">Inspire  Motion Design </label>
						  	<div id="campo-escondido-ins" style="margin-left: 18px;">
								<select id="aqui3" name="class[]" class="ml-4 col-md-5 form-group-material">  </select>
						</div>
                        </div>
						
                        <div class="mb-2 i-checks">
                          <input id="checkboxCustom4" type="checkbox" name="course[]" value="4" class="course4 form-control-custom">
                          <label for="checkboxCustom4">Locomotion Animação de Personagem</label>
							<div id="campo-escondido-loc" style="margin-left: 18px;">
								<select name="class[]" id="aqui4" class="ml-4 col-md-5 form-group-material">  </select>
						</div>
                        </div>
						
                        <div class="mb-2 i-checks">
                          <input id="checkboxCustom5" type="checkbox" name="course[]" value="5" class="course5 form-control-custom">
                          <label for="checkboxCustom5">Metamorph Modelagem 3D </label>
						  	<div id="campo-escondido-met" style="margin-left: 18px;">
								<select name="class[]" id="aqui5" class="ml-4 col-md-5 form-group-material">  </select>
						</div>
                        </div>
               
               </div>
            </div>   
				 <div class="form-group text-center">
					<input type="submit" value="Cadastrar" name="btCadastrar" class="btn btn-primary">
				  </div>
              </form></div>
			   
          </div>
          
        </div>
      </div>
<?php	
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php' ;
?>
