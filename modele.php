<?php 

function inscription($mail, $identifiant, $password, $confirm_password)
{
   if ($password == $confirm_password)
      {
         header("Location: http://developpement/PHP/GIT/ideedevacance/validation");
         exit;
      }
   else 
      {
         header("Location: http://developpement/PHP/GIT/ideedevacance/inscription");
         exit;
      }

}
?>
