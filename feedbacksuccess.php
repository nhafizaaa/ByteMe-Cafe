<?php
session_start();
include('db.php');

?>
<html>
<head>
<title>Menu</title>
<style>
	body{
     font-family: Arial, Helvetica, sans-serif;
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
    <a href="feedback.php">Feedback</a>
	<a href="logout.php">Log Out</a>
</div>
</div>
<h3> 
                    <?php

                        echo $_SESSION['feedback'];  
                        echo" ";
                        echo $_SESSION['email'];
                        //echo $_SESSION['fName'];
                    ?> 
                </h3> 
</div>
</body>
</html>