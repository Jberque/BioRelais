<div class="conteneur">
	<header>
		<?php include 'haut.php' ;?>
	</header>
	<main>
	<?php if (isset($_SESSION["mail"])){

			$txt ="	<div class='contentConnexion'>
					<div class='btn'>";
			$txt .= "<form method='post' action='index.php'>
				<div class='ligne'>
				<input type = 'submit' value = 'Deconnecter'/>
				<input id ='deco' type = 'hidden' name='deco' value=''/>
				</div>";
			$txt .= "</form>
			</div></div>";
			echo $txt;
		}
		else {
				echo "<form method='post' action='index.php'>
					<div class='contentConnexion'>
						<div class='btnIdent'>
									<input id ='id' type = 'text' placeholder='Saisir votre identifiant' name='id' value=''/>
									<br/>
									<br/>
									<input id='mdp' type = 'password' placeholder='Saisir votre mot de passe' name='mdp' value=''/><br/><br/>
									<input id = 'validCo' type = 'submit' value = 'Valider'/>
									<input type = 'reset' value ='Annuler'/>
							</div>
					</div>
					</form>
				";

		}
		?>
	</main>
	<footer>
		<?php include 'bas.php' ;
		?>
	</footer>
</div>
