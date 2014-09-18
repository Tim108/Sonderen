<html>
<head>
<link href="css/styles.css" rel="stylesheet">
<meta content="width=320px, initial-scale=1, user-scalable=yes"
	name="viewport" />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

<style type="text/css">
.content {
	width: 800px;
	margin: auto;
}
</style>

<title>Tim</title>
</head>

<body>
	<BR>
	<CENTER>
		<!--<a href="/concordia"><img src="res/banana.png" alt="timsonderen.nl" /></a> -->
	</CENTER>
	<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse"
			id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="/">Home</a></li>
				<li><a href="#">Projects</a></li>
				<li><a href="video.php">Videos</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			
			
				 <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Account <b class="caret"></b></a>
                <ul class="dropdown-menu">
				<?php if(isset($_GET['uid'])): ?>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">My favorites</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Log out</a></li>
				<?php else: ?>
				<form method="post" id="loginForm">
					<li><input placeholder="Username"></li>
					<li><input placeholder="Password"></li>
					<li><input type="submit" class="btn btn-primary" value="Confirm"></li>
				</form>
				<?php endif; ?>
                </ul>
            </li>
			
			
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid --> </nav>
	
	</html>