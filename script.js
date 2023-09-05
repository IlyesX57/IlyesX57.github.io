// let ou var permet de dire que 
// je créer une variable d'un nom souhaiter
let Autruche = "Animal" 
var Perche = "Poisson"
// j'ai défini des variables de type "string"
// ( chaine de caractère)
let nombreStagiaire = 10
// j'ai defini une variable avec le nom nombre de stagiaire
// je lui ai donner comme donnée le nombre 10
// j'ai défini une variable de type int ( nombre entier)
var heure = 14.31 
// j'ai créer une variable avec le nom heure
// je lui est donner la donnée 14.31
//j'ai défini une variable de type float/double  
//(nombre a virgule)
let allumer = true 
// j'ai créer une variable avec le nom allumer 
// et comme valeur je lui est donner true ( vrai)
// le type de cette variable est boolean 
// (true / false )
var ventilo = null 
// j'ai créer une variable avec le nom ventilo
// avec comme valeur null qui est rien du tout 
//le type est null 
let phrase = "j'aime l' " + Autruche + 
"mais pas les" + Perche
// j'aime l'animal mais pas les poissons 
// J'ai concaténer les chaines de caracteres 
//et les variables

var calcul = heure + nombreStagiaire
// 14.31 + 10

console.log(phrase)
// permet de vérifier si on ne sais pas tromper     
console.log(calcul)
// permet de vérifier s le calcul est bon 

// je crée une fonctionqui se nomme horloge avec comme 
// paramètre temps
var temps = 1

function horloge(){
    // si le temps est plus petit ou égale à 10 on
    //éxécute l'addition et le console.log sinon rien
    if (temps<10){ //<,>,<=,>=,==,!=
        temps = temps + 1
    //temps++
   // temps +=1
   // j'additione 1 a ma variable temps 
    console.log(temps)}
    
}

setInterval(horloge, 1000)

// exercice : faire un compte a rebours qui part de 50
// et qui fini a 0 et qui descend tout les 2 sec 

var nombre = 50 

function montre (){
    if(nombre > 0){
    console.log(nombre)    
 nombre = nombre - 1
}
}

setInterval(montre, 2000)




