<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT message_forum, date_message, nom_membres FROM message
INNER JOIN membres ON fk_membres = id_membres');


while ($donnees = $reponse->fetch())
{
?>
<div class="card-deck centre">
   <div class="card col-4">
      <div class="card-body">
         <h5 class="card-title"><strong>Posté le </strong> : <?php echo $donnees['date_message']; ?> Ecrit par : <?php echo $donnees['nom_membres']; ?> </h5>
         <p class="card-text">
            <?php echo $donnees['message_forum']; ?>
         </p>
      </div>
   </div>
</div>


<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

<div class="container cadre w-50">
   <form method="POST" action="insert.php">
      <div class="form-group">
         <label for="nom">Nom : </label>
         <input type="text" class="form-control" id="nom" placeholder="Votre nom" name="nom" required>
      </div>
      <div class="form-group">
         <label for="message">Message : </label>
         <textarea class="form-control" id="message" placeholder="Votre message" name="message" cols="20" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
   </form>
</div>

<?php

// if (isset($_POST['nom']) AND isset($_POST['message'])) 
// {

//       $nom = htmlspecialchars($_POST['nom']);
//       $message = htmlspecialchars($_POST['message']);
//       ("INSERT INTO `membres`(`id_membres`, `nom_membres`) VALUES (0, $nom)");
//       ("INSERT INTO `message`(`id_message`, `message_forum`, `date_message`, `fk_membres`) VALUES (0,$message,0,0)");
// }


?>