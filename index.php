
<?php include("header.php"); ?>




  <section id="main-slider" class="no-margin">
    <div class="container">
      
                <div class="slogan">
                  <h2 >Welcome <span>TutorsPoint</span>  </h2>
                  
                  
                </div>
              </div>
          

        
    
  </section>
  
  
  <section id="search-bar"> 
  
    <div class="container">
      
                <form class="search" method="POST" action="searchtuition.php">
					<h3>Search Tuition  </h3>
                      <div class="form-group">
					   
						<label for="" style="color: #fff;">Class</label>
						<select class="form-control" name="class_student" id="class_student">

						  <option value="Class 6">Class 6</option>
						  <option value="Class 7">Class 7</option>
						  <option value="Class 8">Class 8</option>
						  <option value="Class 9">Class 9</option>
						  <option value="Class 10">Class 10</option>
						  <option value="Class 11">Class 11</option>
						  <option value="Class 12">Class 12</option>
					
						  
						  
						</select>
						 <span class="error_message" id="class_error"></span>
			</div>
             
				
				  <div class="form-group">
						<label for="">Subject</label>
						<select class="form-control" name="subject" id="subject">
s						
						  
			
						  <option value="English">English</option>
						  <option value="Math">Math</option>
						  <option value="Physics">Physics</option>
						  <option value="Chemistry">Chemistry</option>
						  <option value="Bio-logy">Bio-logy</option>
						  <option value="HigherMath">HigherMath</option>
						  <option value="Accounting">Accounting</option>
						  <option value="Finance">Finance</option>
						  <option value="Marketing">Marketing</option>
						  
						 
						  
						  
						  
						</select>
			</div>
			
			<input type="submit" value="search Tuition" class="searbtn" />
			
			   </form>
			   
			
		
		
		     <form class="search" method="POST" action="searchtutor.php">
				<h3>Search Tutor </h3>
                      <div class="form-group">
					   
						<label for="" style="color: #fff;">Class</label>
						<select class="form-control" name="class_student" id="class_student">

						  <option value="Class 6">Class 6</option>
						  <option value="Class 7">Class 7</option>
						  <option value="Class 8">Class 8</option>
						  <option value="Class 9">Class 9</option>
						  <option value="Class 10">Class 10</option>
						  <option value="Class 11">Class 11</option>
						  <option value="Class 12">Class 12</option>
						  
						  
						</select>
						 <span class="error_message" id="class_error"></span>
			</div>
             
				
				  <div class="form-group">
						<label for="">Subject</label>
						<select class="form-control" name="subject" id="subject">
						 
						  
						
						  <option value="English">English</option>
						  <option value="Math">Math</option>
						  <option value="Physics">Physics</option>
						  <option value="Chemistry">Chemistry</option>
						  <option value="Bio-logy">Bio-logy</option>
						  <option value="HigherMath">HigherMath</option>
						  <option value="Accounting">Accounting</option>
						  <option value="Finance">Finance</option>
						  <option value="Marketing">Marketing</option>
						  
						 
						  
						  
						  
						</select>
			</div>
			
			<input type="submit" value="search Tutor" class="searbtn" />
			
			   </form>
			   
              </div>
  
  </section>
  <!--/#main-slider-->


<section id="tutorlist"> 

<div class="container">
	<div class="row"> 
	<h2> Featured Tutors</h2>
	
	<?php 
	include("inc/constant.php");
	
	$sql = "SELECT *  FROM add_tutor";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
											// output data of each row
	while($row = $result->fetch_assoc()) {?>
	
	
		<div class="col-md-3"> 
		<div class="single-tutor">
		<div class="tutor-are">
				<div class="tutor-iteam"><h3><?php echo $row["name"] ?></h3></div>
				<div class="tutor-img"><h3><img src="images/img_avatar.png" alt="" /></h3></div>
		
		
		</div>
			
			<p><span>Qualification:</span> <?php echo $row["qualification"] ?></p>
			<p><span>Area:</span> <?php echo $row["are"] ?></p>
			<p><span>Teaching: </span><?php echo $row["teaching_sub"] ?></p>
			<a href="detailstutor.php?id=<?php echo $row["id"] ?>">Details</a>
		</div>
		</div>
		
		<?php 	}
										} ?>
		
	
	</div>
</div>
	
</section>
 



  

 
  <!--/#conatcat-info-->


<?php include("footer.php"); ?>