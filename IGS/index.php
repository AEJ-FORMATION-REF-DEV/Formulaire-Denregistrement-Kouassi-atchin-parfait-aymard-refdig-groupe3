<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Formulaire D'inscription</title>
      </head>
      <body>
        <div class="wrapper">
          <div class="title">
           Formulaire d'inscription 
          </div>
          <form action="traitement.php" method="POST">
            <div class="form">
              <div class="info">
                  <label>Nom</label>
                  <input type="text" name="nom" class="input" placeholder="Entrer votre Nom">
              </div>  
                <div class="info">
                  <label>Prenoms</label>
                  <input type="text" name="prenoms" class="input" placeholder="Entrer votre Prénoms">
              </div>  
              <div class="info">
                  <label>Numéro AEJ</label>
                  <input type="text" name="num_aej" class="input" placeholder="Entrer votre Numéro AEJ">
              </div>  
              <div class="info">
                  <label>Téléphone</label>
                  <input type="text" name="tel" class="input" placeholder="Entrer votre Téléphone">
              </div> 
              <div class="info">
                <label>Email</label>
                <input type="text" name="email" class="input" placeholder="Entrer votre Email">
            </div> 
                <div class="info">
                  <label>Fonction</label>
                  <div class="select">
                    <select name="fonction">
                      <option value="">Selectionner la fonction</option>
                      <option value="Referent digital">Referent digital</option>
                      <option value="Developpeur Web / Mobile">Developpeur Web / Mobile</option>
                      <option value="Data IA">Data IA</option>
                    </select>
                  </div>
              </div> 
              <div class="info">
               
                <input type="submit" name="valider" value="Valider" class="btn"> 
              </div>
              <div class="info">
                <button><a href="consultation.php">Consultation</a></button>
              </div>
            </div>
            </form>
      </div>	
      </body>
</html>