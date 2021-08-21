<?php
    require('parametre.php');

    
    if(isset($_POST['valider'])){

        function valid_donnees($donnees){
            $donnees = trim($donnees); //gerer les espaces e debut de mot
            $donnees = stripslashes($donnees);//remplacer les caracteres speciaux par des \
            $donnees = htmlspecialchars($donnees);//codage html
            return $donnees;
        }
    $nomm = valid_donnees($_POST['nom']);
    $prenomm = valid_donnees($_POST['prenoms']);
    $num_aejj = valid_donnees($_POST['num_aej']);
    $tell = valid_donnees($_POST['tel']);
    $maill = valid_donnees($_POST['email']);
    $fonctionn = valid_donnees($_POST['fonction']);
    
    if (!empty($nomm) 
    && !empty($prenomm) 
    && !empty($num_aejj) 
    && !empty($tell) 
    && filter_var($maill, FILTER_VALIDATE_EMAIL) 
    && !empty($fonctionn))    
    {
        try{
            //On insère les données reçues
            $req = $connection->prepare("INSERT INTO etudiant(nom,prenoms,num_aej,tel,email,fonction)
                                        VALUES(:nom,:prenoms,:num_aej,:tel,:email,:fonction)");
            $req->bindParam(':nom',$nomm);
            $req->bindParam(':prenoms',$prenomm);
            $req->bindParam(':num_aej',$num_aejj);
            $req->bindParam(':tel',$tell);
            $req->bindParam(':email',$maill);
            $req->bindParam(':fonction',$fonctionn);
            $req->execute();
            //On renvoie l'utilisateur vers la page de remerciement
            header("Location:sucess.html");
        }
        catch(PDOException $e){
            echo 'Erreur';
        }
    }else{
        header("Location:erreur.html");
    }
    }
?>