<?php session_start(); ?>
<html>
<meta charset="utf-8"> 
<title>Sonderen</title>

<head>
 <link rel="stylesheet" href="css/lavish-bootstrap.css" type="text/css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/pageLoader.js"></script>
<script src="js/validation.js"></script>
</head>

<body>
	<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#bs-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse"
			id="bs-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<li><a class="disabled">Tim Sonderen</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="javascript:void(0)" id="toHome" onclick="loadInMain('home.php')">Home</a></li>
				<li><a href="javascript:void(0)" id="toProjects" onclick="loadInMain('projects.php')">Projecten</a></li>
				<li><a href="javascript:void(0)" id="toRes93" onclick="loadInMain('res93.php')">Over mij</a></li>
				<li><a href="javascript:void(0)" id="toContact" onclick="loadInMain('contact.php')">Contact</a></li>
				<li><div class="divider-vertical"></div></li>
				 <li class="dropdown">
                <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle"><?php if(isset($_SESSION['uid'])){$fn=$_SESSION['firstName']; $sn=$_SESSION['scndName']; echo "$fn $sn";} else {echo "Account";}?><b class="caret"></b></a>
                <ul class="dropdown-menu" style="background-color: transparent;">
				
				<?php if(isset($_SESSION['uid'])): ?>
                    <li><input href="javascript:void(0)" onclick="loadInMain('profile.php')" class="btn btn-primary wide" value="Profiel"></li>
                    <li><input href="javascript:void(0)" onclick="load('/logout.php')" type="button"class="btn btn-primary wide" value="Log uit"></li>
				<?php else: ?>
				<form method="post" action="login.php">
					<li><input class="form-control" type="text" placeholder="Gebruikersnaam" name="uname"></li>
					<li><input class="form-control" type="password" placeholder="Wachtwoord" name="pw"></li>
					<li><input type="submit" class="btn btn-primary wide" value="Sign in"></li>
					<li><input href="javascript:void(0)" onclick="loadInMain('signup.php')" class="btn btn-primary wide" value="Sign up"></li>
				</form>
				<?php endif; ?>
                </ul>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid --> </nav>
	<div id="mainPage"></div> <!-- div where the actual page is displayed -->
	
</body>
</html>
