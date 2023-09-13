<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Horloge</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- faire un minuteur numérique-->
    <!-- on doit pouvoir changer 
l'heure avec un formulaire  -->
<p id="minuteur">00:00:00</p>
<form action=""method="post">
<label for="heure">Heure(s) :</label>
<input type="number" name="heure" id="heure" value=0 min=0 max=23 lenght=2> 

<label for="minute">minute(s) :</label>
<input type="number" name="minute" id="minute" value=0 min=0 max=59>

<label for="seconde">seconde(s) :</label>
<input type="number" name="seconde" id="seconde" value=0 min=0 max=59>

</form>

<?php


echo '<script>
var heure = '.(!empty($_POST["heure"]) ? $_POST["heure"] : '0').'
var minute = '.(!empty($_POST["minute"]) ? $_POST_["minute"] : '0').'
var seconde = '.(!empty($_POST["seconde"]) ? $_POST_["seconde"] : '0').'
setInterval (function() {
   document.getElementById("minuteur").innerHTML=
    `${(heure < 10 ? "0":"") + heure}:${(minute < 10 ? "0":"") + minute}:${(seconde < 10 ? "0":"") + seconde}`
    if (seconde <= 0) return
    seconde--
    if (seconde == 0){
        if (minute > 0) {
            seconde = 59
            minute--
        } else { 
            if (heure > 0) {
                heure--
                minute = 59
                seconde = 59
            }
        }
    }
}, 1000)

</script>'
?>


</body>

</html>