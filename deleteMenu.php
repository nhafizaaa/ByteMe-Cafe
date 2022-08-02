<?php 
// koneksi database
include 'db.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($con,"delete from menu where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:menuStaff.php");
 
?>