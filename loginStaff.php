<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'coffeeorder';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['email'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}


if ($stmt = $con->prepare('SELECT id, password FROM staff WHERE email = ?')) {
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if ($_POST['password'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['id'] = $id;
            //$_SESSION['fName'] = $_POST['fName'];

            // SQL query to select data from database 
            //$sql = "SELECT fName FROM customer"; 
            //$result = $con->query($sql); 
            //$con->close(); 
            //$_SESSION['fName'] = $_POST['fName'];
    
            // Welcome message 
            $_SESSION['success'] = "You have logged in staff account,"; 
            header('Location: homeStaff.php');

        } else {
            // Incorrect password
            echo '<script>alert("Incorrect email and/or password")</script>';
            echo '<script>window.location="loginStaff.html"</script>';


        }
    } else {
        // Incorrect username
        echo 'Incorrect username and/or password!';
        echo '<script>window.location="loginStaff.html"</script>';

    }


	$stmt->close();
}
?>