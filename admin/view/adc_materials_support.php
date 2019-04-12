<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php' ;  
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/model/adc_courseModel.php'; 
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/nav-bar-adm.php' ;  
?>

    <div class="page">
        <section class="dashboard-header section-padding">
            <div class="container-fluid">
                <div class="row d-flex align-items-md-stretch">
                    <!-- To Do List-->
                    <div class="col-lg-12 col-md-12">
                        <div class="card to-do">
                            <h1 class="text-left">Insira conteúdo de Aula</h1>

                            <form action="../controller/
adc_materials_supportController.php?save=materials" method="post" enctype="multipart/form-data" class="text-left form-validate">

                                <div class="col-md-12">
                                    <div class="row">
                                        <?php $course = new adc_courseModel(); foreach($course->allcourse() as $courses): ?>

                                            <div class="mr-3 mb-2 i-checks">
                                                <input id="checkboxCustom<?=$courses['idcourse']; ?>" type="checkbox" name="course" value="<?=$courses['idcourse']; ?>" class="course<?=$courses['idcourse']; ?> form-control-custom">
                                                <label for="checkboxCustom<?=$courses['idcourse']; ?>">
                                                    <?=$courses['nomecourse']; ?>
                                                </label>
                                            </div>

                                            <div id="campo-escondido-<?=$courses['idcourse']; ?>" style="margin-left: 18px;">
                                                <select name="turma" id="aqui<?=$courses['idcourse']; ?>" class="ml-4 col-md-11 form-group-material">

                                                </select>
                                            </div>

                                            <?php endforeach; ?>

                                                <div class="col-md-12 form-group-material">
                                                    <input placeholder="Nome do Documento" id="register-username" class="input-material" name="descricao" type="text">
                                                </div>
                                                <label>Seleciona Arquivo</label>
                                                <input type="file" name="content_support" class="input-material" required="" accept="*/image">

                                                <div class="form-group text-left">
                                                    <button type="submit" class="mt-4 btn btn-primary" name="btCadastrar">Salvar</button>
                                                </div>
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