<?php

class ContoBancario {
    private $saldo;

    public function __construct($saldoIniziale) {
        $this->saldo = $saldoIniziale;
    }

    public function deposita($importo) {
        $this->saldo += $importo;
    }

    public function preleva($importo) {
        if ($importo <= $this->saldo) {
            $this->saldo -= $importo;
            return true;
        } else {
            return false; // Saldo insufficiente per il prelievo
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}
