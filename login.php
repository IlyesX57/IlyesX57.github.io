<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <pre>
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Se connecter">
            <a href="./register.php">Vous n'avez pas de compte ?</a>
        </pre>
    </form>
    <?php
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM users WHERE username=? AND password=?');
        $select->execute(array(
            $_POST['username'],
            sha1($_POST['password'])
        ));
        $select = $select->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($select)) {
            session_start();
            $_SESSION = $select;
            header('location: index.php');
        }
    }
    ?>
</body>
</html>