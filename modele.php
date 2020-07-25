<?php 

function inscription($mail, $identifiant, $password, $confirm_password)
{
   if ($password == $confirm_password)
      {
         header("Location: http://developpement/projet/voyage/IdeeDeVacance/validation");
         exit;
      }
   else 
      {
         header("Location: http://developpement/projet/voyage/IdeeDeVacance/inscription");
         exit;
      }

}
?>
