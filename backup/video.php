<html>

<head>
<?php require 'header.php' ?>

</head>

<body>
<?php
$videos = array();
$titles = array();
$descriptions = array();
$dates = array();
$groups = array();
?>
<!-- Above lists should come from the database -->
<?php 
$db = mysqli_connect('localhost','root','') or die ("could not connect to mysql"); 
mysqli_select_db($db, "sonderen") or die ("no database"); 
$result = 1;
$result = mysqli_query($db,"SELECT * FROM video");

while($row = mysqli_fetch_array($result)) {
  array_push($titles, $row['title']);
  array_push($descriptions, $row['description']);
  array_push($videos, $row['src']);
  array_push($dates, $row['date']);
}

$gSelected;
$query = "SELECT DISTINCT name FROM videogroup";
$result = 1;
$result = mysqli_query($db,$query);

while($row = mysqli_fetch_array($result)) {
array_push($groups, $row['name']);
}

mysqli_close($db); 
?> 
<!-- Start List of vid groups -->
<div class="bs-sidebar affix round-right" style="width: 20%;">
    <ul class="nav bs-sidenav">
		<li><center><b>Select video group</b></center><li>
		<?php foreach($groups as $group){ ?>
        <li><a href="video.php" style="color:#eee"><?=$group?></a></li>
		<?php }?>
    </ul>
</div>
<!-- End List of vid groups -->
<!-- Start List of video's -->
<div class="container-fluid" style="float:right; width: 80%;">
<div class="row">
<?php
foreach($videos as $i => $vid){
?>
<div style="width:320px; margin-right:3%; margin-left:0px;" class="col-xs-3 pull-right">
<center>
<iframe width="300px" height="175px"
src="//www.youtube.com/embed/<?=$vid?>?rel=0" 
frameborder="0" allowfullscreen></iframe>
<p><b><?=$titles[$i]?></b> &nbsp; <ins><sub><?=$dates[$i]?></sub></ins></p>
<p><?=$descriptions[$i]?></p>
</center>
</div>
<?php } ?>
</div>
</div>
</div>
<!-- End List of video's -->
</body>

</html>