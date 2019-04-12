      <footer style="z-index: 9999;"class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>HAVOK SCHOOL  &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-r2ht">
              <p>Desenvolvido por <a href="https://bootstrapious.com" class="external">HAVOK SCHOOL </a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
    
        </div>
          </div>
        </div>
      </footer>
    </div>
    
	<!-- JavaScript files-->
    
	<script src="https://havokschool.com.br/admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://havokschool.com.br/admin/assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="https://havokschool.com.br/admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://havokschool.com.br/admin/assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="https://havokschool.com.br/admin/assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="https://havokschool.com.br/admin/assets/vendor/chart.js/Chart.min.js"></script>
    <script src="https://havokschool.com.br/admin/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://havokschool.com.br/admin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://havokschool.com.br/admin/assets/js/charts-home.js"></script>
    <script src="https://havokschool.com.br/admin/assets/js/ajax.js"></script>
    <script src="js/front.js"></script>
 
			  
<script>
		$("#checkboxCustom1").change(function(data){ 
			var selection = $("#checkboxCustom1:checked").val();
			console.log(selection); 
			if(selection != "1")
				$("#campo-escondido-1").hide();
			else
				$("#campo-escondido-1").show();
		});
		$("#campo-escondido-1").hide();

		$("#checkboxCustom2").change(function(data){ 
			var selection = $("#checkboxCustom2:checked").val();
			console.log(selection); 
			if(selection != "2")
				$("#campo-escondido-2").hide();
			else
				$("#campo-escondido-2").show();
		});
		$("#campo-escondido-2").hide();

		$("#checkboxCustom3").change(function(data){ 
			var selection = $("#checkboxCustom3:checked").val();
			console.log(selection); 
			if(selection != "3")
				$("#campo-escondido-3").hide();
			else
				$("#campo-escondido-3").show();
		});
		$("#campo-escondido-3").hide();


		$("#checkboxCustom4").change(function(data){ 
			var selection = $("#checkboxCustom4:checked").val();
			console.log(selection); 
			if(selection != "4")
				$("#campo-escondido-4").hide();
			else
				$("#campo-escondido-4").show();
		});
		$("#campo-escondido-4").hide();

		$("#checkboxCustom5").change(function(data){ 
			var selection = $("#checkboxCustom5:checked").val();
			console.log(selection); 
			if(selection != "5")
				$("#campo-escondido-5").hide();
			else
				$("#campo-escondido-5").show();
		});
		$("#campo-escondido-5").hide();	

		$(".form-control-custom").change(function(data){ 
			var selection = $(".form-control-custom:checked").val();
			console.log(selection); 
			
			if(selection != '1' && selection != '2' && selection != '3' && selection != '4' && selection != '5')
				$("#campo-t").hide();
			else
				$("#campo-t").show();
		});
		$("#campo-t").hide();
</script>
        <script>   $(function () {
                    $('[data-toggle="popover"]').popover()
                })</script>
  </body>
</html>