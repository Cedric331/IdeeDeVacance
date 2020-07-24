<?php require('modele.php'); 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=jeuxvideo;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


?>


<?php 

if(isset($_GET['action'])) 
   {
      $action = $_GET['action'];
   }
else
   {
      $action = "accueil";
   }

switch ($action)
{
   case 'accueil':
      ob_start();
      require ('vues/accueil.php');
      $content = ob_get_clean(); 
      break;

   case 'inscription':
      ob_start();
      require ('vues/inscription.php');
      $content = ob_get_clean(); 
      break;

   case 'validation':
      ob_start();
      require ('vues/validation.php');
      $content = ob_get_clean(); 
      break;

   case 'connexion':
      ob_start();
      require ('vues/connexion.php');
      $content = ob_get_clean(); 
      break;

      case 'quisommesnous':
         ob_start();
         require ('vues/quisommesnous.php');
         $content = ob_get_clean(); 
         break;

   case 'resultat':
      ob_start();
      require ('vues/resultat.php');
      $content = ob_get_clean(); 
      break;

   case 'france':
      ob_start();
      require ('vues/france.php');
      $content = ob_get_clean(); 
      break;

   default:
      ob_start();
      require ('vues/accueil.php');
      $content = ob_get_clean(); 
      break;
}


require('vues/layout.php');
?>