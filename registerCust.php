<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'coffeeorder';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$f = $_REQUEST['fName'];
$l = $_REQUEST['lName'];
$n = $_REQUEST['phoneNum'];
$e = $_POST['email'];
$a = $_POST['address'];
$p = $_POST['password'];


$sql = "INSERT INTO customer (fName,lName,phoneNum,email,address,password) VALUES ('$f','$l','$n','$e','$a','$p')";
$runq = mysqli_query($con,$sql);

if($runq){
    echo '<script>alert("You have successfully registered an account! Click OK to continue logging in.")</script>';
    echo '<script>window.location="loginCust.html"</script>';}
else
 echo "tak ok";

?>