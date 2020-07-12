
<?php include("header.php"); ?>

<?php
if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if(($_SESSION['email']) && ($_SESSION['password']) && ($_SESSION['user_type']=="guardian") ){
   header("Location: gurdianadmin.php");
  }
  ?>

<section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Register As Guardian</h2>
        </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-6 col-md-offset-3">
          
          
          <div  class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="required"  />
              <span class="error_message"id="name_error"></span>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"required="required" />
             <span class="error_message" id="email_error"></span>
            </div>
			<div class="form-group">
              <input  class="form-control" type="text"   name="mobile" id="mobile" placeholder="Your Mobile Number" required="required" />
             <span class="error_message" id="mobile_error"></span>
            </div>
				<div class="form-group">
              <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required="required" />
             <span class="error_message" id="password_error"></span>
            </div>
			
			<div class="form-group">
              <input  class="form-control" type="text"   name="area" id="area" placeholder="Your Area" required="required" />
              <span class="error_message" id="area_error"></span>
            </div>
          
			
           
            <div class="text-center"><button type="submit" id="submit"name="submit" class="btn btn-primary btn-lg" >Submit</button></div>
          
		  
		  </div>
		  
		  
		  <div id="result"></div>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->
<script src="js/jquery-2.js"></script>
<script type="text/javascript"> 
	
		$(document).ready(function(){
		$("#name_error").hide();
		$("#mobile_error").hide();
		$("#password_error").hide();
		$("#email_error").hide();
		$("#area_error").hide();
	var error_name = false;
	var error_password = false;
	var error_email = false;
	var error_mobile= false;
	var error_area= false;

	
		$("#name").focusout(function() {

		check_name();
		
	});
	
		$("#email").focusout(function() {

		check_email();
		
	});
	
		$("#mobile").focusout(function() {

		check_mobile();
		
	});	
	
	$("#password").focusout(function() {

		check_password();
		
	});
	
	$("#area").focusout(function() {

		check_area();
		
	});
	

	
	
		function check_password() {
	
		var password_length = $("#password").val().length;
		
		if(password_length < 6) {
			$("#password_error").html("At least 6 characters");
			$("#password_error").show();
		
		} else {
			$("#password_error").hide();
			error_password = true;
		}
	
		}
		
		
		function check_name() {
	
		var name_length = $("#name").val().length;
		
		if(name_length < 1) {
			$("#name_error").html("Type Your Name");
			$("#name_error").show();
		
		} else {
			$("#name_error").hide();
			error_name = true;
		}
	
		}
		
		function check_area() {
	
		var area_length = $("#name").val().length;
		
		if(area_length < 1) {
			$("#area_error").html("Type Your Area");
			$("#area_error").show();
		
		} else {
			$("#area_error").hide();
			error_area = true;
		}
	
		}
	
	
	
	
	function check_email() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#email").val())) {
			$("#email_error").hide();
			error_email = true;
		} else {
			$("#email_error").html("Invalid email address");
			$("#email_error").show();
			
		}
	
	}
	
	
	function check_mobile () {
	var mobile_length = $("#mobile").val().length;
		
		if(mobile_length <11) {
			$("#mobile_error").html("Mobile number must be 11 characters");
			$("#mobile_error").show();
		
		} else {
			$("#mobile_error").hide();
			error_mobile = true;
		}
	
	}
		
		$("#submit").click(function(){
				
		check_password();
		check_email();
		check_mobile();
		check_name();
		check_area();
		
		if(error_name==true && error_email==true && error_password==true && error_mobile==true && error_area==true) {
		
		
		
		var t_name=$("#name").val();
		var t_email=$("#email").val();
		var t_mob=$("#mobile").val();
		var t_pass=$("#password").val();
		var g_area=$("#area").val();
		

	
		
					$.ajax({
				
				
				url:'inc/gurdianreg.php',
				data:{name:t_name,email:t_email,mobile:t_mob,area:g_area,password:t_pass},
				type:'POST',
				success:function(data){
					$("#result").html(data);
					
					
				}
			});
			
			
			
			}
		});
		

		});
	
	
	
	
	
	
	
	
	
	</script> 	


<?php include("footer.php"); ?>