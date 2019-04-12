<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/model/feedback_teacherModel.php';

if($_SESSION['userID'] == '1'): require_once $_SERVER['DOCUMENT_ROOT'].'/admin/nav-bar-adm.php';
endif;
if(empty($_SESSION['userID'])){ echo "<script>alert('ACESSO RESTRITO'); document.location.href='login.php';</script>";
}

$date = date_create($material['data']);
$obj = new FeedBackProfessorModel();
?>

<div <? if($_SESSION['userID'] == '1'):?> class="page" <? endif; ?> >
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4><?= $_SESSION['name'] ?></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php if($_SESSION['userID'] == '1'): ?>
                    <div class="form-group col-lg-5">
                        <div class="input-group">
                            <input placeholder="Digite Nome, Turma ou Curso para pesquisa Ex: Locomotion" type="text" class="form-control">
                        </div>
                    </div>
                    <? endif; ?>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Curso</th>
                                <th>Turma</th> 
                                <th>Feedback</th> 
                                <th>Data</th>
                                <th>Hora</th>

                            </tr>
                        </thead>
                        <?php foreach($obj->feedback_teacher() as $materials): ?>
                        <tbody>
                            <tr>

                                <td><?= $materials['name'] ?></td>
                                <td><?= $materials['cpf'] ?></td>
                                <td><?= $materials['nameCourse'] ?></td>
                                <td><?= $materials['nameClass'] ?></td>
                                <td><?= $materials['feedback'] ?></td> 
                                <td><?= date_format($date, 'd-m-Y') ?></td>
                                <td><?= $materials['time'] ?></td>

                            </tr>               
                        </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php'; ?>