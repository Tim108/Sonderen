<?php
// get info from form
$name = $_POST['inputFirstName'];
$scndname = $_POST['inputScndName'];
$email = $_POST['inputEmail'];
$username = $_POST['inputUsername'];
$password = $_POST['inputPassword'];
$password = hash("sha256", $password);
// open database connection
$db = mysqli_connect('localhost','root','') or die ("could not connect to mysql"); 
		mysqli_select_db($db, "sonderen") or die ("no database"); 
// create and execute sql statement
$sql = "INSERT INTO users (uName, pass, firstName, scndName, email) VALUES ('$username', '$password', '$name', '$scndname', '$email');";
mysqli_query($db,$sql);
// close database connection
mysqli_close($db);
// set login variables
session_start();
$_SESSION['username0'] = $username;
$_SESSION['password0'] = $password;
// redirect to login
header('Location: login.php');
?>