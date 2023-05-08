

<form action="process.php" method="GET">
  Naam: <input type="text" name="name"><br>
  Achternaam: <input type="text" name="achternaam"><br>
  Leeftijd: <input type="text" name="leeftijd"><br>
  Adres: <input type="text" name="adres"><br>
  E-mail: <input type="text" name="email"><br>
  <input type="submit" value="Verzenden">
</form>


<form method="POST" action="verwerking.php">

  <input type="text" name="name" placeholder="Naam" required> <br>

  <input type="text" name="achternaam" placeholder="Achternaam" required> <br>

  <input type="text" name="leeftijd" placeholder="Leeftijd" required> <br>
  
  <input type="text" name="adres" placeholder="Adres" required> <br>
  
  <input type="email" name="email" placeholder="Email" required> <br>
  
  <input type="submit" value="Verstuur">

</form>

/*
dd
*/
verschil tussen GET en Post is dat bij GET de tekst buiten de knop is en dat bij Post de tekst in de knop zit