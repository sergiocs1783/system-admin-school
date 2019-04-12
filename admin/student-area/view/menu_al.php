<nav class="navbar-dark bg-dark">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 text-left">
				<a class="navbar-brand" href="#">
					<img src="https://havokschool.com.br/assets/img/sobre/logo-hv.png" class="img-fluid" style="width: 210px;">
				</a>
			</div>
  
	<div class="col-md-6 text-right" style="vertical-align: bottom;margin: 25px 0;">
			<?php 
				$url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			 
				
				if($url_atual != 'https://havokschool.com.br/admin/student_area/view/painel.php'){echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>VOLTAR / </a>";}
				
			?>
			<a href="sair.php">SAIR</a>
	</div>
	</div>
  </div>
</nav>