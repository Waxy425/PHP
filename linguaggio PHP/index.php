<?php
    // commento in linea
    /* commento
       su più righe */

    /*stringhe*/
    echo "<h1 class='classe'>Hello world!</h1>";
    echo '<h2 class="classe">Tipi di Dato</h2>';
    echo "<h2 class=\"classe\">così posso usare la stessa virgoletta in un'unica riga</h2>";

    /* booleani */
    //vero > true
    //falso > false

    /*numeri*/
    echo 10;
    echo "\n"; //a capo nel documento di output
    echo 1.15;

    /*Nomi delle variabili*/
    $nome_variabile; //ok
    $nomeVariabile; //ok
    $nomevariabile; //attenzione

    /*Array*/

    //Array anonimo. Si accede ai valori tramite l'indice 
    $array_1 = [1, 2, 3, 4, 5]; 
    $array_2 = array(1, 2, 3, 4, 5);

    //Array con chiavi per accedere ai valori
    $array_3 = array(
        "nome" => "Mario",
        "cognome" => "Rossi",
        "eta" => 21
    );

    echo $array_3; //non posso stampare direttamente un array
    echo "<br>";
    print_r($array_3); //stampa l'array in modo leggibile
    echo "<br>";
    var_dump($array_3); //stampa l'array con informazioni dettagliate sui tipi di dato
    echo "<br>";

    //verifico che Mario Rossi sia maggiorenne
    if ($array_3 ["eta"] >= 18) {
        echo "Utente maggiorenne";
    } else {
        echo "Utente minorenne";
    }
    echo "<br>";
    //verifico che Mario Rossi ha 18 anni
    if ($array_3 ["eta"] == 18) {
        echo "L'utente ha 18 anni";
    } else {
        echo "L'utente non ha 18 anni";
    }

    //Uguaglianza stretta, controlla valore e tipo
    if ($array_3 ["eta"] =="21") {} //Questa condizione è VERA!
    if ($array_3 ["eta"] ==="21") {} //Questa condizione è FALSA! //=== confronta il valore e il tipo (ad esempio se ci sono delle stringhe o dei numeri interi)
    

    /**
     * AND => and oppure &&
     * OR => or oppure ||
     * XOR => xor
     * NOT => !
     */

    //stampa "falso"
    if (true and false):        // (true && false)
        echo "condizione vera";
    else:
        echo "condizione falsa";
    endif;
    
    //stampa "vero"
    if (true or false):         // (true || false)
        echo "condizione vera";
    else:
        echo "condizione falsa";
    endif;  // endif serve a chiudere un blocco if aperto con il ; al posto delle {}

    $persona_1 = array(
        "nome" => "Luca",
        "cognome" => "Rossi",
        "telefono" => ""
    );

    $persona_2 = array(
        "nome" => "Lorenza",
        "cognome" => "Verdi",
    );

    if ($persona_1 ["telefono"] != ""):
        echo "Tel: ";
        echo $persona_1 ["telefono"];
    endif;
    
    if (array_key_exists("telefono",$persona_2) && $persona_2["telefono"] != ""):
        echo "Tel: ";
        echo $persona_2 ["telefono"];
    endif;



    $voti = [6, 7, 7.5, 4, 9, 8];
    
    $somma = 0;
    $num_voti = 0;

    for ($i = 0; $i < count($voti); $i++):
    if ($voti[$i] > 0 && $voti[$i] <= 10):
    $somma = $somma + $voti[$i];
    $num_voti++;
    endif;
    endfor;

    echo "la somma dei voti è:" . $somma;
    echo "il numero di voti è:" . $num_voti;
    echo "il numero di voti è:" . count($voti);
    $media = $somma / $num_voti;
    echo "La media dei voti è" . $media;


    $numero = 45;
    $valori = [1, 2, 7, 10, 14, 16, 17, 20, 23, 25, 26, 30, 35, 36, 38, 40, 41, 45, 50, 51, 55];

    $trovato = false;

    $i = 0;
    while (!$trovato && $i < count($valori)) :
        if ($valori[$i] == $numero) :
            $trovato = true;
            break;
        endif;
        $i++;
    endwhile;

    /*
    for ($i = 0; !$trovato && $i < count($valori); $i++) :
        if ($valori[$i] == $numero) :
            $trovato = true;
            break;
        endif;
    endfor;
    */

    if ($trovato) :
        echo $numero . " è presente nell'array" ;
    else :
        echo $numero . " non è presente nell'array" ;
    endif;





/**
     * calcola la media aritmetica dei voti
     * 
     * @param int[] $voti I voti dello studente
     * @return float La media aritmetica dei voti
     */


    function calcola_media($voti) {
        $somma = 0;
        for ($i = 0; $i < count($voti); $i++):
            $somma += $voti[$i];
        endfor;

        $media = $somma / count($voti) ;
        return $media;
    }

    $studenti = [
        array(
            "nome" => "Mario",
            "eta" => 30,
            "voti" => [3, 5, 7 ,8]
        ),
        array(
            "nome" => "Gianni",
            "eta" => 30,
            "voti" => [5, 7, 6 ,10]
        ),
        array(
            "nome" => "Claudio",
            "eta" => 30,
            "voti" => [3, 9, 2 ,3]
        ),
        array(
            "nome" => "Franco",
            "eta" => 30,
            "voti" => [5, 2, 7 ,8]
        ),
        array(
            "nome" => "Giulio",
            "eta" => 30,
            "voti" => [3, 5, 8 ,9]
        )
        ];

    foreach ($studenti as $studente):
        $media = calcola_media($studente["voti"]);
        echo $studente["nome"] . " ha una media di " .$media. ": ";
        if ($media >= 6) :
            echo "Promosso.";
        else:
            echo "Bocciato";
        endif;
        echo"<br>";
    endforeach;




    //Sunday 3 August 2025
    function formatta_data($data){
        $parti = explode(" ", $data);

        return $giorno_della_settimana . " " . $giorno_del_mese . " " . $mese . " ";
    };



    echo formatta_data("Monday 14 september 2025");


    function traduci_giorno_settimana($giorno) {
        switch($settimana[$i]):
            case "monday":
                return "Lunedì";
            case "tuesday":
                return "Martedì";
            case "wednesday":
                return "Mercoledì";
            case "thursday":
                return "Giovedì";
            case "friday":
                return "Venerdì";
            case "saturday":
                return "Sabato";
            case "sunday":
                return "Domenica";
            default;
                return false;
        endswitch;
        
    function traduci_mese($mese) {
        switch($settimana[$i]):
            case "January":
                return "Gennaio";
            case "February":
                return "Febbrazio";
            case "March":
                return "Marzo";
            case "April":
                return "Aprile";
            case "March":
                return "Maggio";
            case "June":
                return "Giugno";
            case "July":
                return "Luglio";
            case "August":
                return "Agosto";
            case "September":
                return "Settembre";
            case "October":
                return "Ottobre";
            case "November":
                return "Novembre";
            case "December":
                return "Dicembre";
            default;
                return false;
        endswitch;
        };
        
        















?>