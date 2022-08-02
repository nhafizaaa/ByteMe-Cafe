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

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="newstyle.css">
	<link rel="stylesheet" type="text/css" href="checkout.css">
	<link rel="stylesheet" type="text/css" href="product.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"/>
	<link rel="shortcut icon" href="images/hat.png" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
body { 
  margin: 0;
  font-family: 'Roboto', sans-serif;
  font-size:16px;
}
.name{
font-size: 22px;
font-weight: bold;

}
.price{
    color:grey;
    font-size:18px;
}
.desc{
    font-size: 14px;
}
.button {
    background-color: #f68b1e;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .buttonCust {
    background-color: #f68b1e;
    border: none;
    color: white;
    padding: 12px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;
  }


.product-item {
	float: left;
	background: #ffffff;
	margin: 30px 30px 0px 0px;
    text-align: center;
   
}

.product-image {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
	height: 155px;
	width: 250px;
	background-color: #FFF;
}
#product-grid {
	margin: 40px;
}
#product-grid .txt-heading {
	margin-bottom: 18px;
}
.product-tile-footer {
    padding: 10px 10px 0px 10px;
    overflow: auto;
}
.message_box .box{
	margin: 10px 0px;
    border: 1px solid #2b772e;
    text-align: center;
    font-weight: bold;
    color: #2b772e;
	}
.table td {
	border-bottom: #F0F0F0 1px solid;
	padding: 10px;
	}
.cart_div {
	float:right;
	font-weight:bold;
	position:relative;
	}
.cart_div a {
	color:#000;
	}	
.cart_div span {
	font-size: 12px;
    line-height: 14px;
    background: #F68B1E;
    padding: 2px;
    border: 2px solid #fff;
    border-radius: 50%;
    position: absolute;
    top: -1px;
    left: 13px;
    color: #fff;
    width: 14px;
    height: 13px;
    text-align: center;
	}
.cart .remove {
    background: none;
    border: none;
    color: #0067ab;
    cursor: pointer;
    padding: 0px;
	}
.cart .remove:hover {
	text-decoration:underline;
    }
    <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #ffff;
  padding: 10px 10px;
  width:100%;
  border-bottom: 1px solid #EEEEEE;

}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
.content {
	width: 1000px;
	margin: 0 auto;
}
.content h2 {
	margin: 0;
	padding: 25px 0;
	font-size: 22px;
	border-bottom: 1px solid #e0e0e3;
	color: grey;
}
.content > p, .content > div {
	box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
	margin: 25px 0;
	padding: 25px;
	background-color: #fff;
}
.content > p table td, .content > div table td {
	padding: 5px;
}
.content > p table td:first-child, .content > div table td:first-child {
	font-weight: bold;
	color: grey;
	padding-right: 15px;
}
.content > div p {
	padding: 5px;
	margin: 0 0 10px 0;
}

	</style>
</head>

<body>
<div style="width:1330px; margin:20 auto;">

<div class="header">
<a href="#default" class="logo">ByteMe Cafe</a>
  <div class="header-right">
  <a href="home.php">Home</a>
  <a href="menu.php">Menu</a>
  <a href="myaccount.php">My Account</a>
<a href="myorder.php">My Order</a>
    <a href="rate.php">Feedback</a>
	<a href="logout.php">Log Out</a>
</div>
</div>


</div>

<div class="page-area cart-page spad">
		<div class="container">
			<div class="cart-table">
				<table>
					<thead>
						<tr>
							<th class="product-th">Menu Item</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Total</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
						if(!empty($_SESSION["shopping_cart"]))
						{
							$total = 0;
							foreach($_SESSION["shopping_cart"] as $keys => $values)
							{
					?>
					<tbody>
						<tr>
							<td class="product-col">
								<div class="pc-title">
									<h4><?php echo $values["item_name"]; ?></h4>
								</div>
							</td>
							<td class="price-col">
								<h4><?php echo $values["item_quantity"]; ?></h4>
							</td>
							<td class="price-col"><h4>RM <?php echo number_format($values["item_price"], 2); ?></h4></td>
							
							<td><h4>RM <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></h4></td>
							<td class="price-col"><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>">Remove</a></td>
							<?php
									$total = $total + ($values["item_quantity"] * $values["item_price"]);
								}
							?>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><div class="price-col">
									<h4>TOTAL</h4>
								</div></td>
								<td class="total-col"><h4>RM<?php echo number_format($total, 2); ?></h4></td>
							</tr>
						</tr>
					</tbody>
					<?php
						}
					?>
				</table>
			</div>
			<div class="row cart-buttons">
				<div class="col-lg-7 col-md-7 text-lg-right text-left">
					<div class="button"><a href="menu.php" style="color: white;">Continue to Order</a></div>
				</div>
			</div>
		</div>
		<div class="page-area cart-page spad">
			<div class="card-warp">
				<div class="container">
					<div class="row">
						<?php
						if(!empty($_SESSION["shopping_cart"]))
						{
							foreach($_SESSION["shopping_cart"] as $keys => $row)
							{
						?>
						<form class="checkout-form" method="post" action="checkout.php?action=add&id=<?php echo $row["item_id"]; ?>">
							<?php
									}
								}
							?>
							<div class="col-lg-6">
								<h3 class="checkout-title" align="center">Delivery Details</h3>
								<div class="row">
									<div class="col-md-12">
										<input type="text" name="custname" placeholder="Customer Name *" style="background-color: white">
									</div>
									<div class="col-md-12">
										<select name="shipping" style="background-color: white">
										<option>Delivery Option *</option>
											<option value="Delivery">ASAP Delivery(30mins)</option>
											<option value="SelfPickup">ASAP Self Pickup(30mins)</option>
										</select>
										<input type="text" name="add" placeholder="Delivery Address *" style="background-color: white">
										<input type="text" name="contact" placeholder="Recipient's Phone Num *" style="background-color: white">
										<input type="email" name="email" placeholder="Billing Email Address *" style="background-color: white">
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="cart-total-details">
									<h3 align="center">Cart Total</h3><br>
									<ul class="cart-total-card">
										<li>Subtotal<span>RM<?php echo number_format($total, 2); ?></span></li>
										<li>Delivery Fee<span>Free</span></li>
										<li class="total">Total<span>RM<?php echo number_format($total, 2); ?></span></li>
									</ul>
									<center><input type="submit" name="submit" value="PROCEED TO CHECKOUT" class="button" href="checkout.php"></center>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
              </body>
              </html>
