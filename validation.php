<?php
if(isset($_POST) && !empty($_POST)) {
    echo'<pre>';var_dump($_POST); echo '</pre>';
    echo $_post['First name'];
    // sha1 hash le mot c'est a dire le compléxifi et 
    // le rend invisible
    echo sha1($_POST['Password']);
    echo md5($_post["Password"]);

    $insert = $bdd->prepare('INSERT INTO utilisateur(firstname, lastname,email, password, gender) VALUES (?,?,?,?,?)');
    $insert->execute(array(
    $_POST['Firstname'],
    $_POST['Lastname'], 
    $_POST['email'],
    md5($_POST['Password']),
    $_POST['gender']
    ));
}
    ?> 