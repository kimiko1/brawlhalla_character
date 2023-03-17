<?php 
session_start();
require('../../models/BDD.php');
require('../../models/Character.php');

use Model\BDD;

@$role = BDD::usertype($_SESSION['email']);
$perso = BDD::afficheAll();

if (isset($role)) {
    if ($role == "Admin") { 

    }else{
        header("Location: home_page.php?");
    }
}else{header("Location: login.php?");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Administration</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php foreach ($perso as $p): ?>
        <img class="Character" src="<?php echo $p->getImageC(); ?>">
        <div class="Name">
            <h1>
                <?php echo $p->getNomC(); ?>
            </h1>
        </div>
        <div class="table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Description</th>
                        <th scope="col">Armes</th>
                        <th scope="col">Attque</th>
                        <th scope="col">Défence</th>
                        <th scope="col">Vitesse d'attaque</th>
                        <th scope="col">Vitesse</th>
                    </tr>
                </thead>
                <tbody>
                    <th scope="row"></th>
                    <td class="table-primary">
                        <input type="text" name="" id="" placeholder="<?php echo $p->getDescription(); ?>">
                    </td>
                    <td>
                        <input type="s">
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
</body>
</html>