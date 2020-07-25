<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO membres (nom_membres) VALUES(?)');
$req->execute(array($_POST['nom']);

$reqm = $bdd->prepare('INSERT INTO message (message_forum) VALUES (?)');
$reqm->execute(array($_POST['message']);

// Redirection du visiteur vers la page du minichat
header('Location: http://developpement/PHP/GIT/ideedevacance/forum');
exit;
?>