<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=jeuxvideo;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM jeux_video LIMIT 0,10');


// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
<div class="card-deck centre">
   <div class="card col-4">
      <div class="card-body">
         <h5 class="card-title"><strong>Jeu</strong> : <?php echo $donnees['nom']; ?></h5>
         <p class="card-text">
            Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à
            <?php echo $donnees['prix']; ?> euros !
            Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à
            <?php echo $donnees['nbre_joueurs_max']; ?> au maximum
            <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> :
            <em><?php echo $donnees['commentaires']; ?></em>
         </p>
      </div>
   </div>
</div>


<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>