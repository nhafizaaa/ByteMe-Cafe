<?php 
include("auth.php");
include 'db.php';

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

?>

<?php
if(isset($_POST["submit"]))
{
	if(isset($_SESSION["billing"]))
	{
		$cust_array_id = array_column($_SESSION["billing"], "item_id");
		if(!in_array($_GET["id"], $cust_array_id))
		{
			$count = count($_SESSION["billing"]);
			$cust_array = array(
				'item_id'			=>	$_GET["id"],
				'cust'				=>	$_POST["custname"],
				'ship'				=>	$_POST["shipping"],
				'address'			=>	$_POST["add"],
				'contact'			=>	$_POST["contact"],
				'email'				=>	$_POST["email"]
			);
			$_SESSION["billing"][$count] = $cust_array;
		}
	}
	else
	{
		$cust_array = array(
			'item_id'			=>	$_GET["id"],
			'cust'				=>	$_POST["custname"],
			'ship'				=>	$_POST["shipping"],
			'address'			=>	$_POST["add"],
			'contact'			=>	$_POST["contact"],
			'email'				=>	$_POST["email"]
		);
		$_SESSION["billing"][$count] = $cust_array;
	}
}

?>

<?php
	if(!empty($_SESSION["billing"]))
	{
		foreach($_SESSION["billing"] as $keys => $custs)
		{
?>
<?php
	if(!empty($_SESSION["shopping_cart"]))
	{
		$total = 0;
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
?>

<?php

		$pid = $values["item_id"];
		$qty = $values["item_quantity"];
		$tot = $values["item_quantity"] * $values["item_price"];

		$sql = "INSERT INTO cart (product_id, quantity,total) VALUES ('$pid', '$qty', '$tot')";
		$result = mysqli_query($con,$sql);

		$pname = $values["item_name"];
		$custname = $custs["cust"];
		$phone = $custs["contact"];
		$emel = $custs["email"];
		$add = $custs["address"];
		$ships = $custs["ship"];

		$sql2 = "INSERT INTO sales (p_id, p_names,quantity, cust_name, contact_no, email, address, shipping, total) VALUES ('$pid', '$pname','$qty', '$custname', '$phone', '$emel', '$add', '$ships', '$tot')";
		$result2 = mysqli_query($con,$sql2);

		if ($result2) 
		{
			unset($_SESSION["shopping_cart"]);
			echo '<script>alert("Your order has been placed. Thank you for your patience!")</script>';
			echo '<script>window.location="home.php"</script>';
		}
		else
		{
			echo '<script>alert("Error")</script>';
		}

				}
			}
		}
	}

	mysqli_close($con);
?>