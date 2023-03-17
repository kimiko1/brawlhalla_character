<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
</head>

<body>
    <nav class="navbar">
    <form action="admin.php?" method="POST">
                <?php if (@$role == "Admin") { ?>
                    <button type="submit" class="btn btn-danger">Administration</button>
                <?php } ?>
        </form>
        <form action="home_page.php?<?php echo htmlspecialchars(SID); ?>" method="POST">
            <button type="submit" class="btn btn-primary "> cliquez ici pour retourner a l'Accueil </button>
        </form>
        <form action="logout.php?<?php echo htmlspecialchars(SID); ?>" method="POST">
            <button action="" type="submit" class="btn btn-primary "> cliquez ici pour vous déconnectez </button>
        </form>
        <form action="login.php?<?php echo htmlspecialchars(SID); ?>" method="POST">
            <button type="submit" class="btn btn-primary "> cliquez ici pour vous connecter </button>
        </form>
    </nav>
</body>

</html>