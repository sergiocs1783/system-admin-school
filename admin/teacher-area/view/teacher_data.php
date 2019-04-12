<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/teacher_area/model/dadosProfessorModel.php';
require_once 'menu-al.php';
if($_SESSION['userID'] == '1'): require_once $_SERVER['DOCUMENT_ROOT'].'/admin/nav-bar-adm.php';
endif;
if(empty($_SESSION['userID'])){ echo "<script>alert('ACESSO RESTRITO'); document.location.href='login.php';</script>";
}

$date = date_create($data['data']);
$obj = new DadosProfessor();
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
                    <div class="form-group col-lg-3">
                        <div class="input-group">
                            <input name="procurarProfessor" placeholder="Digite Nome ou CPF para pesquisa Ex: Raul" type="text" class="procurarProfessor form-control">
                        </div>
                    </div>
                    <? endif; ?>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Senha</th>
                                <th>e-mail</th> 
                                <th>RG</th>
                                <th>CPF</th>
                                <th>Area de Formação</th>
                                <th>Mini Curriculo</th>
                                <th>Data</th>
                                <th>Hora</th>
                            </tr>
                        </thead>
<?php foreach($obj->dadosProfessor() as $data): ?>
                        <tbody>
                            <tr>

                                <td><?= $data['name'] ?></td>
                                <td><?= $data['password'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['rg'] ?></td>
                                <td><?= $data['cpf'] ?></td>
                                <td><?= $data['area_de_formacao'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-success" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<?= $data['minicurriculo'] ?>">
                                        ver curriculo
                                    </button>
                                </td>
                                <td><?= date_format($date, 'd-m-Y') ?></td>
                                <td><?= $data['hora'] ?></td>

                            </tr>               
                        </tbody>
<?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php'; ?>
