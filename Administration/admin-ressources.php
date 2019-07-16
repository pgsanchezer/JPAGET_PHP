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
                <h2>Ajouter une ressource</h2>
                <form action="" method="post">
                    <div class="formulaire">
                        <input type="text" placeholder="Nom">
                        <input type="text" placeholder="Adresse URL">
                        <textarea>Commentaire</textarea>
                    </div>
                    <div class="validation">
                       <input type="submit" value="Valider" class="valid">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
