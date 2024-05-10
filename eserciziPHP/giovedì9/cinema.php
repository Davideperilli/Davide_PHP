<?php
/* class Cinema {
    public $films = [];

    public function __construct() { 
        
    }
    public function aggiungiFilm($titolo, $posti) {
        $this->films[$titolo] = $posti;
    }

    public function prenotaPosto($titolo) {
        if (isset($this->films[$titolo]) && $this->films[$titolo] > 0) {
            $this->films[$titolo]--;
            echo "Prenota il film '$titolo'.\n";
        } else {
            echo "Spiacenti, i posti per il film '$titolo' sono esauriti.\n";
        }
    }

    public function mostraPrenotazioni() {
        foreach ($this->films as $titolo => $posti) {
            echo "$titolo: $posti posti disponibili\n";
        }
    }
}

// classe Cinema
$cinema = new Cinema();
$cinema->aggiungiFilm("the beach", 34);
$cinema->prenotaPosto("the beach");
$cinema->mostraPrenotazioni();
 */




 

function numeriPari($listaNumeri) {
     $numeriPari = array();
     foreach ($listaNumeri as $numero) {
         if ($numero % 2 == 0) {
             $numeriPari[] = $numero;
         }
     }
     return $numeriPari;
 }
 
  $listaNumeri = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
 $numeriPari = numeriPari($listaNumeri);
 foreach ($numeriPari as $numero) {
    echo $numero."\n";
 }
 
 
  

  /* $stringa1 = "inter";
  $stringa2 = "campione d'italia";
  $numero = 124; 
  
  if ($numero % 2 == 0) {
      $risultato = $stringa1 . $stringa2;
  } else {
      $risultato = $stringa2 . $stringa1;
  }
  
  echo $risultato; */
  


  /*  $numeri = array(4,6,10);
foreach ($numeri as $numero) {
    $risultato = $numero * 2;
    echo "$numero * 2 = $risultato\n";
} */
  