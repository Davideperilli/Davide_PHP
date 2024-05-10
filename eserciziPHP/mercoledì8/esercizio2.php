<?php
$costo5 = 5;
$costo10 = 10;
$costo15 = 15;
$costo20 = 20;


/* array oggetti (nome,classe,costo) */

$prodotto1 = array("prodotto1", "categoria A", $costo5);
$prodotto2 = array("prodotto2", "categoria B", $costo5);
$prodotto3 = array("prodotto3", "categoria C", $costo5);
$prodotto4 = array("prodotto4", "categoria A", $costo5);
$prodotto5 = array("prodotto5", "categoria B", $costo5);
$prodotto6 = array("prodotto6", "categoria C", $costo5);

$vendite = [$prodotto1, $prodotto3, $prodotto4, $prodotto5];
$lunghezza= count($vendite);

$costA=0;
$costB= 0;  
$costC= 0;

for($i = 0; $i < $lunghezza; $i++) {
    $ArrayAppoggio=$vendite[$i];
    if ($ArrayAppoggio[1] == "categoria A"){
        $costA=$costA + $ArrayAppoggio[2];
    } elseif ($ArrayAppoggio[1] == "categoria B"){
        $costB=$costB + $ArrayAppoggio[2];
    } elseif ($ArrayAppoggio[1] ==  "categoria C") {
        $costC=$costC + $ArrayAppoggio[2];
    }
}

echo"I SOLDI GUADAGNATI SONO: $costA,   $costB,  $costC";
