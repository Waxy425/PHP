/*commento multi linea*/
//commento in linea

//stampa in console
console.log("ciao, mondo");

/*
//mostra un popup con un messaggio
window.alert("Benvenuto");

//mostra un popup con una richiesta che ritorna true/false
console.log (window.confirm("Sei sicuro?"));

//mostra un popup che chiede un dato
window.prompt("Inserisci un numero");
*/

//dichiarazione di variabile
var stringa1 = "Ciao mondo"; //variabile globale
let stringa2 = "Ciao mondo!"; //variabile locale
const costante = "Ciao mondo!"; //costante

//stringhe
var stringa = "Insieme ci caratteri";
console.log(stringa[2]);

//interi -> int
var intero = 1;
console.log(typeof intero);

//decimali -> float
var decimale = 1.2;
console.log(typeof decimale);

//boolean
var bool = true;
console.log(typeof bool); //boolean

//array
var array = [1, 2, 3, 4, 5, 6];
console.log(typeof array); //object

//oggetto
var object = {
    "nome": "Mario",
    "eta": 30
};
console.log(typeof oblect) //object

//operatori aritmetici
var a = 1;
var b = 2;
var c = 3;

console.log(a + b);
console.log(a - b);
console.log(a * b);
console.log(a / b);
console.log(a % b); //resto della divisione

a = 1
console.log(a++); //leggo e poi incremento
console.log(++a); //incremento e poi leggo

//operatori logici
console.log(a < b);
console.log(a <= b);
console.log(a == 3); //uguaglianza
console.log(a == "3"); //uguaglianza per valore
console.log(a === "3"); //uguaglianza per valore e tipo

console.log( ! (a < b)); //not
console.log(a == 3 && b == 1); //and
console.log(a == 3 || b == 1); //or

//concatenazione
console.log(stringa1 + stringa2);

a = 2,
b = 3,
c = "1"
var somma = a + c;

console.log(a + b); //somma
console.log(a + c); //concatenazione
console.log(somma + b); //213
console.log(somma > 212); //somma viene convertita in numero
console.log(somma-length); //lunghezza della stringa
console.log(a + b + c); //51