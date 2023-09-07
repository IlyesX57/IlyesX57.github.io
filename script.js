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

// setInterval(horloge, 1000)

// exercice : faire un compte a rebours qui part de 50
// et qui fini a 0 et qui descend tout les 2 sec 

var nombre = 50 

function montre (){
    if(nombre > 0){
    console.log(nombre)    
 nombre = nombre - 1
}
}

// setInterval(montre, 2000)


//array = tableau
// c un tableau indéxer
//type de variable qui est elle meme un tableau 
            // 0       1   2      3
var tab = [10,"bonjour",7.5,null]
// cette variable est un tableau qui contien 4 valeur dans l'ordre 
//10
// "bonjour
// 7.5
// null

console.log(tab[1])
// on affiche la valeur qui ce trouve à la position 1 qui est bonjour
console.log(tab[3])
// on affich la valeur qui ce trouve à la position 3 qui est null


// exo : faire un tableau qui ce nomme chmiblik qui comporte 
//  5 valeur de type string et 5 valeur de type int ou float 

var chmiblik = [
"chien",
"chat",
"hamster",
"pigeon",
"rat",
1,
2,
3,
4,
5
]

console.log(chmiblik)
console.log(chmiblik.length)
// connaitre la valeur du tableau

let animal = "autruche"
let temp = ""


document.getElementById("animal").addEventListener("click",function(){
    // je regarde le texte qui ce trouve dans cete élément
temp = document.getElementById("animal").innerHTML
// je modifie le texte qui ce trouve dans cette élément par la valeur
// de la variable animal
document.getElementById("animal").innerHTML = animal
animal = temp
})
// getelementbyid sélectionne un élement qui à l'id défini sur animal dans ce cas
// addeventlistener créer une écoute d'évenement

while(false){}
// tandis que ce qu'il ce trouve dans les parantheses est vrai elle tourne 

for(var i=0;i<10;i++) {
    // je défini un variable i qui s'incrémenter de 1 tout les tours de la 
    // boucle grace à i++
    // et je lui demande de tourner jusqu'a que i soit supérieur à 10
    console.log(i)
}
for(var i=0; i <chmiblik.length; i++) {
    console.log(chmiblik[i])
 // la boucle tourne jusquà la taille du tableau   
if (i==3){
    break
}
    

}

do {
    console.log("DINGUERIE")
// elle s'éxecute une fois même si la condition est fausse
// et elle continue si de s"éxecuter si la condition est vrai 
}while(false)

for( index in chmiblik) {
    console.log(index)
}

// tableau associatif
var tab_assoc = {"ami": "chien", "cafe": "caféine" }

for( index in tab_assoc) {
    console.log(index)}

    // exercice :
    