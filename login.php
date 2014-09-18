<?php
		// connect to databse
		$db = mysqli_connect('localhost','root','') or die ("could not connect to mysql"); 
		mysqli_select_db($db, "sonderen") or die ("no database"); 
		// get username and password
		session_start();
		$username;
		$password;
		if(isset($_SESSION['username0'])){
		$username = $_SESSION['username0'];
		$password = $_SESSION['password0'];
		} else {
		$username =  $_POST['uname'];
		$password = $_POST['pw'];
		$password = hash("sha256", $password);
		}
		// get user from database
		$sql = "SELECT * FROM users WHERE uName='$username'";
		$mysqli_result = 1;
		$mysqli_result = mysqli_query($db,$sql);?>
		<?php
		if($row = mysqli_fetch_array($mysqli_result)) {
			if($password == $row['pass']) {
				$_SESSION['uid'] = $row['uid'];
				$_SESSION['firstName'] = $row['firstName'];
				$_SESSION['scndName'] = $row['scndName'];
				$_SESSION['isFM'] = $row['isFM'];
			}
		}
		// close database and redirect
		mysqli_close($db); 
		header("Location: /");
	?>