<?php 

function inscription($mail, $identifiant, $password, $confirm_password)
{
   if ($password != $confirm_password)
      {
         echo "Mot de passe non valide";
         header("Location: http://developpement/Id%c3%a9e_Voyage/?action=inscription");
         exit;
      }
   else
      {
         echo "Inscription validée";
         $validation = "d-block";
         header("Location: http://developpement/Id%c3%a9e_Voyage/?action=validation");
         exit;
      }
}
?>
