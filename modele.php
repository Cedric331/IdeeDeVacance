<?php 

function inscription($mail, $identifiant, $password, $confirm_password)
{
   if ($password != $confirm_password)
      {
         header("Location: http://developpement/PHP/GIT/ideedevacance/inscription");
         exit;
      }

         header("Location: http://developpement/PHP/GIT/ideedevacance/validation");
         exit;
}
?>
