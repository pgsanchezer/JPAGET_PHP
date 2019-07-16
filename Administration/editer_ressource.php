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
            <h2>Modifier les ressources</h2>
            <form action="./enregistrer_edition_ressource.php" method="post">
                <div class="formulaire">
                    <input name="Nom" type="text" placeholder="nom">
                    <input name="Lien" type="text" placeholder="lien">
                    <input name="Commentaire" type="text" placeholder="comment">

                </div>
                <div class="validation">
                    <input type="submit" value="Valider" class="valid">
                </div>
            </form>
        </div>
    </div>
</body>


</html>
