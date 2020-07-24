<?php 
if(isset($_POST['mail']) AND isset($_POST['utilisateur']) AND isset($_POST['password']) AND isset($_POST['confirm_password']))
   {
      inscription($_POST['mail'],$_POST['utilisateur'],$_POST['password'],$_POST['confirm_password']);
   }
      else
      {
         echo "Vous n'avez pas remplie les champs";
      }

      // $mail = $_GET['mail'];
      // $utilisateur = $_GET['utilisateur'];
      // $password = $_GET['password'];
      // $confirm_password = $_GET['confirm_password'];
?>


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
         <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password">
      </div>
      <div class="form-group">
         <label for="confirm_password">Confirmation du mot de passe : </label>
         <input type="password" class="form-control" id="confirm_password" placeholder="Confirmer votre mot de passe" name="confirm_password">
      </div>
      <button type="submit" class="btn btn-primary">S'inscrire</button>
   </form>
</div>

