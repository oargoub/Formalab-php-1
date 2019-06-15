<?php
//importation fichier
include "config.php";
//recupération de l'objet de connexion
$cxBase = connexion();

//recuperation des données
$matricule  = $_GET['matricule'];
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];

//preparation de requette d'insertion
$requette = "INSERT into emp VALUES ('$matricule','$nom','$prenom')";
//preparation de requette de mise à jour
//execution de la requette
/*
exec() , insert , update , delete => retourner un entier / boolean
boolean = false : erreur d'execution requette
entier = nombre de ligne modifié 

query() , select
*/

$res = $cxBase->exec($requette);//exécution la requete sur la base de donnée ($cxbase)et mettre le résultat dans $res
$res1 = $cxBase->exec($maj);
//resultat d'exécution
if ($res>0) {
    echo "Données inserées avec succcé !";
}else {
    echo "Erreur d'insertion";
}

?>