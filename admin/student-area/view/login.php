<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php' ;
?> 
	  <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>ARÉA DO </span><strong class="text-primary"> ALUNO</strong></div>
             <form action="../controller/loginController.php" method="post"   class="text-left form-validate">
              <div class="form-group-material">
                  <input placeholder="n° Matricula" id="register-username" class="input-material" name="nMatricula"  >
              </div>
              
              <div class="form-group-material">
                 <input  placeholder="Senha" id="register-username" class="input-material"  name="senha"  type="password">
              </div>
               
             <div class="form-group text-center">
                <input   type="submit" value="Entrar" name="btCadastrar" class="btn btn-primary">
				<a href="cadastroAluno.php">Cadastre-se</a>
			  </div>
			  </form> 
          </div>
          
        </div>
      </div>
    </div>

<?php	
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php' ;
?>
