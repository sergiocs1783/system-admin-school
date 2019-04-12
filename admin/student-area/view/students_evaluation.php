<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php' ; 
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/student_area/model/data_studentModel.php';
	require_once 'menu-al.php';  
?> 
  <section class="dashboard-header section-padding">
    <div class="container-fluid">
      <div class="row d-flex align-items-md-stretch">
        <!-- To Do List-->
        <div class="col-lg-12 col-md-12">
          <div class="card to-do">
            <h1 class="text-left">Em poucas palavras de um FeedBack sobre a aula</h1>
            <form  action="../controller/feedBackstudentController.php?salvo=fdb-student"  method="post" enctype="multipart/form-data" class="text-left form-validate">
              <div class="col-md-12">
                <div class="row">
				
					<?php $course = new data_studentModel(); foreach($course->course_student() as $course): ?>
						<div class="mr-3 mb-2 i-checks">
							<input id="checkboxCustom<?=$course['idcourse']; ?>" type="radio" name="course" value="<?=$course['idcourse']; ?>" class="course<?=$course['idcourse']; ?> form-control-custom">
							<label for="checkboxCustom<?=$course['idcourse']; ?>"><?=$course['nomecourse']; ?></label>
						</div>
						
						<div id="campo-escondido-<?=$course['idcourse']; ?>" style="margin-left: 18px;">
							 <input type="text" name="class" value="<?=$course['idclass']; ?>" class="course<?=$course['idcourse']; ?> form-control-custom"/>	<?=$course['nomeclass']; ?></input>		
						</div>
					<?php endforeach; ?>
                
				</div>
				
				<div class="row">
				<div class="mr-3 mb-2 i-checks">
                    <input id="checkboxCustom5" type="radio" name="qualidade" value="Boa" class="form-control-custom"/>
                    <label for="checkboxCustom5">Boa</label>
                </div>		

				<div class="mr-3 mb-2 i-checks">
                    <input id="checkboxCustom6" type="radio" name="qualidade" value="Media" class="form-control-custom">
                    <label for="checkboxCustom6">Medio</label>
                </div>			

				<div class="mr-3 mb-2 i-checks">
                    <input id="checkboxCustom7" type="radio" name="qualidade" value="Pessima" class="form-control-custom">
                    <label for="checkboxCustom7">Pessimo</label>
                </div>
				</div>
				
                <div id="campo-t" style="margin-left: 18px;">
                  <div class="col-md-6">
                    <textarea rows="5" cols="130" placeholder="FeedBack Ex: A Aula foi bem produtiva" id="register-username" class="input-material" name="feedback" type="text" style="height: 148px;  border-style: none none solid; border-width: medium medium 1px;color: #828486;font-weight: 100;"></textarea>
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