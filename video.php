<html>
<head>
<script>
onload=function load(){
showVidGroup('');}
function showVidGroup(str) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("Spot01").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","vidlist.php?group="+str,true);
  xmlhttp.send();
}
function toVideo(vid){
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","enlaredvid?vid="+vid,false);
xmlhttp.send();
}
</script>
<?php require 'header.php';

if(!isset($_SESSION['allVids'])){
require 'vidFromDB.php';
}?>
</head>

<body>
<?php
$groups = $_SESSION['allGroups'];
?> 
<!-- Start List of vid groups -->
<div class="bs-sidebar" style="width: 18%; float:left">
    <ul class="nav bs-sidenav">
		<li style="border-top-right-radius:4px; border-top-left-radius:4px;"><center><b>Select video group</b></center><li>
		<?php foreach($groups as $group){ ?>
        <li><a style="color:#eee" Onclick="showVidGroup('<?=$group?>');"><?=$group?></a></li>
		<?php }?>
		<li style="border-bottom-right-radius:4px; border-bottom-left-radius:4px;"><center><b>----</b></center><li>
    </ul>
</div>
<!-- End List of vid groups -->
<!-- Start List of video's -->
<div id="Spot01"><b>The list of videos you requested will be displayed here in a second.</b></div>
<!-- End List of video's -->
</body>

</html>