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
                            $id=$donnees['id'];
                            echo "<tr>"
                                ."<td>".$donnees ['prenom']."</td>"
                                ."<td>".$donnees['nom']."</td>"
                                ."<td>".$donnees['mail']."</td>"
                                ."<td>".$donnees['mot_de_passe']."</td>"
                                ."<td>"
                                    ."<a href='editer_utilisateur.php?id=".$donnees['id']."' class='blue'>Editer</a>
                                </td>
                                <td>
                                    <button class='red'>Supprimer</button>
                                </td>
                                </tr>";
                        }
                    ?>
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
