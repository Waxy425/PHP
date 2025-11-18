<?php

    /**
     * Es 01
     * Dati due numeri, stampare nell'ordine:
     *  - Somma
     *  - Differenza
     *  - Moltiplicazione
     *  - Divisione
     */
    $a = 12;
    $b = 24;

    $somma = $a + $b;
    $differenza = $a - $b;
    $moltiplicazione = $a * $b;
    $divisione = $a / $b;

    /* 
    echo ($a + $b); //somma
    echo "<br>";
    echo ($a - $b); //differenza
    echo "<br>";
    echo ($a * $b); //moltiplicazione
    echo "<br>";
    echo ($a / $b); //divisione
    echo "<br>";
    */
    ?>

    <h2>Esercizio 1</h2>
    <ul>
        <li>Somma: <?php echo $somma; ?></li>
        <li>Differenza: <?php echo $differenza; ?></li>
        <li>Moltiplicazione: <?php echo $moltiplicazione; ?></li>
        <li>Divisione: <?php echo $divisione; ?></li>
    </ul>


<?php
    /**
     * Es 02
     * Data una parola, verificare se è uguale
     * a "casa"
     */
    $parola = "albero";
    ?>

    <h2>Esercizio 2</h2>
    <p>
        <?php
        if ($parola == "casa")
            echo "La parola è uguale a casa";
        else    
            echo "La parola è diversa da casa";
    ?>    
    </p>


<?php
    /** 
     * Es 03
     * Dato due valori numerici, verificarne l'uguaglianza
     */
    $c = "145";
    $d = 145;

?>

<h2>Esercizio 3</h2>
<h3>Uguaglianza per valore</h3>
<p>
    <?php
        if ($c == $d) {
            echo "<br>I due valori sono uguali";
        } else {
            echo "<br>I due valori non sono uguali";
        }
    ?>
</p>

<?php
/** 
     * Es 4
     * Converti il voto in un giudizio:
     * - Da 0 a 5   ->  Insufficiente
     * - 6          ->  Sufficiente
     * - 7 o 8      ->  Buono
     * - 9          ->  Ottimo
     * - 10         ->  Eccellente
     */
    
    $voto = 10;

    $giudizio = false;

    if ($voto <=5)
        $giudizio = "Insufficiente";
    elseif ($voto == 6)
        $giudizio = "Sufficiente";
    elseif ($voto == 7 or $voto == 8)
        $giudizio = "Buono";
    elseif ($voto == 9)
        $giudizio = "ottimo";
    elseif ($voto == 10)
        $giudizio = "eccellente";
    
    if ($voto < 0 or $voto > 10)
        $giudizio = "Voto non valido";
    
    /*a cosa serve elseif?
    serve per evitare di scrivere tanti if separati
    se usassi tanti if separati, verificherebbe tutte le condizioni
    con elseif, invece, appena ne trova una vera, esce dal controllo
    */

    echo "<h2>Esercizio 4</h2>";
    echo "$voto";
    echo "<br>";
    echo "Il giudizio è: $giudizio";




?>