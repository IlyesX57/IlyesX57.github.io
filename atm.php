
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ATM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <form action="" method="post">
            <span class="num" id="texte">
                <input type="password" name="number" id=invisible readonly>
                <input type="text" id='affiche' readonly>
            </span>
            <div class="num">1</div>
            <div class="num">2</div>
            <div class="num">3</div>            
            <div class="num" id="reject">Decliner<p class="red"></p></div>
            <div class="num">4</div>
            <div class="num">5</div>
            <div class="num">6</div>            
            <div class="num" id="erase">Effacer<p class="yellow"></p></div>
            <div class="num">7</div>
            <div class="num">8</div>
            <div class="num">9</div>            
            <button type="submit" class="num">Entrez<p class="green"></p></button>
            <div class="num"id='calcul-'>-</div>
            <div class="num">0</div>
            <div class="num" id='caclul+'>+</div>
        </form>
    </section>

    <?php 

        if (isset($_POST) && !empty($_POST)) {
            echo '<pre>'; var_dump($_POST); echo '</pre>'; 
            $select = $bdd->prepare('SELECT code FROM atm WHERE code=? and username=?');
            $select->execute(array(
                sha1($_POST['number']),
                $_POST['username']
            ));
            $select = $select->fetchAll();
            if (count ($select) > 0)
                echo"<script> alert('Le code est bon')</script>";
            else
                 echo '<script> alert("Le code n\'est pas bon") </script>';
        }
    ?>

    <script>
        var button = document.getElementsByClassName('num')

        for (let index = 0; index < button.length; index++) {
            if (button[index].id.length > 0 || button[index].type == 'submit') continue
            button[index].addEventListener('click', function() {
                var input = document.getElementById('affiche')
                var span = document.getElementById('invisible')
                if (input.value.length == 4) {
                    input.value = ""
                    span.value = ""
                    return
                }
                span.value += button[index].innerHTML
                input.value += '*'
            })
        }
        function Stop() {
            document.getElementById('affiche').value = ''
            document.getElementById('invisible').value = ''
        }
        document.getElementById('reject').addEventListener('click', Stop)
        document.getElementById('erase').addEventListener('click', Stop)

    </script>



    <h2>Inscription</h2>
<p><?php echo $message; ?></p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" value="<?php echo $nom; ?>"><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" value="<?php echo $prenom; ?>"><br><br>

    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" value="<?php echo $username; ?>"><br><br>

    <input type="submit" value="S'inscrire">
</form>
</body>
</html>