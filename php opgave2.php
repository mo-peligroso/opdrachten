<?php

$variabele1 = 10;
$variabele2 = 10;

if($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {

echo "De twee waarden zijn ongelijk";}





$variabele1 = 10;
$variabele2 = 12;

if($variabele1 != $variabele2) {
    echo "De twee waarden zijn ongelijk";}





$variabele1 = 10;
$variabele2 = 10;

if($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else{
    echo "De twee waarden zijn ongelijk";}


//Maak een formulier met 2 input fields (username en password) en een knopje aan.
//Zorg voor dat de ingevoerde data wordt geprint als er op het knopje wordt gedrukt.  
?>
<?php

$Gebruikersnaam = $_POST["Gebruikersnaam"];
$wachtwoord = $_POST["Wachtwoord"];

echo $Gebruikersnaam;
echo $wachtwoord;

?>

<html>
<head>
</head>
<body>
<form method="POST" action="">

  <input type="text" name="Gebruikersnaam" placeholder="Gebruikersnaam" required> <br>

  <input type="password" name="Wachtwoord" placeholder="Wachtwoord" required> <br>
  <input type="submit" value="Verstuur">
	</form>
</body>
</html>

