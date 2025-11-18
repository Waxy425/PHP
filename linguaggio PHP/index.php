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
    if (true and false);        // (true && false)
        echo "condizione vera"
    else;
        echo "condizione falsa";
    endif;
    
    //stampa "vero"
    if (true or false);         // (true || false)
        echo "condizione vera"
    else;
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

    if ($persona_1 ["telefono"] != "");
        echo "Tel: ";
        echo $persona_1 ["telefono"];
    endif;
    
    if (array_key_exist($persona_2) && $persona_2["telefono"] != "");
        echo "Tel: ";
        echo $persona_2 ["telefono"];
    endif;
    //cosa ho fatto nellultimo esercizio?
    //controllato se esiste la chiave "telefono" nell'array $persona_2
    //se esiste, controllo se il valore associato alla chiave "telefono" è diverso da una stringa vuota
    //se entrambe le condizioni sono vere, stampo il numero di telefono






?>