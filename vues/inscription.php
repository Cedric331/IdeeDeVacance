<div class="container cadre w-50">
   <h2>Formulaire d'inscription</h2>
   <form method="POST" action="">
      <div class="form-group">
         <label for="mail">Adresse email : </label>
         <input type="email" class="form-control" id="mail" placeholder="Votre adresse email" name="mail">
      </div>
      <div class="form-group">
         <label for="utilisateur">Nom d'utilisateur : </label>
         <input type="text" class="form-control" id="utilisateur" placeholder="Indiquer votre nom d'utilisateur" name="utilisateur">
      </div>
      <div class="form-group">
         <label for="password">Mot de passe : </label>
         <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password" pattern=".{8,}" required title="8 caracteres minimum">
      </div>
      <div class="form-group">
         <label for="confirm_password">Confirmation du mot de passe : </label>
         <input type="password" class="form-control" id="confirm_password" placeholder="Confirmer votre mot de passe" name="confirm_password">
      </div>
      <button type="submit" class="btn btn-primary">S'inscrire</button>
   </form>
</div>


<?php
// Verification si les variables existent
if (isset($_POST['mail']) AND isset($_POST['utilisateur']) AND isset($_POST['password']) AND isset($_POST['confirm_password']))
{
   if (strlen($_POST['password']) < 6)
   {
      echo "Mot de passe trop court !";
   }
   else
   {
               // Verification si les variables contiennent des données 
      if (empty($_POST['mail']) OR empty($_POST['utilisateur']) OR empty($_POST['password']) OR empty($_POST['confirm_password']))
         {
         echo "<div class=\"container-fluid centre\"><h3>Il manque des infos --  Aucun ajout</h3></div>";
         }
      else
         {
            sleep(2);
            // Valide une adresse de courriel.
            $mail = filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL);
            // Supprime tous les caractères sauf les lettres, chiffres, et !#$%&'*+-=?^_`{|}~@.[].
            $email = filter_var($mail,FILTER_SANITIZE_EMAIL); 
            $utilisateur = filter_var($_POST['utilisateur'],FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES );
            $password = filter_var($_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES );
            $confirm_password = filter_var($_POST['confirm_password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES );
            $valide = inscription($email,$utilisateur,$password,$confirm_password);
         }
   }

}



?>

