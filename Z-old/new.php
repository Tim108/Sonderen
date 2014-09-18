<?php

$a = 1;
$b = 1;
$c = $a + $b;

if($c == 2){
echo 'hahah!<br>'.$a.'+'.$b.'='.$c.'! <br>:D';
}
else{
echo 'Bullshit!';
}

$lijstje = array('herman', 'paulus', 'banaan');
echo '<br>'.$lijstje[2];
echo'<br>';

function printEggs($list){
foreach($list as $elem){
echo $elem.'<br>';
}
}

printEggs($lijstje);

?>