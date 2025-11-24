<?php
    /*es 1
    Dato un insieme di valori, trovare il numero più alto*/
    
    $valori = [1, 2, 7, 10, 14, 16, 17, 20];
    /*
    $massimo = true;
    if ($massimo >= $valori[0]);
    */

    $massimo = $valori[0];
    
    
    for ($i = 0; $i < count($valori); $i++) :
        if ($valori[$i] > $massimo) :
            $massimo = $valori[$i];
        endif;
    endfor;

    echo "il valore più alto è: " . $massimo;

    



    /*es 2
    Stampa tutti gli elementi finchè l'elemento corrente è inferiore a 15*/

    $valori = [1, 2, 3, 4, 5, 6, 7 ,8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
/*
    $sotto = 0;

    for ($i = 1; $i < 15; $i++) :
        echo $i ;
    endfor;
    */

    for ($i = 0; $i < count($valori); $i++) :
        if ($valori[$i] < 15) :
            echo $valori[$i] . " ";
        else :
            break;
        endif;
    endfor;




    /*es 3
    stampa il nome delle persone maggiorenni
    Calcola l'età media di tutte le persone
    */
    $persone = [
        array(
            "nome" => "Mario",
            "eta" => 30
        ),
        array(
            "nome" => "Claudio",
            "eta" => 24
        ),
        array(
            "nome" => "Martina",
            "eta" => 35
        ),
        array(
            "nome" => "Francesca",
            "eta" => 33
        ),
        array(
            "nome" => "Maria",
            "eta" => 13
        ),
        array(
            "nome" => "Luigi",
            "eta" => 16
        ),
        array(
            "nome" => "Gianni",
            "eta" => 18
        ),
        array(
            "nome" => "Franco",
            "eta" => 10
        ),
        array(
            "nome" => "Giulio",
            "eta" => 27
            )
    ];  



    $maggiorenne = 0;
    $media = 0;
    $eta = 0;

    /*
    for ($i = 0; $i < count($eta); $i++);
    if ($persone >= 18):
        echo $persone["nome"] . " è maggiorenne";
    endif;
endfor;
*/
    
    foreach ($persone as $persona) :
        if ($persona["eta"] >= 18):
            echo "<li>".$persona["nome"]. "</li>";
        endif;
        $anni += $persona ["eta"];
    endforeach;



    $settimana = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];

    for ($i = 0; $i < count ($settimana); $i++) :
        switch($settimana[$i]):
        case "monday":
            echo "Lunedì";
            break;
        case "tuesday":
            echo "Martedì";
            break;
        case "wednesday":
            echo "Mercoledì";
            break;
        case "thursday":
            echo "Giovedì";
            break;
        case "friday":
            echo "Venerdì";
            break;
        case "saturday":
            echo "Sabato";
            break;
        case "sunday":
            echo "Domenica";
            break;
        endswitch;
    endfor;
        



/**
 * esercizio 4
 * data l'età di una persona ritorna se può guidare il 12
 * @param int $eta L'età della persona
 * @return boot Vero se può guidare il 125, falso altrimenti
 */


function eta_125($eta) {
    if ($eta >= 16)
        return true;

    return false; 
}


$persone = [
    array(
        "nome" => "Mario",
        "eta" => 13
    ),
    array(
        "nome" => "Gianni",
        "eta" => 12
    ),
    array(
        "nome" => "Claudio",
        "eta" => 16
    ),
    array(
        "nome" => "Franco",
        "eta" => 30
    ),
    array(
        "nome" => "Giulio",
        "eta" => 18
    )
    ];

foreach ($persone as $persona);




/**
 * esercizio 5
 * dato un numero verifica se è divisibile per 3
 * @param int $numero il numero da valutare
 * @return int Vero se divisibile per 3, falso altrimenti
 */

function divisibile_per_3($numero) {
    return $numero % 3 == 0;
    }


/**
 * esercizio 6
 * dato un numero ritornalo in formato EURO (€ 10,00)
 * 
 * @param float $numero il prezzo in formato numerico
 * @return string il prezzo in formato € 10,00
 */

function number_to_euro($numero) {
    return "€ " . number_format($numero, 2, ".", "");
}


    


?>