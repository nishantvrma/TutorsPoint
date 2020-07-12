<?php 

session_start();
session_destroy();
header("Location: http://localhost/TutorFinder/index.php");


?>