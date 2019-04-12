<?php
	session_start();
	if(empty($_SESSION['userID']))
	{
		echo "<script>alert('ACESSO RESTRITO'); document.location.href='login.php';</script>";
	}
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/teacher_area/model/materials.php';
	$obj =  new materials();
	require_once 'menu-al.php';
?>

<div class="container-fluid">
	<table class="table">
	  <thead>
		<tr>
		  <th style="width: 100px;" scope="col"><i class="fas fa-graduation-cap"></i> Curso</th>
		  <th style="width: 100px;" scope="col"><i class="fas fa-users"></i> Turma</th>
		  <th style="width: 100px;" scope="col"><i class="fas fa-file-pdf"></i> Titulo</th>
		  <th style="width: 100px;" scope="col"><i class="fas fa-video"></i> DONWLOAd</th>
 
		</tr>
	  </thead>
	  <tbody>
	<?php foreach($obj->showMaterials() as $materials):?>
	 <tr>
	  <td><? echo '<br>'.$materials['curso'];?></td>
	  <td><? echo '<br>'.$materials['turma'];?></td>
	  <td><? echo '<br>'.$materials['descricao'];?></td>
	  <td><? echo '<a class="btn btn-primary" href="https://havokschool.com.br/admin/model/uploads/'.$materials['content'].'"> baixar </a>';?></td>
	 </tr>
	   <?php endforeach; ?>
	  </tbody>
	</table>
	 
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php'; ?>