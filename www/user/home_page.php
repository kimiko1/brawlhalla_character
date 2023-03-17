<?php
session_start();

// Inclusution des models
require('../../models/Character.php');
require('../../models/BDD.php');

// Utilisation du model BDD.php
use Model\BDD;

// Affectation des variable perso et $role
$perso = BDD::afficheAll();

?>

<!doctype html>
<html lang="fr">

<head>
    <title> Accueil </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/navigation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <?php include("../../models/navigation.php") ?>
</head>

<body>
    <div class="table-responsible">
        <table class="table table-dark table-bordered border-secondary">

            <div class="Message_de_la_page">
                <h1> Bonjour et bienvenue. Sur ces pages, vous pouvez retrouvez toutes les informations concernant les
                    personnages de brawlhalla </h1>
            </div>

            <div class="row no-gutters">
                <?php foreach ($perso as $p): ?>

                    <div class="col-3">
                        <h2>
                            <?php echo $p->getNomC(); ?>
                        </h2>
                        <a href="Character_detail.php?id=<?php echo $p->getIdC(); ?>">
                            <img src="<?php echo $p->getImageC(); ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </table>
    </div>
</body>