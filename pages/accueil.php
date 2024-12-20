<?php
$data=yaml_parse_file('data/accueil.yaml');

echo "<div class='container'><img src='../images/".$data["photo"]."' class='imagebvn' /></div>";
echo "<p>".$data["prenom"]." ".$data["nom"]."</p>";
echo "<p>".$data["accroche"]."</p>";
echo "<p>".$data["presentation"]."</p>";



?>

