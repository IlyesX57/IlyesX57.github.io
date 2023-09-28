<?php
require_once('./db.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php">login</a>
    <a href="atm.php">index</a>

    <form action="" method="post">
        <pre>
            <label for="name">Prénom :</label>
            <input type="text" name="name" id="name" required>
            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" id="lastname" required>
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Code :</label>
            <input type="password" name="password" id="password" required pattern='^[0-9]{4}' maxlength="10">
            <label for="confirm_password">Confirmation du code :</label>
            <input type="password" name="confirm_password" id="confirm" onchange="modifypassword()" required pattern="^[0-9]{4}" maxlength=4>
            <br>
            <br>
            <input type="submit" value="Créer l'utilisateur">
        </pre>
    </form>
    <?php
        if(isset($_POST)  && !empty($_POST)){
            $select = $bdd->prepare('SELECT * FROM atm WHERE username=?');
            $select->execute(array( $_POST['username']));
            $select = $select->fetchAll();
            if ( count($select) <= 0) { 
            $insert = $bdd->prepare('INSERT INTO atm(prénom, nom, username, code) VALUES (?, ?, ?, ?)');
            $insert->execute(array(
                $_POST['name'],
                $_POST['lastname'],
                $_POST['username'],
                $_POST['password']
            ));
        } else{ 
            echo "<script> alert('Le nom d\'utilisateur est déjà utilisé') </script>";
        }
        }
        ?>
        
    <script>
        function modifyPassword() {
            let password = document.getElementById('password')
            let confirm = document.getElementById('confirm')
       
        if (password.value !== confirm.value) {
            confirm.setCustomValidity('Les mot de passes ne sont pas identique')
            } else {
                confirm.setCustomValidity('')
            }
} 

    </script>
</body>


</body>
</html>