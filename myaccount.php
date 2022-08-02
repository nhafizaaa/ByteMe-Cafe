<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>My Account</title>
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

table {
  width: 630px;
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
  <div style="width:1330px; margin:20 auto;">

<div class="header">
  <a href="#default" class="logo">ByteMe Cafe</a>
  <div class="header-right">
  <a href="home.php">Home</a>
  <a href="menu.php">Menu</a>
    <a href="cart.php">My Cart</a>
    <a href="myorder.php">My Order</a>

    <a href="rate.php">Feedback</a>
	<a href="logout.php">Log Out</a>
</div>
</div>


</div>

  <?php
  include 'db.php';
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($con,"SELECT * FROM customer where id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
  <br>
  <br>
  <br>
  <center><h1>My Account</h1></center>
  <br>
  
  <center>
        <form method="post" action="#" >
       <table>
<tr>
         <td>   <label>First Name</label></td>
			
          <td>  <input type="text"  name="fName"  placeholder="Enter your first name" required value="<?php echo $row['fName']; ?>"></td>
            </tr>
			<tr>
         
           <td> <label>Last Name</label></td>

           <td> <input type="text"name="lName"  placeholder="Enter your last name" required value="<?php echo $row['lName']; ?>"></td>
     
          </tr>
		  <tr>
           <td> <label>Phone Number</label></td>
            <td><input type="text"  name="phoneNum"  placeholder="Enter your phone number" value="<?php echo $row['phoneNum']; ?>"></td>
        </tr>
		<tr>
            <td><label>Email</label></td>
           <td> <input type="text" name="email"  required placeholder="Enter your email" value="<?php echo $row['email']; ?>"></td>
        </tr>   
		<tr>
		   <td> <label>Address</label></td>
            <td><input type="text"  name="address"  required placeholder="Enter your address" value="<?php echo $row['address']; ?>"></td>
         </tr>
		 <tr>
         <td>   <label>Password</label></td>
          <td>  <input type="text"  name="password"  required placeholder="Enter your password" value="<?php echo $row['password']; ?>"></td>
            </tr>
         </table>
		 <center><input type="submit" name="submit"value="Update"class="button" ></td>

        </form>
	
      <br>
      <br>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $phoneNum = $_POST['phoneNum'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = $_POST['password'];

      $query = "UPDATE customer SET fName = '$fName',
                      lName = '$lName', phoneNum = $phoneNum, email = '$email',address = '$address',password = '$password'
                      WHERE id = '$id'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    ?>
                     <script type="text/javascript">
            alert("Update Successful.");
            window.location = "myaccount.php";
        </script>
        <?php
             }               
?>