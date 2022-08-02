<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Edit Menu</title>
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
 .container {
  padding: 10px;
  background-color: white;
  max-width: 1000px;
}
.label{
  text-align:left;
}
 body { 
  margin: 0;
  font-family: 'Roboto', sans-serif;
  font-size:16px;
}
* {
  max-width: 1600px;
  margin: auto;
}
input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
textarea{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
image{
  padding: 1000px;
  border: 1000px solid #f1f1f1;
  width: 100%;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
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

body { 
  margin: 0;
  font-family: 'Roboto', sans-serif;
  font-size:16px;
}
* {
  max-width: 1600px;
  margin: auto;
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


 </style>
  </head>
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
<br>
<center><b><p style=" font-family: 'Roboto', sans-serif; font-size:35px;">Edit Menu</p></b></center>

</div><?php
 include 'db.php';
 $id = $_GET['id'];
 $data = mysqli_query($con,"SELECT * from menu WHERE id='$id'");
 while($d = mysqli_fetch_array($data)){
?>
  <center>

  <form method="post" action="updateMenu.php"enctype="multipart/form-data" >
    <div class="container">

      <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
      <img src="<?php echo $d['image']; ?>"height="200" width="250" >

<br>
      <label>Menu Name</label>      
      <input type="text"  name="name" required placeholder="Enter menu name" style="text-align: center;" value="<?php echo $d['name']; ?>" />

      <label>Menu ID</label>
      <input type="text"name="menuID" required placeholder="Enter menu id" style="text-align: center;" value="<?php echo $d['menuID']; ?>" />

      <label>Price</label>
      <input type="text"  name="price" required placeholder="Enter menu price" style="text-align: center;" value="<?php echo $d['price']; ?>"/>
        
      <label>Description</label>
      <input type="text" name="des" required placeholder="Enter menu description" style="text-align: center;" value="<?php echo $d['des']; ?>"></textarea>
      
      <label>Upload Image</label>      
     <input type="file" name="image" value="<?php echo $d['image']; ?>">      <br><br><br><br>
      <input type="submit" name="submit" value="Update" class="button" style="width:15em; background-color:#f68b1e; padding: 5px; color: white;"><br><br>
      </div>
  </form>
</center>
       

 <?php 
  }
  ?>

 <?php 
  