$(document).ready(function(){

        $("#checkboxCustom1").change(function(){
        $.post('https://havokschool.com.br/admin/areaaluno/enum/enumTurmas.php',{idCurso:$(".curso1").val()},
		  function(data){
                 $("#aqui1").html(data);
               });
        });
});

$(document).ready(function(){

        $("#checkboxCustom2").change(function(){

           $.post('https://havokschool.com.br/admin/areaaluno/enum/enumTurmas.php',{idCurso:$(".curso2").val()},
           function(data){
                 $("#aqui2").html(data);
               });
        });
});

$(document).ready(function(){

        $("#checkboxCustom3").change(function(){

           $.post('https://havokschool.com.br/admin/areaaluno/enum/enumTurmas.php',{idCurso:$(".curso3").val()},
           function(data){
                 $("#aqui3").html(data);
               });
        });
});


$(document).ready(function(){

        $("#checkboxCustom4").change(function(){

           $.post('https://havokschool.com.br/admin/areaaluno/enum/enumTurmas.php',{idCurso:$(".curso4").val()},
           function(data){
                 $("#aqui4").html(data);
               });
        });
});


$(document).ready(function(){

        $("#checkboxCustom5").change(function(){

           $.post('https://havokschool.com.br/admin/areaaluno/enum/enumTurmas.php',{idCurso:$(".curso5").val()},
           function(data){
                 $("#aqui5").html(data);
               });
        });
});

$(document).ready(function(){

        $(".procurarProfessor").keyup(function(){

           $.post('https://havokschool.com.br/admin/areaprofessor/model/procuraProfessor.php',{procurarProfessor:$(".procurarProfessor").val()},
           function(data){
                 $(".table-striped").html(data);
               });
        });
});

$(document).ready(function(){

        $(".procurarAlunos").keyup(function(){

           $.post('https://havokschool.com.br/admin/areaaluno/model/procuraAlunos.php',{procurarAluno:$(".procurarAlunos").val()},
           function(data){
                 $(".table-striped").html(data);
               });
        });
});

$(document).ready(function(){

        $(".procurarProfessorFeed").keyup(function(){

           $.post('https://havokschool.com.br/admin/areaprofessor/model/procuraFeedBackProfessor.php',{procurarProfessorFeed:$(".procurarProfessorFeed").val()},
           function(data){
                 $(".table-striped").html(data);
               });
        });
});


$(document).ready(function(){

        $(".material").keyup(function(){

           $.post('https://havokschool.com.br/admin/model/procuraMaterial.php',{material:$(".material").val()},
           function(data){
                 $(".table-striped").html(data);
               });
        });
});



				
				
(function(){
	"use strict";

	var marcados = 0;
	var verifyCheckeds = function($checks) {
		if( marcados>=1 ) {
			loop($checks, function($element) {
				$element.disabled = $element.checked ? '' : 'disabled';
			});
		} else {
			loop($checks, function($element) {
				$element.disabled = '';
			});
		}
	};
	var loop = function($elements, cb) {
		var max = $elements.length;
		while(max--) {
			cb($elements[max]);
		}
	}
	var count = function($element) {
		return $element.checked ? marcados + 1 : marcados - 1;
	}
	window.onload = function(){
		var $checks = document.querySelectorAll('input[type="checkbox"]');
		loop($checks, function($element) {
			$element.onclick = function(){
				marcados = count(this);
				verifyCheckeds($checks);
			}
			if($element.checked) marcados = marcados + 1;
		});
		verifyCheckeds($checks);
	}
}());



