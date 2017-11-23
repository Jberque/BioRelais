<h3>Listes des abonnés : </h3>
<?php foreach($abonnes as $abonne) { ?>
  <p>
    Prenom : <?php echo $abonne->getPrenom(); ?><br>
    Nom : <?php echo $abonne->getNom(); ?><br>
    DateDeb : <?php echo $abonne->getDateDebAbn(); ?>
  </p>
<?php } ?>
