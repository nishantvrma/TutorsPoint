
<?php include("header.php"); ?>

<?php
if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if((!$_SESSION['email']) && (!$_SESSION['password']) ){
   header("Location: index.php");
  }
  
 
 ?>


<section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Admin Panel</h2>
        </div>
		 <div class="center"> <a class="btn btn-danger" href="inc/logout.php">logout</a>
        </div>
			<div class="col-md-6"> 
		
          <h4>Add Tutor</h4>
          
          <div class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder=" Name" required="required"  />
              
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder=" Email"required="required" />
             
            </div>
			<div class="form-group">
              <input type="text" class="form-control" name="mobile" id="number" placeholder=" Mobile Number" required="required" />
             
            </div>
             <div class="form-group">
						<label for="">Qualificatio</label>
						<select class="form-control" name="qualification" id="qualification">
						  <option>Qualification</option>
						  
						  <option value="BSc">BSc</option>
						  <option value="BA">BA</option>
						  <option value="BSS">BSS</option>
						  <option value="BBS">BBS</option>
						  <option value="BBA">BBA</option>
						  <option value="MSc">MSc</option>
						  <option value="MA">MA</option>
						  <option value="MSS">MSS</option>
						  <option value="MBS">MBS</option>
						  <option value="MBA">MBA</option>
						  
						</select>
			</div>
			 <div class="form-group">
              <textarea class="form-control" name="area" rows="5" id="area"  placeholder="Area" required="required"></textarea>
             
            </div>
               <div class="form-group">
						<label for="">Subject</label>
						<select class="form-control" name="subject" id="subject">
						  <option>Subject</option>
						  
						  <option value="Bangla">Bangla</option>
						  <option value="English">English</option>
						  <option value="Math">Math</option>
						  <option value="ICT">ICT</option>
						  <option value="Physic">Physic</option>
						  <option value="Chemistry">Chemistry</option>
						  <option value="Bio-logy">Bio-logy</option>
						  <option value="HigherMath">HigherMath</option>
						  <option value="Accounting">Accounting</option>
						  <option value="Finance">Finance</option>
						  <option value="Marketing">Marketing</option>
						  
						 
						  
						  
						  
						</select>
			</div>
            <div class="text-center"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" >Submit </button></div>
          </div>
		  <div id="result"></div>
			</div>
			
		
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
 


<script src="js/jquery-2.js"></script>
<script type="text/javascript"> 
	
		$(document).ready(function(){
		
		$("#submit").click(function(){
		
		var t_name=$("#name").val();
		var t_email=$("#email").val();
		var t_mob=$("#number").val();
		var t_area=$("#area").val();
		var sub=$("#subject").val();
		var t_degree=$("#qualification").val();
		

	
		
					$.ajax({
				
				
				url:'inc/addtutordata.php',
				data:{name:t_name,email:t_email,mobile:t_mob,qualification:t_degree,subject:sub,area:t_area},
				type:'POST',
				success:function(data){
					$("#result").html(data);
					
					
				}
				
				
				
			});
			
	
			
		
		
		
	
		});
		

		});
	
	
	
	
	
	
	
	
	
	</script> 

<?php include("footer.php"); ?>