<?php
if(!isset($_SESSION['allVids'])){
require 'vidFromDB.php';
}
$ids;
if(isset($_GET['group']) && $_GET['group'] != ""){
$ids = $_SESSION["vg" + $_GET['group']];
}else{
$ids = $_SESSION['allVids'];
}

echo '<div class="container-fluid" style="float:right; width: 80%; padding:0px;"><div class="row" style="margin:0px;">';
foreach($ids as $id){
echo '<div style="width:320px; margin-right:3%; margin-left:0px;" class="col-xs-3 pull-right"><center><iframe width="300px" height="175px"src="//www.youtube.com/embed/';
echo $_SESSION["vid"+$id][0];
echo '?rel=0" frameborder="0" allowfullscreen></iframe><p><b>';
echo $_SESSION["vid"+$id][1];
echo '</b> &nbsp; <ins><sub>';
echo $_SESSION["vid"+$id][3];
echo '</sub></ins></p><p>';
echo $_SESSION["vid"+$id][2];
echo '</p></center></div>';
}
echo '</div></div></div>';
?>