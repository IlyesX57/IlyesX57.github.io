<?php 
require_once('dbCat.php');

function Chatleatoire() {
    $chaine = '1234567890';
    return substr(str_shuffle(str_repeat($chaine, 15)), 0, 15);
}
function TestID() {    
    $id = Chatleatoire();
    $select = $bdd->prepare('SELECT * FROM cat WHERE id=?');
    $select->execute(array(
        $id
    ));
    $select = $select->rowCount();
    if ($select > 0) {
        TestID();
    }
    return $id
}
if (isset($_POST) && !empty($_POST)) {
    

     $insert = $bdd->prepare('INSERT INTO cat (id, prenom, color, photo, description, sexe) VALUES (?, ?, ?, ?, ?, ?)');
  $insert->execute(array(
    TestID($bdd),
    $_POST['prenom'],
    $_POST['color'],
    $_POST['photo'],
    $_POST['desc'],
    $_POST['sexe']

));
    
    

















   header('Location: paneladmin.php'); 
}



















