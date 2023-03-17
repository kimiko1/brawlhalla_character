<?php
session_start();

// Inclusution des models
require('../../models/Character.php');
require('../../models/BDD.php');

// Utilisation du model BDD.php
use Model\BDD;

// Affectation des variable id et perso
$id = $_GET['id'];
$perso = BDD::affiche($id);
?>
<html>

<head>
    <link rel="stylesheet" href="../CSS/character.css">
    <title>Détails des personnages</title>
</head>

<body>
    <?php foreach ($perso as $p): ?>
        <div class="Container">
            <img class="Character" src="<?php echo $p['image']; ?>">
        </div>
        <div class="Name">
            <h1>
                <?php echo $p['nom']; ?>
            </h1>
        </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Description</th>
                        <th scope="col">Armes</th>
                        <th scope="col">Attaque</th>
                        <th scope="col">Défence</th>
                        <th scope="col">Vitesse d'attaque</th>
                        <th scope="col">Vitesse</th>
                    </tr>
                </thead>
                <tbody>
                    <th scope="row"></th>
                    <td>
                        <?php echo $p['description']; ?>
                    </td>
                    <td>
                        <?php echo $p['weapons']; ?>
                    </td>
                    <td>
                        <?php echo $p['strength']; ?>
                    </td>
                    <td>
                        <?php echo $p['defence']; ?>
                    </td>
                    <td>
                        <?php echo $p['dexterity']; ?>
                    </td>
                    <td>
                        <?php echo $p['speed']; ?>
                    </td>
                </tbody>
            </table>
        <?php endforeach ?>
    </div>
</body>

</html>