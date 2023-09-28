<?php
require_once('../../function/db.php');
session_start();
if (!empty($_SESSION)) header('Location: index.php');
if (!empty($_GET)) {
    if ($_GET['success'] == 'reset') echo '<script> alert("Votre mot de passe à était modifie") </script>';
}
?>

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
        $select = $bdd->prepare('SELECT * FROM users WHERE (username=:login OR email=:login) AND password=?');
        $select->execute(array(
            'login' => $_POST['username'],
            'pass' => $_POST['password']
        ));
        $select = $select->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($select)) {
            session_start();
            $_SESSION = $select;
            header('location: index.php');
        } else
        echo "<script> alert('Le mot de passe ou le pseudo n\'est pas bon') </script>";
}
?>
    
    
</body>
</html>