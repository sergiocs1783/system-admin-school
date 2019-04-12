<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/teacher_area/model/feedback_studentsModel.php';
require_once 'menu-al.php';
if($_SESSION['userID'] == '1'): require_once $_SERVER['DOCUMENT_ROOT'].'/admin/nav-bar-adm.php';
endif;
if(empty($_SESSION['userID'])){ echo "<script>alert('ACESSO RESTRITO'); document.location.href='login.php';</script>";
}
$obj = new feedback_studentsModel();
?>

<div <? if($_SESSION['userID'] == '1'):?> class="page" <? endif; ?> >
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4><?= $_SESSION['nome'] ?></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
<?php if($_SESSION['userID'] == '1'): ?>
                    <div class="form-group col-lg-4">
                        <div class="input-group">
                            <input name="procurarAluno" placeholder="Digite Nome, Turma ou Qualidade para pesquisa Ex: Raul" type="text" class="procurarAlunos form-control">

                        </div>
                    </div>
                    <? endif; ?>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>N° Matricula</th>
                                <th>Nome</th>
                                <th>Curso</th>
                                <th>Turma</th> 
                                <th>Feedback</th>
                                <th>Qualidade</th>
                                <th>Data</th>
                                <th>Hora</th>
                            </tr>
                        </thead>
					<?php foreach($obj->feedback_students() as $data): ?>
                        <tbody>
                            <tr>

                                <td><?= $data['nMatricula'] ?></td>
                                <td><?= $data['name'] ?></td>
                                <td><?= $data['nameCourse'] ?></td>
                                <td><?= $data['nameClass'] ?></td>
                                <td><?= $data['feedback'] ?></td>
                                <td><?= $data['quality'] ?></td>
                                <td><?= date_format($date, 'd-m-Y') ?></td>
                                <td><?= $data['time'] ?></td>

                            </tr>               
                        </tbody>
					<?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php';
