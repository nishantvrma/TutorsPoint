<?php 
					 if(!isset($_SESSION)) 
    { 
        session_start(); 
		
    }
	  if(isset($_SESSION['user_type'])  ){

if($_SESSION['user_type']=="admin") {
 header("Location: admin.php");
}	  
 if ($_SESSION['user_type']=="guardian") {
   header("Location: gurdianadmin.php");
 } 
 
 if ($_SESSION['user_type']=="teacher") {
   header("Location: teacheradmin.php");
 }	
 if ($_SESSION['user_type']=="student") {
   header("Location: studentadmin.php");
 }	


	  
	  }
	  
	  else {
	   header("Location: TutorFinder/index.php");
	  }
  ?>