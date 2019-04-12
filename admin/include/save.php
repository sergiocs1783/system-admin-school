<?php 
	include $_SERVER['DOCUMENT_ROOT'].'/head.php';
	include $_SERVER['DOCUMENT_ROOT'].'/admin/model/saves.php';
	$s = new save();
?>

<div id="dd" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">
		<?php
		switch ($_GET['save']):
		
			case 'course':
			foreach($s->course() as $res):
			echo "O course {$res['nomecourse']} foi inserido com sucesso";
			endforeach;
			break;
			
			case 'class':
			foreach($s->class() as $res):
			echo "A class {$res['nomeclass']} foi inserida com sucesso";
			endforeach;
			break;
			
			case 'materials':
			echo "O Material foi incluido com sucesso!";
			break;	

			case 'fdb-student':
			echo "FeedBack Enviado!";
			break;		

			case 'fbp-teacher':
			echo "FeedBack Enviado!";
			break;	
			
			case 'cad-student':
			echo "Você foi cadastrado com sucesso!";
			header('Location: ../view/login.php');
			break;
			
		endswitch;
		?>
		</p>
      </div>
      <div class="modal-footer">
        <button id="voltar" type="button" class="btn btn-danger">OK</button>
      </div>
    </div>
  </div>
</div>

<?php  include $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>

<script type="text/javascript">
	$(window).load(function() {
		$('#dd').modal('show');
	});
	$( "#voltar" ).click(function(){
		javascript:history.back(-2)
	}); 
</script>