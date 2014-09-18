<?php

$con = mysqli_connect('localhost', 'root', '', 'formulier');
$query = mysqli_query($con, "SELECT * FROM `reacties` LIMIT 500");

echo '<table border = "1">';
echo '<tr><th>Naam</th><th>Film</th><th>Serie</th>';
while($reactie = mysqli_fetch_array($query)){
echo '<tr>';
echo "<td>".$reactie['naam']."</td><td>".$reactie['film']."</td><td>".$reactie['serie']."<td>";
echo '</tr>';
}
echo '</table>';
?>