
/*commento multi linea*/
//commento in linea


//stampa in console
console.log("ciao, mondo");


//mostra un popup con un messaggio
window.alert("Benvenuto");

//mostra un popup con una richiesta che ritorna true/false
console.log (window.confirm("Sei sicuro?"));

//mostra un popup che chiede un dato
window.prompt("Inserisci un numero");


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
console.log(somma > 20); //somma viene convertita in numero quindi vero
console.log(somma-length); //lunghezza della stringa
console.log(a + b + c); //51

var d;
console.log(d); //undefined
d = undefined;

var e = null;
console.log(e); //null

var oggetto = {
    "nullo": null,
    "undefined": undefined
};
console.log(oggetto);

console.log(d == true); //falso
console.log(e == true); //falso
console.log(d == e); //entrambi falsi -> true
console.log(d === e); //nullo è diverso da undefined

//controlli di flusso
var numero = window.prompt("Inserisci un numero");
if (numero % 2 == 0) {
    window.alert("Numero pari");
} else {
    window.alert("Numero dispari");
}

/*
var mese = window.prompt("Inserisci il numero del mese");

switch (mese) {
    case "1":
        window.alert("Gennaio");
        break;
    case "2":
        window.alert("Febbraio");
        break;
    case "3":
        window.alert("Marzo");
        break;
    case "4":
        window.alert("Aprile");
        break;
    case "5":
        window.alert("Maggio");
        break;
    case "6":
        window.alert("Giugno");
        break;
    case "7":
        window.alert("Luglio");
        break;
    case "8":
        window.alert("Agosto");
        break;
    case "9":
        window.alert("Settembre");
        break;
    case "10":
        window.alert("Ottobre");
        break;
    case "11":
        window.alert("Novembre");
        break;
    case "12":
        window.alert("Dicembre");
        break;
};
*/

console.log(document.getElementById("elemento-1"));
console.log(document.getElementsByClassName("elementi"));
console.log(document.getElementsByTagName("p"));

console.log(document.querySelector(".elementi"));
console.log(document.querySelectorAll(".elementi"));



var lista = document.getElementById("genitore");
console.log(lista.getElementsByClassName("figlio")); //3 figli

//inserisci il codice HTML nell'elemento
lista.innerHTML = "<li>1</li><li class='figlio'>2</li>";
console.log(lista.getElementsByClassName("figlio")); //1 figlio

//inserisci testo semplice nell'elemento
lista.innerText = "<li>1</li><li class='figlio'>2</li>";
console.log(lista.getElementsByClassName("figlio")); //0 figli