<?php
include 'auth.php';
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List Menu</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	 <link rel="shortcut icon" href="images/hat.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="newstyle.css">
	<link rel="stylesheet" type="text/css" href="products.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
  <style>
   
  body { 
  margin: 0;
  font-family: 'Roboto', sans-serif;
  font-size:16px;
  }

* {
  max-width: 1600px;
  margin: auto;
}

.button{
  text-align: center;
  float: center;
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

.container {
  border-radius: 5px;
  background-color: #fff;
  padding: 20px;
}

.name{
  font-size:22px;
  font-weight:bold;
}
.price{
  font-size:20px;
  color:grey;
}
.desc{
font-size:15px;
}
    </style>
</head>

<body>
<div style="width:1330px; margin:20 auto;">
<div class="header">
  <a href="#default" class="logo">ByteMe Cafe</a>
  <div class="header-right">
  <a href="homeStaff.php">Home</a>
  <a href="vieworder.php">Orders</a>
  <a href="viewFeedback.php">Feedbacks</a>
	<a href="logout.php">Log Out</a>
</div>
</div>
</div>

<br><center><div class="content">
<center><b><p style=" font-family: 'Roboto', sans-serif; font-size:24px;">MENU</p></b></center>
<div class="button" style="background-color:#f68b1e; padding: 16px; color: white; float: right;">
<a href="addMenu.html" class="button" name="add_menu" style="background-color:#f68b1e; color: white;" value="Add Menu">Add Menu</a>
  </div><br><br><br>
  </div></center>
  <div class="content">
	<div class="row" align="center">
	<?php
		$query = "SELECT * FROM menu";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
	?>
	<div class="col-md-6">
	<div class="product-top">
	<div class="product-bottom text-center">

	<img src="<?php echo $row["image"]; ?>" name="image">
	<div class="name"><?php echo $row["name"]; ?></div>
  <div class="price">RM <?php echo $row["price"]; ?></div>
  <br>
  <div class="des"><?php echo $row["des"]; ?></div>

	<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
  <input type="hidden" name="hidden_des" value="<?php echo $row["des"]; ?>">

	<br>
  <a href="editMenuu.php?id=<?php echo $row["id"]; ?>" class="button" name="add_menu" style="background-color:#f68b1e; padding: 5px; color: white;" value="Update">Update</a>
  <a onClick="return confirm('Are you sure you want to delete?')" href="deleteMenu.php?id=<?php echo $row["id"]; ?>"  class="button" name="add_menu" style="background-color:#f68b1e; padding: 5px; color: white;" value="Delete">Delete</a>

	
	</form>
</div>
</div>	
</div>
	<?php
			}
		}
	?>
</div></div><br><br>
  </body>
  </html>