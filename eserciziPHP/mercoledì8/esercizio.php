<?php
$eta=18;
$giorno = "giovedì";

if($eta = NULL || $giorno == NULL) {
    echo"reinsirisci i dati";
} else {
    if($età>12  ){
        echo "il biglietto è gratis";
    }elseif($età <=12 && $età <18 ){
            if($giorno == "lunedì" || $$giorno == "martedì" || $giorno == "mercoledì" || $giorno == "giovedì" || $giorno == "venerdì");
            } elseif ($giorno == "sabato" || $giorno == "domenica") {
                echo "il biglietto costa 3£";
            }else{
                echo "iinserisci il giorno correttamente";
    }
    
}elseif($età >18 ){
    echo "il biglietto costa 8£";
}
?>