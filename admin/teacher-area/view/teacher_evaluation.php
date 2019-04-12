<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php' ; 
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/teacher_area/model/teacher_dataModel.php';
	require_once 'menu-al.php';  
?> 
  <section class="dashboard-header section-padding">
    <div class="container-fluid">
      <div class="row d-flex align-items-md-stretch">
        <!-- To Do List-->
        <div class="col-lg-12 col-md-12">
          <div class="card to-do">
            <h1 class="text-left">Em poucas palavras de um FeedBack sobre a aula</h1>
            <form  action="../controller/feedbackController.php?save=fbp-teacher"  method="post" enctype="multipart/form-data" class="text-left form-validate">
              <div class="col-md-12">
                <div class="row">
				
				<?php $course = new teacher_data(); foreach($course->coursesTeacher() as $courses): ?>
				<div class="mr-3 mb-2 i-checks">
                    <input id="checkboxCustom<?=$courses['idcourse']; ?>" type="radio" name="course" value="<?=$courses['idcourse']; ?>" class="course<?=$courses['idcourse']; ?> form-control-custom">
                    <label for="checkboxCustom<?=$courses['idcourse']; ?>"><?=$courses['namecourse']; ?></label>
                </div>
				
				<div id="campo-escondido-<?=$courses['idcourse']; ?>" style="margin-left: 18px;">
					<select name="turma" id="aqui<?=$courses['idcourse']; ?>"  class="ml-4 col-md-11 form-group-material">  </select>
				</div>
					<?php endforeach; ?>
                </div>
                <div id="campo-t" style="margin-left: 18px;">
                  <div class="col-md-6">
                    <textarea rows="5" cols="130" placeholder="FeedBack Ex: A Aula foi bem produtiva" id="register-username" class="input-material" name="feed" type="text" style="height: 148px;  border-style: none none solid; border-width: medium medium 1px;color: #828486;font-weight: 100;"></textarea>
                  </div>
                </div>
                <div class="col-md-12 form-group text-left">
                  <button type="submit" class="mt-4 btn btn-primary" name="btCadastrar">Enviar</button> 
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php' ; ?>