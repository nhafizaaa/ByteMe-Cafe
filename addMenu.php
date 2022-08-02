<?php
include 'db.php';

    $name = $_POST['name'];
    $menuID = $_POST['menuID'];
    $price = $_POST['price'];
    $des = $_POST['des'];
    $location = "img/";
	  $image= $_FILES['image']['name'];
    $image_temp= $_FILES['image']['tmp_name'];
      
      move_uploaded_file($image_temp,"img/$image");

      $image = $location.$image;

$sql = "INSERT INTO menu (name, menuID, price, des, image )VALUES ('$name', '$menuID', '$price', '$des', '$image')";

$runq = mysqli_query($con,$sql);

if($runq){
  echo '<script>alert("The menu has been added!")</script>';
  echo '<script>window.location="menuStaff.php"</script>';}
else
{
echo '<script>alert("The menu has not been added!")</script>';
echo("Error description: " . mysqli_error($con));
}  
mysqli_close($con);




?>

