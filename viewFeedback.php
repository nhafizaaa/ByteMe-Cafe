<?php
include_once 'db.php';
$result = mysqli_query($con,"SELECT * FROM feedback");
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
  font-size:14px;
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
  <div style="width:1350px; margin:20 auto;">

<div class="header">
  <a href="#default" class="logo">ByteMe Cafe</a>
  <div class="header-right">
  <a href="homeStaff.php">Home</a>
  <a href="menuStaff.php">Menu</a>
  <a href="vieworder.php">Orders</a>
	<a href="logout.php">Log Out</a>
</div>
</div>
</div>
<br>

<center><h1>Customer's Feedbacks</h1></center>
<br><br>

<?php
if (mysqli_num_rows($result) > 0) {
?>
  <center><table>
  
  <tr>
  <th>ID</th>
    <th>Customer's Name</th>
    <th>Feedback</th>
    <th>Star Rating (out of 5)</th>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["fName"]; ?></td>
    <td><?php echo $row["feedback"]; ?></td>
    <td><?php echo $row["rating"]; ?></td>
</tr>

<?php
$i++;
}
?>

</table></center>
<br><br><br>
 <?php
}
else{
    echo "No result found";
}
?>
</body>
</html>