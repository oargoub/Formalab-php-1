<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Afficher tous</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    //importation fichier
    include "config.php";
    //recupération de l'objet de connexion
    $cxBase = connexion();

    $matricule  = $_GET['matricule'];

    $req = "SELECT * from emp where matricule = '$matricule'";
    $dataDB = $cxBase->query($req);

    ?>

    <?php

    $nbLigne = $dataDB->rowCount();

    if ($nbLigne > 0) {

            while ($employe = $dataDB->fetchObject()) {
            ?>

                <div class="container">

                    <form action="update.php" method="GET" name="subscribe" onsubmit="return valider();">

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="inputMatricule ">matricule :</label>
                            <input type="text" id="inputMatricule " class="form-control col-sm-3" name="matricule" value="<?php echo $employe->matricule; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="inputNom">Nom:</label>
                            <input type="text" id="inputNom" class="form-control col-sm-3" name="nom" value="<?php echo $employe->nom; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="inputPrenom">Prénom:</label>
                            <input type="text" id="inputPrenom" class="form-control col-sm-3" name="prenom" value="<?php echo $employe->prenom; ?>">
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>

                </div>

            <?php
            }
        } else {
    ?>
        <div class="alert alert-warning">
            Aucun employée trouvé
        </div>

    <?php
}

?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>