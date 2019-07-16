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
            <h2>Gestions des ressources</h2>
            <a href="admin-ressources.php"><button class="green">Ajouter</button></a>
            <div class="tab">
                <table>
                    <tr>
                        <th>Nom du Site</th>
                        <th>Lien</th>
                        <th>Commentaire</th>
                        <th class="empty"></th>
                        <th class="empty"></th>
                    </tr>
                    <tr>
                        <td>Openclassroom</td>
                        <td>https://fr.openclassrooms.com/informatique/cours/coder-un-site-web</td>
                        <td>Apprendre à coder un site web</td>
                        <td>
                            <button class="blue">Editer</button>
                        </td>
                        <td>
                            <button class="red">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Openclassroom</td>
                        <td>https://fr.openclassrooms.com/informatique/cours/administrez-vos-bases-de-donnees-avec-mysql</td>
                        <td>Apprendre MySQL</td>
                        <td>
                            <button class="blue">Editer</button>
                        </td>
                        <td>
                            <button class="red">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Documentation PHP</td>
                        <td>https://www.php.net//manual/fr/funcref.php</td>
                        <td>Les fonctions PHP</td>
                        <td>
                            <button class="blue">Editer</button>
                        </td>
                        <td>
                            <button class="red">Supprimer</button>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    <footer>
    </footer>
</body>

</html>
