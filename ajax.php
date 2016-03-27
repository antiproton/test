<?php

$aktion = $_POST['aktion'];
#--------------------------------------------------------------------------------------

header('Content-Type: text/html; charset=utf-8'); // sorgt für die korrekte Kodierung
header('Cache-Control: must-revalidate, pre-check=0, no-store, no-cache, max-age=0, post-check=0'); // ist mal wieder wichtig wegen IE

$zufall = rand(1,1000);
echo $zufall;
echo "<br>";
echo "Aktion: $aktion";
?>