<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'coffeeorder';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$fName = $_POST["fName"];
$feedback = $_POST["feedback"];
$rating = $_POST["rating"];

$sql = "INSERT INTO feedback (fName, feedback, rating) VALUES (' $fName', '$feedback', '$rating')";

$execute = mysqli_query($con, $sql);

if($execute){
	            // successs message 
				$_SESSION['feedback'] = "Thank You! Your feedback has been submitted"; 
				//echo $_SESSION['fName'];
				header('Location: feedbacksuccess.php');
}
else
		echo ("try again");

?> 