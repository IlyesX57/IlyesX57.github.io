<?php
$bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8;', 'ILYES', 'Ilyesdu57')
// VARIABLE pour pouvoir recup les donner du site internet 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cours php</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php 
    echo "<p> Bonjour </p>";  
    //  <!-- on balise le bonjour avec les p pour faciliter le css -->
    // <!-- balise pour le php <?php? >
    echo "<p>" . "bonjour" . "</p>";
    $cookie= 10;
     // je défini ma valeur avec $ puis je lui donne le nom cookie
    //  et je lui rentre la valeur 10 -->
    $phrase = "je suis une phrase"; // string 
    $nombre = 1.4; //float
    $choix = true; // booléens
    
    // intégrer --> nombre entier comme 50, 47, 87648 

    // Float --> nombre  virgule comme 74,57. 4,456

    // String--> Chaine de caracteres comme 
    //          "bonjour"
    //          " je code sur ordi "

    // Booléens--> True ( vrai ) ou false (faux)

    // array--> 
    // indexés
    // associatif

    // null = NULL

    echo $phrase;

    // les conditions

    $condition = false;
    
    if ($condition) {
        echo "<br>je passe ici donc c'est vrai";
    } else {echo"<br>je passe par la donc c'est faux";
    }

    $code = 4227;
    //  == ca prend en compte que la variable sois égale
    //  === ca prend en compte que la variable sois égale 
    //  et du meme type 
    if ($code == 4227) {
        echo "<br>le code est correct";
    } else {"<br>le code n'est pas correct";}

    $couleur = "gris";
    // echo"<p>j'ai une autruche de couleur"  . $couleur . "</p>"; (concatener la rep)

    if($couleur == "rouge") { // SI
        echo "<br>j'ai une autruche de couleur rouge";
    } else if ( $couleur == "bleu") { // Sinon si 
        echo "<br>jai une autruche de couleur bleu";
    } else { // Sinon
        echo "<br>j'ai pas d'autruche";
    }

//  ecriture ternaire
$a = 15;
$un = $a > 11 ? 1: 0;
// si $a supérieur à 11 alors $un est éale a 1 sinon il sera 
// egale a 0


// les switch

$tailles = 120;

switch ($tailles) {
    case 120:
        echo "<p> Tu est un naingi.</p>";
                break;
    case 150:
        echo "<p> tu est proche du sol</p>";
                break;
    case 170:
        echo "<p> tu a une taille convenable</p>";
                break;
    case 200:
        echo "<p>Bonour monsieur ! </p>";
                break;
    default:
        echo " tu n'existe pas";
                break;
}

// les tableaux
$tableau = [];
$tableau = [42, 78, 48, 1486658, "Une autruche"];
echo $tableau [4]. "<br>";

echo '<pre>';
var_dump($tableau);
echo '</pre>';

//EXERCICE
 $exo = [4, 12, 78, 98, 65];
 $resultat = $exo[2] - ($exo[0] * $exo[1]);

//la valeur de $resultat doit etre = a 30 en utilisant
// que les nomres qu'il ce trouve dans le tableau exo 

// tableau associatif 

$tab_assoc = [
    "voiture"=> "volkswagen", //type string
    "animal"=> "perroquet", // type string
    "chiffre"=> 10, // Type integer
    "calvitie"=> true, // type boolean
    "legumes"=> null // Type null 
];
// jai fait un tableau avec 5 valeurs qui ont une index
// que jai féfini moi meme 
//  voiture est index qui a volkswagen pour valeur 
// pareille pour la suite 

$tab_assoc['bras'] = false;
// jai defini un nouvelle index bras avec comme valeur faux 

echo "<pre>"; 
var_dump($tab_assoc);echo"</pre>";


//les boucles 

//les boucles while 

$o = 0;
while(true) {
    $o++;
echo "<p> Le code c'est trop dur</p>";
if ($o == 10) {
    break;
    // sert à casser la boucle pour pouvoir l'arreter
}
}

// la boucle do-while

do{
    echo 'je passe dans la boucle do-while';
} while (false);


// la boucle for

for ($i=0; $i < 10; $i++) { 
    echo "<br><br>je suis passer " ,$i+1 , " fois dans le boucle for";
}

 /* 
    Créer un tableau Associatif en mettant une 
    index bras de type booléen et une index 
    jambe qui va être un integer
    */

    /* 
    Si il n'a pas de jambe ni de bras
        Tu es un e-tronc !
    Sinon si il n'a pas de bras
        Pas de bras pas de chocolat
    Sinon
        Tu es basique donc tu es nul
    */
?> <br> 

<?php
$tab_exo = [ "bras"=> true,
"jambe" => 2  ];

// le point d'exclamation (!) veut dire différent de
// exemple : si bras est égal à vrai et que je fait
// différent de il sera égal à faux 

if($tab_exo["jambe"] == 0 && !$tab_exo ["bras"])   
echo "tu est un e-tronc !";
else if (!$tab_exo ['bras'])
    echo"pas de bras pas de chocolat";
else
    echo " tu est basique donc tu est nul";

?> 
<br><br>
<form action="validation.php" method ="post">
    <label for="First name">First name : </label>
    <br>
        <input type="text" name="Firstname" id="Firstname">
<br><br>
    <label for="Last name">Laste Name : </label>
      <br>  
        <input type="text" name="Lastname" id="Lastname">
<br><br>
    <label for="email">E-mail : </label>
     <br>
        <input type="email" name="email" id="email">
<br><br>
<form action="">
    <label for="Password">Password : </label>
    <br>
        <input type="password" name="Password" id="Password">
<br><br>
<form action="">
    <label for="Confirm Password">Confirm Password : </label>
    <br>
        <input type="Confirm password" name="Confirm Password" id="Confirm Password">
<br><br>
<p><b>Gender</b>
<br>

<input type="radio" name="gender" id="male" value="male"> 
<label for="Male">Male</label><input type="radio" name="gender" id="female" value="female">
<label for="Female">Female</label>
<input type="radio" name="gender" id="others" value="others" >
<label for="other">Other</label>
    
<br><br>
<input type="submit" value="Submit">
</form>

<?php

// si method post est rentrer dans le formulaire il faut utiliser 
// $_post
//  sinon si la method get est rentrer dans le formulaire il faut 
//  utiliser $_GET
// la fonction isset sert à regarder si la variable qui lui est 
// donner est bien défini dans ce cas si elle regarde
// si la variable $_POST est défini 


    // je prépare ma commande
    $select = $bdd->prepare('SELECT * FROM utilisateur WHERE gender= ?;');
     // je l'éxécute en lui donnant une valeur à la place des ?
    $select->execute(array('male'));
    // je recupere tt ce que me renvoie ma comande
    $total = $select->fetchAll(PDO::FETCH_ASSOC);

// je l'affiche 
    echo '<pre>';
    var_dump($total);
    echo '</pre>'; 


?>

<form action="" method ="post">
    <label for="Yourname">Your name : </label>
    <br>
        <input type="text" name="Yourname" id="Yourname">
        <br><br>
        <label for="mail">Your mail : </label>
    <br>
        <input type="Yourmail" name="Yourmail" id="Yourmail"> 
        <br><br>
        <label for="Yourmessage">Your message : </label>
    <br>
        <input type="text" name="Yourmessage" id="Yourmessage">
        <br><br>
        <label for="number">Give me a number : </label>
    <br>
        <input type="number" name="Givemeanumber" id="Givemeanumber">
        
        
        <br><br>
    <input type="submit" value="Envoyer">
    </form>
<?php
    if(isset($_POST) && !empty($_POST)) {
        settype($_post['Giveanumber'],'integer');
  
    

    $insert = $bdd->prepare('INSERT INTO exo(Yourname, Yourmail,Yourmessage, Givemeanumber) VALUES (?,?,?,?)');
    $insert->execute(array(
    $_POST['Yourname'],
    $_POST['Yourmail'], 
    $_POST['Yourmessage'],
    $_POST['Givemeanumber']
    ));
    }
    ?>




   




</body>
</html>