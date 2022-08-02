
<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<title>ByteMe Cafe</title>
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

</div>
</div>

<center> <img src= "img/2.png"width=1200 height=300></center>
<br>
<br>
<br>
<br>
<div class="content">
  <center> <h1>Choose Log In Options</h1> 
  <a class="button" href="loginCust.html">Login as Customer</a>
  <a class="button" href="loginStaff.html">Login as Staff</a>
  <br>
  <br>
  Don't have an account? <a href="registerCust.html">Register Now!</a>
  
  </center>

</div>
<br>
<br>
</body>
</html>