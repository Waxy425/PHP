function esercizio1 () {

let giorno = window.prompt("Inserisci numero del giorno");
let mese = window.prompt("Inserisci numero del mese");
let anno = window.prompt("Inserisci numero dell'anno");

document.getElementById("es1-dataInserita").innerText = giorno + "/" + mese + "/" + anno

let dataFutura;
let risultato;

if (anno == 2025) {
    if (mese == 11) {
        if (giorno == 26) {
            risultato = "Hai inserito la data di oggi"
        } else {
            dataFutura = (giorno > 26);
        }
    } else {
        dataFutura = (mese > 11)
    }

} else {
    dataFutura = (anno > 2025)
}

if (dataFutura) {
    d
}

if (!risultato) {
    if (dataFutura) {
        risultato = "La data è nel futuro"
    } else {
        risultato = "La data è nel passato"
    }
}
document.getElementById("es1-risultato").innerText = risultato;
}

esercizio1 ();

function esercizio2 () {
    let giorno = window.prompt ("Inserisci il giorno")
    let mese = window.prompt ("Inserisci il mese")
    let anno = window.prompt ("Inserisci l'anno")
    let data = new Date(giorno + "/" + mese + "/" + anno);
    data.getDay();
}