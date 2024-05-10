<?php
function calcola_media($array_valori) {
    // array vuoto
    if (empty($array_valori)) {
        return 0;
    }
    
    // somma dei numeri 
    $somma = array_sum($array_valori);
   
    // numero elementi 
    $numero_elementi = count($array_valori);
    
    // Calcolo la media
    $media = $somma / $numero_elementi;
    
    return $media;
}


$array1 = array(5, 6, 7, 8, 9);
echo "media di [5, 6, 7, 8, 9]: " . calcola_media($array1) . "\n";

$array2 = array();
echo "media di []: " . calcola_media($array2) . "\n";

$array3 = array(25, 30, 50);
echo "media di [25, 30, 50]: " . calcola_media($array3) . "\n";

function trova_massimo($array_valori) {
    
    // array vuoto
    if (empty($array_valori)) {
        return 0;
    }
    
    // valore massimo 
    $massimo = max($array_valori);
    
    return $massimo;
}

$array1 = array(5, 6, 7, 8, 9);
echo "massimo di [5, 6, 7, 8, 9]: " . trova_massimo($array1) . "\n";

$array2 = array();
echo "massimo di []: " . trova_massimo($array2) . "\n";

$array3 = array(25, 30, 50);
echo "Massimo di [25, 30, 50]: " . trova_massimo($array3) . "\n";