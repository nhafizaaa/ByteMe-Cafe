<?php

session_start();
include('db.php');

?>
<!DOCTYPE html>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Feedback</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="ratecss.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
 <style>
     body { 
  margin: 0;
  font-family: 'Roboto', sans-serif;
  font-size:16px;
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



	</style>
</head>
<body>

<div style="width:1330px; margin:20 auto;">

<div class="header">
  <a href="#default" class="logo">ByteMe Cafe</a>
  <div class="header-right">
  <div class="header-right">
  <a href="home.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="myaccount.php">My Account</a>
    <a href="cart.php">My Cart</a>
    <a href="myorder.php">My Order</a>

	<a href="logout.php">Log Out</a>
</div>
</div>

</div>

<form id="form" action="feedback.php" method="post">
  
  <fieldset class="stars">
    <input type="radio" name="rating" id="star1" value = "5">
    <label class="fa fa-star" for="star1"></label>
    <input type="radio" name="rating" id="star2" value = "4">
    <label class="fa fa-star" for="star2"></label>
    <input type="radio" name="rating" id="star3" value = "3">
    <label class="fa fa-star" for="star3"></label>
    <input type="radio" name="rating" id="star4" value = "2">
    <label class="fa fa-star" for="star4"></label>
    <input type="radio" name="rating" id="star5" value = "1">
    <label class="fa fa-star" for="star5"></label>
    <input type="radio" name="rating" id="star-reset"/>
    <label class="reset" for="star-reset">reset</label><br>
    <div class="button">
      <input type="submit" name="submit" id="submit"/>
      <label class="submit" for="submit">submit</label>
    </div>

   
    <figure class="face"><i></i><i></i>
      <u>
        <div class="cover"></div>
      </u>
    </figure>
  </fieldset>
 
  <div class = "feedbackform">
      <table>
          <tr>
              <td> Email</td> <td>:</td>
              <td> 
    <h3> 
       
      <?php
          echo $_SESSION['email'];
      ?> </td></tr>

      
        <div class = "a">
        <br>
        <center><h1>FEEDBACK</h1></center>
        </div>
<br>
<br>
      <tr><td> Name</td><td>: </td>
    <td> <label for="fName"></label>
    <input type="text" id="fName" name="fName" placeholder="Your name.."> </td>
</tr><tr>
    <td> Feedback </td><td>: </td>
   <td> <label for="feedback"></label>
    <input type="text" id="feedback" name="feedback" placeholder="Feedback.."></td></tr>
</table>
  </div>
</form>
 
</body>
</html>