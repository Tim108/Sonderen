<!DOCTYPE HTML>

<html>
	
	<head>
		<!-- Een bestand dat de opmaak regelt inladen -->
		<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">

		<!-- De paginatitel die je in de tab van de website ziet -->
		<title>PHP Workshop formulier</title>
	</head>



	<body>
		<div class="container">

		  <!-- De titel die je bovenaan de pagina ziet -->
		  <h1>Bedankt, <?php echo $_REQUEST['naam'];?> voor je deelname!</h1>

			<?php
				$con = mysqli_connect('localhost', 'root', '', 'formulier');
				$name = mysqli_real_escape_string($con, $_REQUEST['naam']);
				$movie = mysqli_real_escape_string($con, $_REQUEST['film']);
				$series = mysqli_real_escape_string($con, $_REQUEST['serie']);
				if($movie == '' || strlen($movie) > 20 || $name == '' || strlen($name) > 20 || $series == '' || strlen($series) > 20){
				echo 'Fuck jou <br> No banana for you! :(';
				echo "<script type='text/javascript'>alert('FUCK YOU!');</script>";
				}
				else {
				echo 'Jouw favoriete film is '.$movie.'<br>';
				echo 'Jouw favoriete serie is '.$series;
				
				
				echo '<br><br>';
				echo 'Banana for you';
				echo '<img src=\'banana.png\' border=0>';
				 
				mysqli_query($con, " INSERT INTO `reacties` (naam,film,serie) VALUES ('$name', '$movie', '$series') ");
				
				
				}
			?>
		</div>
	</body>

</html>