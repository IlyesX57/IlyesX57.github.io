<?php
    require_once('../../function/db.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET) && !empty($_GET["id_annuaire"])) {
            $ligne = $bdd->prepare('SELECT * FROM annuaire WHERE id_annuaire=?');
            $ligne->execute(array(
                $_GET['id_annuaire']
            ));
            $ligne = $ligne->fetch(PDO::FETCH_ASSOC);
            if (!empty($ligne)) {
                var_dump($ligne);
                $nom = $ligne['nom'];
            }
        }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Informations</legend>
            <pre>
                <label for="nom">Nom *</label>
                <input type="text" name="nom" id="nom" maxlength="30" required value="<?php $ligne['nom'] ?>">
                <label for="prenom">Prénom *</label>
                <input type="text" name="prenom" id="prenom" maxlength="30" required>
                <label for="prenom">Telephone *</label>
                <input type="tel" name="tel" id="tel" minlength="10" maxlength="10" required>
                <label for="nom">Profession</label>
                <input type="text" name="profession" id="profession" maxlength="30">
                <label for="nom">Ville</label>
                <input type="text" name="ville" id="ville" maxlength="30">
                <label for="postale">Code Postal</label>
                <input type="tel" name="postale" id="postale" minlength="5" maxlength="5" pattern="[0-9]{5}">
                <label for="adresse">Adresse</label>
                <textarea name="adresse" id="adresse" cols="30" rows="2" maxlength="30"></textarea>
                <label for="nom">Date de Naissance</label>
                <input type="date" name="date" id="date">
                <label for="sexe">Sexe</label>
                <label for="homme">Homme: </label> <input type="radio" name="sexe" id="homme" value="m" required>  <label for="femme">Femme: </label><input type="radio" name="sexe" id="femme" value="f" required>
                <label for="description">Description</label>
                <textarea name="desc" id="desc" cols="30" rows="5"></textarea>
                <input type="submit" value="Enregistrement">
            </pre>
        </fieldset>
    </form>
</body>
</html>