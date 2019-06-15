<?php
//definition d'une fonction de connexion à la base de données
function connexion(){

    $server = 'localhost';
    $base = 'travail';
    $username = 'root';
    $password = '';

    try{
        //connexion base données

        //creation d'un objet de connexion
        $con = new PDO("mysql:host=$server;dbname=$base",$username,$password);
        $con->query("SET NAMES 'utf8'");
        //retourner l'objet de connexion
        return $con;

    }
    catch(PDOException $e){
        //gestion des exception
        $messageErreur = $e->getMessage();
        die("Erreur : $messageErreur");
    }
 
}
?>