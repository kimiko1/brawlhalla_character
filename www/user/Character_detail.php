<?php
session_start();


require('../../models/Character.php');
require('../../models/BDD.php');
use model\BDD;
@$perso = BDD::affiche($id);
?>
<html>

<head>
    <link rel="stylesheet" href="../CSS/character.css">
    <title>Détails des personnages</title>
</head>

<body>
    <?php foreach ($perso as $p): ?>
        <div class="Container">
            <img class="Character" src="<?php echo $p->getImageC(); ?>">
        </div>
        <div class="Name">
            <h1>
                <?php echo $p->getNomC(); ?>
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
                        <?php echo $p->getDescription(); ?>
                    </td>
                    <td>
                        <?php echo $p->getWeapons(); ?>
                    </td>
                    <td>
                        <?php echo $p->getStrength(); ?>
                    </td>
                    <td>
                        <?php echo $p->getDefence(); ?>
                    </td>
                    <td>
                        <?php echo $p->getDexterity(); ?>
                    </td>
                    <td>
                        <?php echo $p->getSpeed(); ?>
                    </td>
                </tbody>
            </table>
        <?php endforeach ?>
    </div>
</body>

</html>