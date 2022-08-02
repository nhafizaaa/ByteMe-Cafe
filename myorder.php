<?php

session_start();
include('db.php');
$email=$_SESSION['email'];
$result=mysqli_query($con,"SELECT * FROM sales where email='$email'")or die(mysqli_error());
?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Order</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
 <style>


 body { 
  margin: 0;
  font-family: 'Roboto', sans-serif;
  font-size:15px;
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: white;
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
  <a href="rate.php">Feedback</a>
	<a href="logout.php">Log Out</a>

</div>
</div>
</div>
<br>
<br>
<br>

<?php
if (mysqli_num_rows($result) > 0) {
?>
<center><h1>My Order </h1></center>
<br><center>
  <table>
  
  <tr>
  <th>ID</th>
    <th>Item Name</th>
    <th>Quantity</th>
    <th>Total(RM)</th>
    <th>Customer Name</th>
    <th>Option</th>
    <th>Order Date</th>
    <th>Status</th>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["p_names"]; ?></td>
    <td><?php echo $row["quantity"]; ?></td>
    <td><?php echo $row["total"]; ?></td>
    <td><?php echo $row["cust_name"]; ?></td>
    <td><?php echo $row["shipping"]; ?></td>
    <td><?php echo $row["sales_date"]; ?></td>
    <td><?php echo $row["status"]; ?></td>
</tr>

<?php
$i++;
}
?>

</table></center>

 <?php
}
else{
    echo "No result found";
}
?>
</body>
</html>