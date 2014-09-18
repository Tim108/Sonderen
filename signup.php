<html>
<script src="js/validation.js"></script>
<body>
<div align="center">
<div class="jumbotron" style="max-width: 640px; background-color:#64974F">
<h1 align="center">Sign up</h1>
<div style="width:90%; height:2px; background-color:#333333;"></div>
<form id="registerForm" action="register.php" method="post" align="left">
	<div class="form-group">
	<label for="inputFirstName">Name</label><h6 id="firstName1"></h6>
	<input type="text" class="form-control" name="inputFirstName" id="inputFirstName" placeholder="Name" onblur="validate('firstName1', this.value)">
	<label for="inputScndName">Second name</label><h6 id="scndName1"></h6>
	<input type="text" class="form-control" name="inputScndName" id="inputScndName" placeholder="Second name" onblur="validate('scndName1', this.value)">
	</div>
    <div class="form-group">
        <label for="inputEmail">Email</label><h6 id="email1"></h6>
        <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" onblur="validate('email1', this.value)">
    </div>
    <div class="form-group">
		<label for="inputUsername">Username</label><h6 id="username1"></h6>
        <input type="text" class="form-control" name="inputUsername" id="inputUsername" placeholder="Username" onblur="validate('username1', this.value)">
        <label for="inputPassword">Password</label><h6 id="password1"></h6>
        <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password" onblur="validate('password1', this.value)">
    </div>
    <input type="button" class="btn btn-primary" onclick="checkForm()" value="Submit">
</form>
</div>
</div>
</body>
</html>