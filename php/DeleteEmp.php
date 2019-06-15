<?php
//importation fichier
include "config.php";
//recupération de l'objet de connexion
$cxBase = connexion();

//recuperation des données
$matricule  = $_GET['matricule'];

//preparation de requette de suppression
$requette = "DELETE from emp where matricule = '$matricule' ";

//exécution la requete sur la base de donnée ($cxbase)et mettre le résultat dans $res

$res = $cxBase->exec($requette);

//resultat d'exécution
if ($res>0) {
    echo "Données supprimé avec succcé !";
}else {
    echo "Erreur de suppression !";
}
?>