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
        <form action="">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Description</th>
                        <th scope="col">Armes</th>
                        <th scope="col">Attaque</th>
                        <th scope="col">Défence</th>
                        <th scope="col">Vitesse d'attaque</th>
                        <th scope="col">Vitesse</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <th scope="row"></th>
                    <td class="table-primary">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Modifier la description du personnage"><?php echo $p->getDescription(); ?></textarea>
                    </td>
                    <td>
                        <textarea name="" id="" cols="10" rows="2" placeholder="Modifier les armes du personnage"><?php echo $p->getWeapons(); ?></textarea>
                    </td>
                    <td>   
                        <textarea name="" id="" cols="1" rows="1" placeholder="Modifier l'attaque du personnage"><?php echo $p->getStrength(); ?></textarea>
                    </td>
                    <td>
                        <textarea name="" id="" cols="1" rows="1" placeholder="Modifier la defence du personnage"><?php echo $p->getDefence(); ?></textarea>
                    </td>
                    <td>
                        <textarea name="" id="" cols="1" rows="1" placeholder="Modifier la vitesse d'attaque du personnage"><?php echo $p->getDexterity(); ?></textarea>
                    </td>
                    <td>
                        <?php echo $p->getSpeed(); ?>
                    </td>
                    <td>
                        <input type="submit" value="Modifier le personnage">
                    </td>
                    
                </tbody>
            </table>
        </form>
    <?php endforeach ?>
</body>
</html>

