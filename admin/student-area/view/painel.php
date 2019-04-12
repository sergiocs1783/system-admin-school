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
  
<div class="container">
<div class="card" style="width: 100%;">
  <div class="card-body">
    <h5 class="mt-5 mb-5 card-title">Olá <?php echo $_SESSION['userName']?></h5>
	
<div class="row">
<div class="text-center col-md-2">
 <img width="150" src="https://professorcarlosrosa.com.br/wp-content/uploads/2017/12/icone-prova.png">
 Certificações
</div>

<div class="text-center col-md-2">
 <a href="materials.php">
 <img width="150"src="https://labfinprovarfia.com.br/wp-content/uploads/2016/02/icone-book.png">
 materials de Apoio
 </a>
</div>

<div class="text-center col-md-2">
 <a href="avaliacaoAluno.php">
 <img width="150"src="https://labfinprovarfia.com.br/wp-content/uploads/2016/02/icone-book.png">
Avaliaçoes diarias das aulas
 </a>
</div>
  </div>
</div>


</div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php'; ?>