<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="assets/bootstrap-3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/vlib.css">

  <title>Vlib</title>
</head>

<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header pull-left">
      </div>
      <!-- <div class="collapse navbar-collapse" id="myNavbar"> -->
      <ul class="nav navbar-nav">
        <li><a class="navbar-brand" href="?action=home">Vlib</a></li>

        <!-- <a class="navbar-brand" href="?action=home">Vlib</a> -->

        <!-- <li class="/*active"><a href="?action=home">Home</a></li> -->
        <li><a href="?controller=abonnement&action=index">Abonnement</a></li>
        <li><a href="?controller=maintenance&action=index">Maintenance</a></li>
        <li><a href="?controller=emprunt&action=index">Emprunter</a></li>
      </ul>

      <form class="navbar-form navbar-left">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Rechercher">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right connexions">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span><span class="glyph-label"> Connexion</span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span><span class="glyph-label"> Inscription</span></a></li>
      </ul>
      <!-- <button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button> -->
    <!-- </div> -->
  </div>
</nav>


<div class="container">

  <?php require_once('routes.php'); ?>

</div>
</body>
</html>
