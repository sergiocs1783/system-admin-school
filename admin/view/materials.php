<?php
   session_start();
   if(empty($_SESSION['userID']))
   {
   	echo "<script>alert('ACESSO RESTRITO'); document.location.href='login.php';</script>";
   }
   require_once $_SERVER['DOCUMENT_ROOT'].'/admin/head.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/admin/nav-bar-adm.php';
   require_once $_SERVER['DOCUMENT_ROOT'].'/admin/model/materials.php';
   $obj =  new MaterialsAll(); 
   
   ?>
<div class="page">
<div class="col-lg-12">
   <div class="card">
      <div class="card-header">
         <h4></h4>
      </div>
      <div class="card-body">
         <div class="container-fluid">
            <div class="form-group col-lg-4">
               <div class="input-group">
                  <input placeholder="Pesquise por class ou course Ex: course Pantheon" type="text" class="material form-control">
                </div>
            </div>
            <table class="table-striped table">
               <thead>
                  <tr>
                     <th style="width: 100px;" scope="col"><i class="fas fa-graduation-cap"></i> course</th>
                     <th style="width: 100px;" scope="col"><i class="fas fa-users"></i> class</th>
                     <th style="width: 100px;" scope="col"><i class="fas fa-file-pdf"></i> Titulo</th>
                     <th style="width: 100px;" scope="col"><i class="fas fa-video"></i> Download</th>
                     <th style="width: 100px;" scope="col"><i class="fas fa-video"></i> X</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach($obj->show_materialsAll() as $data):?>
                  <tr>
                     <td><? echo '<br>'.$data['course'];?></td>
                     <td><? echo '<br>'.$data['class'];?></td>
                     <td><? echo '<br>'.$data['descricao'];?></td>
                     <td><? echo '<a class="btn btn-primary" href="https://havokschool.com.br/admin/model/uploads/'.$data['conteudo'].'"> Baixar </a>';?></td>
                     <td><? echo '<a class="text-white btn btn-danger"> Excluir </a>';?></td>
                  </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php'; ?>
