<?php
// Get values to check
$value = $_GET['query'];
$formfield = $_GET['field'];
// connect to databse
		$db = mysqli_connect('localhost','root','') or die ("could not connect to mysql"); 
		mysqli_select_db($db, "sonderen") or die ("no database"); 
// Check Valid or Invalid user name
if ($formfield == "username1") {
$sql = "SELECT uid FROM users WHERE uName='$value'";
$mysqli_result = 1;
$mysqli_result = mysqli_query($db,$sql);
if (strlen($value) < 3) {
echo "Your username must contain more than 3 characters.";
} elseif (preg_match('/[^a-zA-Z0-9._-]/',$value)) {
echo "Your username may only contain letters, digits, underscores, dashes and dots.";
} elseif (mysqli_num_rows($mysqli_result) != 0) {
echo "That username is already in use.";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid password
if ($formfield == "password1") {
if (strlen($value) < 3) {
echo "That password is too short.";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid email
if ($formfield == "email1") {
$sql = "SELECT uid FROM users WHERE email='$value'";
$mysqli_result = 1;
$mysqli_result = mysqli_query($db,$sql);
if (!preg_match('/([\w\-]+\@[\w\-]+\.[\w\-]+)/',$value)) {
echo "That email address is invalid.";
} elseif (mysqli_num_rows($mysqli_result) != 0) {
echo "That email address is already in use.";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid first name
if ($formfield == "firstName1") {
if (preg_match('/[^A-Za-z -]/',$value)) {
echo "That first name is invalid.";
} elseif (strlen($value) < 2) {
echo "That first name is invalid.";
}else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid second name
if ($formfield == "scndName1") {
if (preg_match('/[^A-Za-z -]/',$value)) {
echo "That second name is invalid.";
} elseif (strlen($value) < 2) {
echo "That first name is invalid.";
} else {
echo "<span>Valid</span>";
}
}
?>