<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cours FlexBox</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class='conteneur'>
            <div class= 'rouge'></div>
            <div class="vert"></div>
            <div class= 'orange'></div>
            <div class="vert"></div>
            <div class="rouge"></div>
            <div class="orange"></div>    
            <div class="vert"></div>
            <div class="rouge"></div>
            <div class="orange"></div>  
            <div class="vert"></div>
            <div class="rouge"></div>
            <div class="orange"></div>  

    </div>
    <br><br>

    <div class="grand">
        <div class="petit">
            <h1>FlexBox</h1>
        </div>
        <div class="petit" id="secondpetit">
            <div class="moyen"></div>
            <div class="toutpetit"></div>
            <div class="toutpetit"></div>
            <div class="moyen"></div>
        </div>
    </div>
<br><br>
    <div class="exercice">
    <div class="cote_gauche">
        <div class="long violet"></div>
        <div class="gauche">
            <div class="petite Orange"></div>
            <div class="trespetit red"></div>
    </div>
        <div class="droite bleu"></div>
    </div>

    <div class="cote_droit">
        <div class="gauche">
            <div class="petite1 red"></div>
            <div class="petite2 bleu"></div>
            <div class="petite3 Orange"></div>
        </div>
        <div class="droite">
            <div class="petite1 bleu"></div>
            <div class="petite2 Orange"></div>
            <div class="petite3 red"></div>
        </div>
        <div class="long violet"></div>
        
    </div>
    
    <br><br><br>
    
       
    </head>
    <body>
    <section>
        <form action="" method="post">
            <span class="num" id="texte">
            <span id=invisible></span>
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
            <div class="num" id='calcul+'>+</div>
        </form>
    </section>
    <script>
        var button = document.getElementsByClassName('num')

        for (let index = 0; index < button.length; index++) {
            if (button[index].id.length > 0 || button[index].type == 'submit') continue
            button[index].addEventListener('click', function() {
                var input = document.getElementById('affiche')
                var span = document.getElementById('invisible')
                console.log(input.value)
                if (input.value.length == 4) {
                    input.value = ""
                    return
                }
                span.innerHTML += button[index].innerHTML
                input.value += '*'
            })
            
        }
        function Stop() {
            document.getElementById('affiche').value = ''
            document.getElementById('invisible').innerHTML = ''
        }
        document.getElementById('reject').addEventListener('click', Stop)
        document.getElementById('erase').addEventListener('click', Stop)
    </script>

</body>
</html>
