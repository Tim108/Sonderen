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
		  <h1>Enqu&ecirc;teformulier</h1>

		  <br /><br />

		  <p>Wil je dit formulier uiterlijk vandaag, [<?php echo date('d-m-y');?>], invullen?</p>

		  <br /><br />

		  <!-- Aankodigen dat er een formulier komt -->
		  <form method="post" action="verwerk_formulier.php">

		    <!-- De opmaak van dit formulier wordt gedaan via een tabel -->
		  	<table class="table">

		  	    <!-- Een rij voor de tabel, met een vraag  en een invoerveld -->
		  		<tr><td>Wat is je naam?</td><td><input type="text" name="naam" /></td></tr>

		  		<tr><td>Wat is je favoriete film?</td><td><input type="text" name="film" /></td></tr>

		  		<tr><td>Wat is je favoriete serie?</td><td><input type="text" name="serie" /></td></tr>

		  		<!-- De rij met de knop om het formulier te versturen -->
		  		<tr><td></td><td><input type="submit" name="submit" value="Verstuur formulier" /></td></tr>

		  	<!-- De tabel afsluiten -->
		  	</table>

		  <!-- Het formulier afsluiten -->
		  </form>

		</div>
	</body>

</html>