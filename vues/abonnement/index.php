<h3>Emprunter un vélo :</h3>

<p>Choisissez votre station :</p>

<!-- <?php foreach($stations as $station) { ?>
  <?php echo $station->getNom(); ?>
<?php } ?> -->

<?php
foreach ($stations as $station) {
  print_r($station);
  echo "<br>";
  echo "<h2>" . $station->getNom() . "</h2>";
  echo "<br>";
}
 ?>
