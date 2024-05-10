<?php

/* class Automobile{
    public $marca;
    public $modello;

    public function __construct($marca, $modello){
        $this->marca = $marca;
        $this->modello = $modello;
}

public function dettagliAuto(){
    return "marca:" . $this->marca. " modello:".$this->modello;
} 
}
$auto = new Automobile("Nissan", "juke");
$auto1 = new Automobile("Fiat", "panda");

echo $auto->dettagliAuto();
echo "\n";
echo $auto1 ->dettagliAuto();   
 */

 
 /* class Account {
    private $saldo;
 
    public function __construct($saldoIniziale) {
        $this->saldo = $saldoIniziale;
    }
 
    public function deposita($importo) {
        if ($importo > 0) {
            $this->saldo += $importo;
        }
    }
 
    public function preleva($importo) {
        if ($importo <= $this->saldo) {
            $this->saldo -= $importo;
            return $importo;
        }
        return 0; // Non sufficiente saldo
    }
 
    public function getSaldo() {
        return $this->saldo;
    }
}

$account = new Account(6000);
$account->deposita(3500);
echo $account->getSaldo(). "\n";
$account->preleva(50);
echo $account->getSaldo();
 */


 class Veicolo{
    public $ruote=4;
 }

 class Moto extends Veicolo{
    public function numeroDiRuote() {
        return $this->ruote;
 }
}

$moto = new Moto();
echo $moto->numeroDiRuote(); 

