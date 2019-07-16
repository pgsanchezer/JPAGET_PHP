<?php 
try {
    $bdd = new PDO ('mysql:host=localhost;dbname=minisite', 'root', ''); 
    if ((isset ($_POST ['nom'])) && (isset($_POST ['prenom'])) && (isset($_POST['mail'])) && (isset($_POST['password'])))
    {
        $reponse = $bdd->query('INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `mail`, `mot_de_passe`, `photo`) VALUES (NULL, '.$_POST['nom'].', ' . $_POST['prenom'].', ' . $_POST['mail'].', ' .$_POST['password']);
    }

} catch (Exception $e)
{
    die ('Erreur : ' . $e->getMessage());
}
header('ajouter_ressorce.php');
location:header('enregistrer_ressource.php');

?>
