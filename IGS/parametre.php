<?php

try{
    $serveur = "localhost";
    $dbname = "igs"; 
    $user = "kodak"; 
    $pass = "11102255Xx";

    $connection = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
}
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
?>