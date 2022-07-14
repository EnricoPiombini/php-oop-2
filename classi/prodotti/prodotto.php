<?php

class Prodotto {
    public $nome;
    public $descrizione;
    public $tipologia;
    public $prezzo;

    public function __construct($_nome, $_descrizione,  $_tipologia, $_prezzo)
    {
        $this->nome = $_nome;
        $this->descrizione = $_descrizione;
        $this->tipologia = $_tipologia;
        $this->prezzo = $_prezzo;
        
    }


}