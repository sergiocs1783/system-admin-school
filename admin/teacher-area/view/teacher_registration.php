<?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php' ; ?> 

	 <div class="page login-page col-md-12">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="col-md-12 form-inner">
            <div class="logo text-uppercase"><span>Cadastro do Professor</strong></div>
             <form action="../controller/cadastroProfessorController.php" method="post" class="text-left form-validate">
				<div class="row">
					<div class="col-md-6">
						  <div class="form-group-material">
							  <input placeholder="name" id="register-username" class="input-material" name="nome">
						  </div>
						  
						  <div class="form-group-material">
							 <input placeholder="password" id="register-username" class="input-material" name="senha" type="password">
						  </div>       

						  <div class="form-group-material">
							 <input placeholder="Email" id="register-username" class="input-material" name="email" type="email">
						  </div>	

						  <div class="form-group-material">
							 <input placeholder="RG" id="register-username" class="input-material" name="rg" type="text">
						  </div>					

						  <div class="form-group-material">
							 <input placeholder="CPF" id="register-username" class="input-material" name="cpf" type="text">
						  </div>	

						  <div class="form-group-material">
							 <input placeholder="Área de Formação" id="register-username" class="input-material" name="areadeformacao" type="text">
						  </div>
					</div>
			   
				<div class="pr-3 col-md-6">
					<div class="form-group-material">
						<textarea rows="4" cols="50" placeholder="Suas Especificações" id="register-username" class="input-material" name="minicurriculo" type="text" style="height: 148px;  border-style: none none solid; border-width: medium medium 1px;color: #bec2c7;font-weight: 100;"></textarea> </div>
							
							<h2  class="pl-3" >Cursos que Ministra</h2>
								<div class="mt-4 mb-2 i-checks">
									<input id="checkboxCustom1" type="checkbox" name="curso[]" value="1" class="curso1 form-control-custom"/>
									<label for="checkboxCustom1">Pantheon  Maquete 3D Imersiva </label>
										<div id="campo-escondido-pant" style="margin-left: 18px;">
											<select name="class[]" id="aqui1"  class="ml-4 col-md-5 form-group-material">  </select>
										</div>
								</div>
								
								<div class="mb-2 i-checks">
									<input id="checkboxCustom2" type="checkbox" name="curso[]" value="2" class="curso2 form-control-custom"/>
									<label for="checkboxCustom2">Ignition Houdine FX</label>
										<div id="campo-escondido-ig" style="margin-left: 18px;">
											<select name="class[]" id="aqui2"  class="ml-4 col-md-5 form-group-material">  </select>
										</div>
								</div>
                         
						
								<div class="mb-2 i-checks">
									<input id="checkboxCustom3" type="checkbox" name="curso[]" value="3" class="curso3 form-control-custom"/>
									<label for="checkboxCustom3">Inspire  Motion Design </label>
										<div id="campo-escondido-ins" style="margin-left: 18px;">
											<select id="aqui3" name="class[]" class="ml-4 col-md-5 form-group-material">  </select>
										</div>
								</div>
						
								<div class="mb-2 i-checks">
									<input id="checkboxCustom4" type="checkbox" name="curso[]" value="4" class="curso4 form-control-custom"/>
									<label for="checkboxCustom4">Locomotion Animação de Personagem</label>
										<div id="campo-escondido-loc" style="margin-left: 18px;">
											<select name="class[]" id="aqui4" class="ml-4 col-md-5 form-group-material">  </select>
										</div>
								</div>
						
								<div class="mb-2 i-checks">
									<input id="checkboxCustom5" type="checkbox" name="curso[]" value="5" class="curso5 form-control-custom"/>
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
         </form>
	</div>
</div>
</div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php' ; ?>