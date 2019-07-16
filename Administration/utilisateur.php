<!DOCTYPE html>
<html lang="fr">
<?php
    include 'header.php';
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
            <h2>Gestions des utilisateurs</h2>
            <a href="ajouter_utilisateurs.php"><button class="green">Ajouter</button></a>

            <div class="tab">
                <table>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Adresse mail</th>
                        <th>Password</th>
                        <th class="empty"></th>
                        <th class="empty"></th>
                    </tr>
                    <?php 
                    try {
    $bdd = new PDO ('mysql:host=localhost;dbname=minisite', 'root', '');} catch (Exception $e)
{
    die ('Erreur : ' . $e->getMessage());
}
                    $reponse = $bdd->query('SELECT * FROM `utilisateurs`');
                    while ($donnees = $reponse->fetch())
                    {
                        ?>
                    <tr>
                        <td> <?php echo $donnees ['prenom'] ?> </td>
                        <td> <?php echo $donnees['nom'] ?> </td>
                        <td> <?php echo $donnees ['mail']?> </td>
                        <td> <?php echo $donnees ['mot_de_passe']?></td>
                        <td>
                            <button class="blue">Editer</button>
                        </td>
                        <td>
                            <button class="red">Supprimer</button>
                        </td>

                    </tr>

                    <?php
                    } 
                    $reponse->closeCursor();
 
                    ?>
                </table>
            </div>
        </div>
    </div>
    <footer>
    </footer>
</body>

</html>
