<?php

include 'db.php';



  if(isset($_POST['submit']))
		{

			$id = $_POST['id'];
			$name = $_POST['name'];
			$menuID = $_POST['menuID'];
			$price = $_POST['price'];
			$des = $_POST['des'];
	        $location = "img/";
	        $image= $_FILES['image']['name'];
			$image_temp= $_FILES['image']['tmp_name'];

			if($image_temp != "")
			{
    			move_uploaded_file($image_temp,"img/$image");

    			$image = $location.$image;

 				$sql = "UPDATE menu SET name='$name', menuID='$menuID',price='$price', des='$des',image ='$image' WHERE id='$id'";
 			}

			else
			{
				$sql = "UPDATE menu SET name='$name', menuID='$menuID',price='$price', des='$des' WHERE id='$id'";

			
			}

			$query_run = mysqli_query($con, $sql);

			if($query_run)
			{
				echo '<script type="text/javascript"> alert("Data updated")</script>';
				header("location:menuStaff.php");

			}

			else
			{
				echo '<script type="text/javascript"> alert("Data not updated")</script>';
			}
		}

		$query1 = mysqli_query($con,"select * from menu where id='$id'");

		$query2 = mysqli_fetch_array($query1);
	
?>

