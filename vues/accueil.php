<!-- Formulaire -->
<?php 
if(isset($_GET['mois']) OR (isset($_GET['continent'])) OR (isset($_GET['prix'])))
{
   header("Location:http://developpement/Id%c3%a9e_Voyage/resultat"); 
}

?>

<section class="container cadre w-50">
   <h2>Indiquez vos préférences</h2>
   <form method="GET" action="">
      <!-- <div class="form-group">
         <label for="exampleFormControlSelect1">Saison</label>
         <select class="form-control" id="exampleFormControlSelect1" name="saison">
            <option>-- Pas de préférence --</option>
            <option>Eté</option>
            <option>Autômne</option>
            <option>Hiver</option>
            <option>Printemps</option>
         </select>
      </div> -->
      <div class="form-group">
         <label for="exampleFormControlSelect1">Votre mois de départ:</label>
         <select class="form-control" id="exampleFormControlSelect1" name="mois">
            <option>-- Pas de préférence --</option>
            <option>Janvier</option>
            <option>Février</option>
            <option>Mars</option>
            <option>Avril</option>
            <option>Mai</option>
            <option>Juin</option>
            <option>Juillet</option>
            <option>Août</option>
            <option>Septembre</option>
            <option>Octobre</option>
            <option>Novembre</option>
            <option>Décembre</option>
         </select>
      </div>
      <div class="form-group">
         <label for="exampleFormControlSelect2">Choix du continent</label>
         <select multiple class="form-control" id="exampleFormControlSelect2" name="continent">
            <option>-- Aucun choix --</option>
            <option>Europe</option>
            <option>Afrique</option>
            <option>Asie</option>
            <option>Amérique du Nord</option>
            <option>Amérique du Sud</option>
            <option>Océanie</option>
         </select>
      </div>
      <div class="form-group">
         <label for="formControlRange">Prix moyen/personne</label>
         <input type="range" class="form-control-range" id="formControlRange" name="prix">
      </div>
      <button type="submit" class="btn btn-light">Recherche</button>
   </form>
</section>