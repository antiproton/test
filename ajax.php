<?php
#--------------------------------------------------------------------------------------
#
# Dr. R. Urban
# 28.3.2016
#
#--------------------------------------------------------------------------------------
$daten = $_POST['daten'];
$daten_teile = explode("##", $daten);

$aktion = $daten_teile[0]; 
#--------------------------------------------------------------------------------------
if($aktion == "speichern"){
$name = $daten_teile[1]; 
$x = $daten_teile[2]; 
$y = $daten_teile[3]; 
#echo "<br>";
#echo "Aktion: $y";
#echo "<br>";

$koordinaten = "$name##$x##$y";

$datei = fopen("data/kordinaten.dat","w");
fwrite($datei, $koordinaten);
fclose($datei);
}
#--------------------------------------------------------------------------------------
if($aktion == "restore"){

#--------------------------------------------------------------------------------------

header('Content-Type: text/html; charset=utf-8'); // sorgt für die korrekte Kodierung
header('Cache-Control: must-revalidate, pre-check=0, no-store, no-cache, max-age=0, post-check=0'); // ist mal wieder wichtig wegen IE

$datei = fopen("data/kordinaten.dat","r+");
$kordinaten = fgets($datei, 50);
fclose($datei);




echo $kordinaten;

}
?>