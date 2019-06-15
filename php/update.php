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
$requette = "UPDATE emp SET nom = '$nom' , prenom = '$prenom' where matricule = '$matricule'";

$res = $cxBase->exec($requette);

//resultat d'exécution
if ($res>0) {
    echo "Données mis à jour avec succcé !";
}else {
    echo "Erreur de mise à jour";
}

?>