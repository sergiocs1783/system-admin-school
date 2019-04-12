<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/admin/nav-bar-adm.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/admin/model/adc_courseModel.php';
?>

<div class="page">
  <section class="dashboard-header section-padding">
    <div class="container-fluid">
      <div class="row d-flex align-items-md-stretch">
        <!-- To Do List-->
        <div class="col-lg-12 col-md-12">
          <div class="card to-do">
            <h1 class="text-left">Insira uma nova class</h1>
            <form  action="../controller/adc_classController.php?salvo=class"  method="post" enctype="multipart/form-data" class="text-left form-validate">
              <div class="col-md-12">
                     <div class="row">
				
					<?php $course = new adc_classModel(); foreach($course->todoscourse() as $courses): ?>
						<div class="mr-3 mb-2 i-checks">
							<input id="checkboxCustom<?=$courses['idcourse']; ?>" type="radio" name="course" value="<?=$courses['idcourse']; ?>" class="course<?=$courses['idcourse']; ?> form-control-custom">
							<label for="checkboxCustom<?=$courses['idcourse']; ?>"><?=$courses['nomecourse']; ?></label>
						</div>
						
						<div id="input-hidden-<?=$courses['idcourse']; ?>" style="margin-left: 18px;">
							 <input type="text" name="class" value="<?=$courses['id_class']; ?>" class="course<?=$courses['idcourse']; ?> form-control-custom"/>	<?=$courses['nomeclass']; ?></input>		
						</div>
					<?php endforeach; ?>
                
				</div>
                <div id="campo-t" style="margin-left: 18px;">
                  <div class="col-md-6">
                    <input placeholder="Nome da class Ex: Turma X" id="register-username" class="input-material" name="class" type="text">
                  </div>
                </div>
                <div class="col-md-12 form-group text-left">
                  <button type="submit" class="mt-4 btn btn-primary" name="btCadastrar">Salvar</button> 
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php' ; ?>

