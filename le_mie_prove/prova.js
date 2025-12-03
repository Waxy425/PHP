function esercizio1() {
let giorno = window.prompt("Inserisci il giorno:");
let mese = window.prompt("Inserisci il mese:");
let anno = window.prompt("Inserisci l'anno:");

document.getElementById("prova2").innerText = giorno + "/" + mese + "/" + anno;

let dataFutura;
let risultato;

if (anno == 2025) {
    if (mese == 11) {
        if (giorno == 26) {
            risultato = "hai inserito la data di oggi"; 
        } else {
            datafutura = (giorno > 26);
        } }else {
            datafutura = (mese > 11);
        } }else {
            datafutura = (anno > 2025); 
}

if (!risultato) {
    if (datafutura) {
        risultato = "la data è futura";
    } else {
        risultato = "la data è passata";
    }
}

document.getElementById("prova").innerText = risultato;
}










//ESERCIZIO 2


function test() {

    let giorno = parseInt(window.prompt("Inserisci il giorno (1-31):"));
    let mese = parseInt(window.prompt("Inserisci il mese (1-12):"));
    let anno = parseInt(window.prompt("Inserisci l'anno:"));

    document.getElementById('test').innerText = giorno + "/" + mese + "/" + anno;

    // Verifica che la data sia valida
    let data = new Date(anno, mese - 1, giorno);

    // Controllo di validità (JS aggiusta automaticamente le date)
    if (data.getFullYear() !== anno || 
        data.getMonth() !== mese - 1 || 
        data.getDate() !== giorno) {

        document.getElementById("test2").innerText = "❌ Data non valida!";
        return;
    }

    // Giorno della settimana
    let giornoSettimana = data.getDay();

    // Dizionario giorni
    let giorni = ["Domenica", "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato"];

    // Dizionario mesi
    let mesi = [
        "Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno",
        "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"
    ];

    // Composizione del risultato
    let risultato = giorni[giornoSettimana] + " " + giorno + " " + mesi[mese - 1] + " " + anno;

    document.getElementById("test2").innerText = risultato;
}
