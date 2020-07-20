<?php session_start();

// date_default_timezone_set('Europe/Paris');
//  echo date('h:i:s');
$fond = "accueil";
if (isset($_GET['action'])) 
{
   $fond = $_GET['action'];
}

?>

<!doctype html>
<html lang="fr">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Idée de Voyage</title>
   <!-- Font -->
   <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
      rel="stylesheet">
   <!-- Bootstrap / CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"crossorigin="anonymous">
   <link rel="stylesheet" href="vues/style.css">
   <!-- Logo -->
   <!-- <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
   <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
   <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet"> -->
   <script src="https://kit.fontawesome.com/676ce807e4.js" crossorigin="anonymous"></script>
</head>

<body id=<?php echo $fond ?> >

   <div class="main">

      <!-- header -->
      <header class="container-fluid sticky-top">
         <nav class="navbar navbar-expand-lg navbar-light text-white menu">
            <a class="navbar-brand text-white" href="?action=accueil">IdéeDeVoyage.fr</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link text-white" href="?action=france">Liste des Pays</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-white" href="?action=annonce">Annonces</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-white" href="?action=forum">Forum</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mon compte
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?action=connexion">Se connecter</a>
                        <a class="dropdown-item d-none" href="?action=moncompte">Gérer mon compte</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?action=inscription">S'inscrire</a>
                        <a class="dropdown-item d-none" href="?action=deconnexion">Se déconnecter</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?action=pro">Compte pro</a>
                     </div>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Rechercher un Pays"
                     aria-label="Recherche">
                  <button class="btn btn-light my-2 my-sm-0" type="submit">Recherche</button>
               </form>
            </div>
         </nav>
      </header>


         <?php echo $content; ?>


      <!-- footer -->
         <footer class="container flex wrap justif-around mt-5">
            <div class="col-lg-6 col-sm-12">
               <div class="card">
                  <img src="image/reseaux.jpg" class="card-img-top" alt="reseau sociaux">
                  <div class="card-body flex justif-evenly">
                     <a href="#" class="btn btn-body"><i class="fab bleuclair fa-twitter fa-3x"></i></a>
                     <a href="#" class="btn btn-body"><i class="fab rouge fa-instagram-square fa-3x"></i></i></a>
                     <a href="#" class="btn btn-body"><i class="fab bleu fa-facebook fa-3x"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-sm-12">
               <div class="card">
                  <div class="card-body flex column">
                     <h5 class="card-title centre text-white">À propos de IdéeDeVoyage.fr</h5>
                     <a href="#" class="btn btn-body text-white">Qui sommes-nous ?</a>
                     <a href="#" class="btn btn-body text-white">Nos engagements</a>
                     <a href="#" class="btn btn-body text-white">Conditions générales</a>
                     <a href="#" class="btn btn-body text-white">Politique de confidentialité</a>
                     <a href="#" class="btn btn-body text-white">Politique de cookies</a>
                     <a href="#" class="btn btn-body text-white">Moyens de paiement</a>
                     <a href="#" class="btn btn-body text-white">Nous contacter</a>
                  </div>
               </div>
            </div>
         </footer>
   </div>

   <!-- Optional JavaScript -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous">
   </script>
</body>

</html>