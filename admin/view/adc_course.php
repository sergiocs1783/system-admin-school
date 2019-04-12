<?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php' ; 
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/nav-bar-adm.php' ; ?>

<div class="page">
  <section class="dashboard-header section-padding">
    <div class="container-fluid">
      <div class="row d-flex align-items-md-stretch">
        <!-- To Do List-->
        <div class="col-lg-12 col-md-12">
          <div class="card to-do">
            <h1 class="text-left">Insira uma novo curso</h1>
            <form  action="../controller/adc_courseController.php?save=course"  method="post"  class="text-left form-validate">
              <div class="col-md-12">
                <div class="row">
					
					<input placeholder="Nome do Curso Ex: Metamorph" class="input-material" name="namecourse" type="text">	
					
					<div class="col-md-12 form-group text-left">
						<button type="submit" class="mt-4 btn btn-primary" name="btCad">Salvar</button> 
					</div>
			</form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php' ; ?>

