<?php
$conexao = new PDO("mysql:host=localhost;dbname=viaha439_mail", "viaha439_mail", "viahavok");
$conexao->exec('SET CHARACTER SET utf8');

$consulta_data = $conexao->prepare("
        
        SELECT * FROM feedbackAluno fa 
	INNER JOIN tb_aluno a on a.nMatricula = fa.nMatricula
	INNER JOIN turmas t on t.idTurma = fa.turma
	INNER JOIN curso c on c.idCurso = fa.curso
	WHERE fa.qualidade LIKE '" . $_POST['procurarAluno'] . "%'  OR t.nomeTurma LIKE '" . $_POST['procurarAluno'] . "%'  OR a.nome LIKE '" . $_POST['procurarAluno'] . "%'");



$consulta_data->execute();
$fetchAll = $consulta_data->fetchAll();
$count = $consulta_data->rowCount();
$date = date_create($material['data']);
if ($fetchAll == null)
    echo '<p class="pl-2 mt-2">Usuario inexistente</p>';
?>
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
    <?php foreach ($fetchAll as $material): ?>
        <tbody>
            <tr>
                <td><?= $material['nMatricula'] ?></td>
                <td><?= $material['nome'] ?></td>
                <td><?= $material['nomeCurso'] ?></td>
                <td><?= $material['nomeTurma'] ?></td>
                <td><?= $material['feedback'] ?></td>
                <td><?= $material['qualidade'] ?></td>
                <td><?= date_format($date, 'd-m-Y') ?></td>
                <td><?= $material['hora'] ?></td>
            </tr>               
        </tbody>
    <?php endforeach; ?>
</table>