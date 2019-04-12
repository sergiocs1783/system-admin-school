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
   
<div class="container">
   <div class="card" style="width: 100%;">
      <div class="card-body">
         <h5 class="mt-5 mb-5 card-title">Olá <?php echo $_SESSION['userName']?></h5>
         <div class="row">
            <div class="text-center col-md-2">
               <a href="date_teacher.php">
               <img width="150"src="https://labfinprovarfia.com.br/wp-content/uploads/2016/02/icone-book.png">
               Dados Pessoais 
               </a>
            </div>
            <div class="text-center col-md-2">
               <a href="materials.php">
               <img width="150"src="https://labfinprovarfia.com.br/wp-content/uploads/2016/02/icone-book.png">
               materials de Apoio
               </a>
            </div>
            <div class="text-center col-md-2">
               <a href="feedback_students.php">
               <img width="150"src="https://labfinprovarfia.com.br/wp-content/uploads/2016/02/icone-book.png">
               Avaliações das Aulas
               </a>
            </div>
            <div class="text-center col-md-2">
               <a href="teacher_evaluation.php">
               <img width="150"src="https://labfinprovarfia.com.br/wp-content/uploads/2016/02/icone-book.png">
               Avaliações do Professor
               </a>
            </div>
            <div class="text-center col-md-2">
               <a href="materials.php">
               <img width="150"src="https://labfinprovarfia.com.br/wp-content/uploads/2016/02/icone-book.png">
               Calendario
               </a>
            </div>
         </div>
      </div>
   </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/admin/footer.php'; ?>
