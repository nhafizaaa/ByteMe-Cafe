

<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Update Status</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
 <style>
 body { 
  margin: 0;
  font-family: 'Roboto', sans-serif;
  font-size:16px;
}
 input[type=text] {
  width: 100%;
  padding: 10px 20px;
  margin: 10px 0;
  box-sizing: border-box;
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
.button {
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
	font-family: 'Roboto', sans-serif;

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
<?php
 include 'db.php';
 $id = $_GET['id'];
 $data = mysqli_query($con,"select * from sales where id='$id'");
 while($d = mysqli_fetch_array($data)){
   ?>
   <center>
     <br>
     <br>
 		<form method="post" action="update.php">
     <table >
				<tr>			
					<td>Status:</td>
					<td>
          <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<select name="status">
            		<option value= "">--CHOOSE ONE--</option>

            	
            		<option value="In Progress">In Progress</option>
            		<option value="Delivery">Delivery</option>
            	</select>
          </td>
          <tr>
          <td>&nbsp</td>
          <td>&nbsp</td>
        </tr>
       
 </table>
 <center> <input type="submit" name="submit"value="Update"class="button" ></center>
 </form>
 </center>
 <?php 
	}
  ?>
  </body>
</html>
