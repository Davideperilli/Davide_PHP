<?php
// Definizione delle funzioni
function somma($a, $b) {
    return $a + $b;
}

function sottrazione($a, $b) {
    return $a - $b;
}

function moltiplicazione($a, $b) {
    return $a * $b;
}

function divisione($a, $b) {
  return $a / $b;
}

$a = 22;
$b = 73;

// Array per memorizzare i risultati delle funzioni
$resultati = array();

// Array per memorizzare i nomi delle funzioni
$nomi_funzioni = array("somma", "sottrazione", "moltiplicazione", "divisione");

// Esecuzione delle funzioni con un ciclo for
for ($i = 0; $i < count($nomi_funzioni); $i++) {
    $nome_funzione = $nomi_funzioni[$i];
    $risultato = $nome_funzione($a, $b);
    $resultati[] = $risultato;
    
    // Stampa del risultato della funzione corrente
    echo ucfirst($nome_funzione) . ": " . $risultato . "\n";
}


$somma_totale = array_sum($resultati);

echo "Somma totale: " . $somma_totale;