<?php
require('../modele.php');
if($_GET['mail'] AND $_GET['utilisateur'] AND $_GET['password'] AND $_GET['confirm_password'])
   {
      echo "élements enregistrée Traitement des données";
      inscription($_GET['mail'], $_GET['utilisateur'], $_GET['password'], $_GET['confirm_password']);
   }
   else
   {
      echo "il manque des éléments";
   }

?>

