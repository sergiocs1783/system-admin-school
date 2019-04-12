<?php
	session_start();
	if(empty($_SESSION['UsuarioID']))
	{
		echo "<script>alert('ACESSO RESTRITO'); document.location.href='login.php';</script>";
	}
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/student_area/model/materials.php';
	$obj =  new materials();
	require_once 'menu-al.php';
?>

<div class="container-fluid">
	<table class="table">
	  <thead>
		<tr>
		  <th style="width: 100px;" scope="col"><i class="fas fa-graduation-cap"></i> course</th>
		  <th style="width: 100px;" scope="col"><i class="fas fa-users"></i> class</th>
		  <th style="width: 100px;" scope="col"><i class="fas fa-file-pdf"></i> Titulo</th>
		  <th style="width: 100px;" scope="col"><i class="fas fa-video"></i> DONWLOAd</th>
 
		</tr>
	  </thead>
	  <tbody>
	<?php foreach($obj->showData() as $data):?>
	 <tr>
	  <td><? echo '<br>'.$data['course'];?></td>
	  <td><? echo '<br>'.$data['class'];?></td>
	  <td><? echo '<br>'.$data['descricao'];?></td>
	  <td><? echo '<a class="btn btn-primary" href="https://havokschool.com.br/admin/model/uploads/'.$data['conteudo'].'"> baixar </a>';?></td>
	 </tr>
	   <?php endforeach; ?>
	  </tbody>
	</table>
	 
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php'; ?>