<!DOCTYPE html>
<html lang="fr">
<?php
    include 'header.php'
    ?>

<body>
    <header>
        <?php
            include 'nav.php';
            ?>
    </header>
    <div class="content">
        <?php
            include 'menu.php';
            ?>
        <div class="main">
            <h2>Modifier un utilisateur</h2>
            <form action="./enregistrer_edition_utilisateur.php" method="post">
                <div class="formulaire">
                    <input name="prenom" type="text" placeholder="Prénom">
                    <input name="nom" type="text" placeholder="Nom">
                    <input name="mail" type="text" placeholder="Adresse e-mail">
                    <input name="password" type="password" placeholder="Mot de passe">
                </div>
                <div class="validation">
                    <input type="submit" value="Valider" class="valid">
                </div>
            </form>
        </div>
    </div>
</body>


</html>
