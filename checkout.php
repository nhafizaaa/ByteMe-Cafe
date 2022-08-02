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
			$count = count($_SESSION["shopping_cart"]);
			$cust_array = array(
				'item_id'			=>	$_GET["id"],
				'cust'				=>	$_POST["custname"],
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
		$_SESSION["billing"][0] = $cust_array;
	}
}

?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Checkout Order</title>
	<link rel="stylesheet" type="text/css" href="newstyle.css">
	<link rel="stylesheet" type="text/css" href="checkout.css">
	<link rel="stylesheet" type="text/css" href="product.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"/>
	 <link rel="shortcut icon" href="images/WebLogo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
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
.title{
  font-size:22px;
  font-weight: bold;
}
.price{
  font-size:20px;
  color:grey;
}
.desc{
  font-size:15px;
  text-align:center;
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
<a href="cart.php">My Cart</a>
<a href="myorder.php">My Order</a>
    <a href="rate.php">Feedback</a>
	<a href="logout.php">Log Out</a>
</div>
</div>
</div>

<div class="page-area cart-page spad">
		<div class="container">
			<?php
				if(!empty($_SESSION["shopping_cart"]))
				{
					foreach($_SESSION["shopping_cart"] as $keys => $row)
				{
			?>
			<form class="checkout-form" method="post" action="order.php?action=add&id=<?php echo $row["item_id"]; ?>">
			<?php
					}
				}
			?>
				<div class="col-lg-6">
						<div class="order-card">
							<div class="order-details">
								<div class="od-warp">
								<h4 class="checkout-title">DELIVERY DETAILS</h4>
						<?php
							if(!empty($_SESSION["billing"]))
							{
								foreach($_SESSION["billing"] as $keys => $custs)
								{
						?>
						<div class="row">
						<table class="order-table">
						<tbody>
							<tr>
							<td> Name : </td>
							<td><input type="text" value="<?php echo $custs["cust"]; ?>"disabled></td>
							</tr>
							<tr>
							<td> Address : </td>
							<td><input type="text" value="<?php echo $custs["address"]; ?>" disabled></td>
							</tr>
							<tr><td>Contact Number : </td>
							<td><input type="text" value="<?php echo $custs["contact"]; ?>"disabled></td>
							</tr><tr>
							<td> Email: </td>
							<td><input type="text" value="<?php echo $custs["email"]; ?>" disabled></td>
							</tr></tbody>
							</table>	
						</div>
						</div></div></div>
						<?php
								}
							}
						?>
					</div>
					<div class="col-lg-6">
						<div class="order-card">
							<div class="order-details">
								<div class="od-warp">
									<h4 class="checkout-title">YOUR ORDER</h4>
									<table class="order-table">
										<thead>
											<tr>
												<th>Product</th>
												<th>Quantity</th>
												<th>Total</th>
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
												<td><?php echo $values["item_name"]; ?></td>
												<td><?php echo $values["item_quantity"]; ?></td>
												<td>RM <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
											</tr>
										</tbody>
										<tfoot>
										<?php
											$total = $total + ($values["item_quantity"] * $values["item_price"]);
										}
										?>
											<tr class="order-total">
												<th>Total</th>
												<th>&nbsp;</th>
												<th>RM<?php echo number_format($total, 2); ?></th>
											</tr>
										</tfoot>
									</table>
									<?php
											}
									?>
									<br>
								<center>	<input type="submit" name="submit" value="PROCEED TO CHECKOUT" class="button" href="order.php"></center>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>




</body>

</html>