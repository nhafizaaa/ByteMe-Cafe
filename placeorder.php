<?php
include_once 'db.php';


$quantity = $_POST['quantity'];
$totalprice = $_POST['totalprice'];

$sql= "INSERT INTO orderdetails(quantity,totalPrice) VALUES ('$quantity','$totalprice')";
$result = mysqli_query($con,$sql);

if($result)
echo"your data has been submitted";
else
echo":(";
 mysqli_close($con);

?>
