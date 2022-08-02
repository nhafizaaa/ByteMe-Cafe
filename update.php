<?php

include 'db.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$status = $_POST['status'];

// update data ke database
mysqli_query($con,"update sales set status='$status' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:vieworder.php");
 
?>