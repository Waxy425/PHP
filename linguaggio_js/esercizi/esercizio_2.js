function esercizio_1() {



let NumeroInserito = window.prompt("Inserisvi un numero da 1 a 10");
let NumeroDaTrovare = Math.ceil(Math.random() *10) //randomizzare un insieme di numeri


while (NumeroInserito != NumeroDaTrovare) {
    NumeroInserito = window.prompt ("Sbagliato, riprova");
}

document.getElementById("es1-numeroScelto").innerText = "Il numero era " + NumeroDaTrovare;
document.getElementById("es1-risultato").innerText = "Congratulazioni";
}

function esercizio_2() {
    let NumeroInserito = window.prompt("Inserisci un numero");
    let risultato;
    let fattoriale = 1;
    document.getElementById("es2-NumeroInserito").innerText = risultato;
    
    for (let i = 1; i <= NumeroInserito; i++) {
        risultato = fattoriale * i
    }
    
document.getElementById("es2-risultato").innerText = risultato;
}


function esercizio_3() {
    let nome = window.prompt("Inserisci nome");
    let cognome = window.prompt("Inserisci cognome");
    let matricola = window.prompt("Inserisci numero matricola");
    let media = window.prompt("Inserisci voti per media");




    document.getElementById("nome").innerText = "Nome: " + nome;
    document.getElementById("cognome").innerText = "Cognome: " + cognome;
    document.getElementById("matricola").innerText = "Matricola: " + matricola;
    document.getElementById("media").innerText = "Media: " + media;

}


let studente = {
    nome: "",
    cognome: "",
    matricola: "",
    voti: []
}


//input
for (chiave in studente) {
    if (chiave != "voti") {
        studente[chiave] = window.prompt("Inserire" + chiave);
    } else {
        let stringavoti = windows.prompt("Inserire i voti separati da ','")
        studente.voti = stringavoti.split (",");
    }
}


//media
let mediavoti = 0;
for (voto of studente.voti) {
    mediavoti += voto;
}
studente.mediavoti = mediavoti / studente.voti


//stampoa
let risultato = "";
for (chiave in studente) {
    risultato += chiave + ":"
    if (chiave != studente.voti)
        risultato += chiave + ": " + studente[chiave];
}
document.getElementById("es3-risultato").innerText = risultato;