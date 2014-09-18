<?php
$ids = array();
$srcs = array();
$titles = array();
$descriptions = array();
$dates = array();
$groups = array();

$db = mysqli_connect('localhost','root','') or die ("could not connect to mysql"); 
mysqli_select_db($db, "sonderen") or die ("no database"); 
$result = 1;
$result = mysqli_query($db,"SELECT * FROM video");

while($row = mysqli_fetch_array($result)) {
  array_push($ids, $row['vid']);
  array_push($titles, $row['title']);
  array_push($descriptions, $row['description']);
  array_push($srcs, $row['src']);
  array_push($dates, $row['date']);
}
$_SESSION['allVids'] = $ids;
foreach($ids as $i => $vid){
$_SESSION['vid' + $vid] = array($srcs[$i], $titles[$i], $descriptions[$i], $dates[$i]);
}

$result = 1;
$result = mysqli_query($db,"SELECT * FROM videogroup ORDER BY name");

$lastG = "";
$temp = array();
$gs = array();
while($row = mysqli_fetch_array($result)) {
  $g = $row['name'];
  $id = $row['vid'];
  echo $g;
  if($g != $lastG){
  array_push($gs, $g);
  $_SESSION['vg' + $lastG] = $temp;
  $temp = array();
   $lastG = $g;
  }
  array_push($temp, $id);
 
}
$_SESSION['vg' + $lastG] = $temp;
$_SESSION['allGroups'] = $gs;


mysqli_close($db); 
?>