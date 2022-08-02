<?php

session_start();
include('db.php');

?>

<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<title>Menu</title>
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
.content {
	width: 1000px;
	margin: 0 auto;
}
.content h2 {
  margin: 0;
	padding: 25px 0;
	font-size: 22px;
	border-bottom: 1px solid #e0e0e3;
	color: black;
}
.content > p, .content > div {
	box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
	margin: 25px 0;
	padding: 25px;
	background-color: #fff;
}
.content > p table th, .content > div table th {
	padding: 5px;
}
.content > p table th:first-child, .content > div table th:first-child {
	font-weight: bold;
	color: grey;
	color: ;
	padding-right: 15px;
}
.content > div p {
	padding: 5px;
  margin: 0 0 10px 0;
  color: #f68b1e;
  font-size:16px;

}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #f68b1e;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-family: 'Roboto', sans-serif;

}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #fff;
  padding: 20px;
}

	</style>

</head>
<body>
<div style="width:1200px; margin:20 auto;">

<div class="header">
  <a href="#default" class="logo">ByteMe Cafe</a>
  <div class="header-right">
    <a href="menu.php">Menu</a>
    <a href="myaccount.php">My Account</a>
    <a href="cart.php">My Cart</a>
    <a href="myorder.php">My Order</a>

    <a href="rate.php">Feedback</a>
	<a href="logout.php">Log Out</a>
</div>
</div>
</div>
<center>
<?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php
                        echo $_SESSION['success'];  
                        unset($_SESSION['success']); 
                        echo" ";
                        echo $_SESSION['email'];
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> </center>

<center> <img src= "img/2.png"width=1200 height=300></center>
<br>
<br>
<br>
<br>
<div class="content">

   <center> <h2>Frequently Asked Questions</h2></center>
			<div>
        <br>
      <p><b>How can I get ByteMe delivery?</b></p>
      In order to get ByteMe delivery, browse through the menu, form your order,
       afterward, just proceed to place an order and payment . Your meal will be delivered to you in no time!
      <br>
      <br>
      <p><b> Does ByteMe deliver 24 hours?</b></p>
Yes, ByteMe delivers 24 hours. ByteMe is there for you to quench your thirst at any time of the day. 
      <br>
      <br>
      <p><b> Can you pay cash for ByteMe?</b></p>
      Yes, you can pay cash on delivery for ByteMe.
      <br>
      <br>
      <p><b>How much does ByteMe charge for delivery?</b></p>
      Delivery fee charged by ByteMe depends on location you are ordering from.
      <br>
      <br>
      <p><b> Can I order ByteMe for someone else?</b></p>
Yes. During checkout, just update the name and delivery address of the person you're ordering for. 
Please keep in mind that if the delivery details are not correct and the order cannot be delivered.
<br>
<br>

			</div>
    </div>
    <div class ="content">
     <center> <h2>Contact Us</h2></center>
      <div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Phone Number</label>
    <input type="text" id="lname" name="lastname" placeholder="Your phone number..">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="lastname" placeholder="Your email..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div></div></div>

</body>
</html>