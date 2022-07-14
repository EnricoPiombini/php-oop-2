<?php

class Utente {
    public $nome;
    public $cognome;
    public $mail;
    public $password;

public function __construct($_nome, $_cognome, $_mail, $_eta)
{
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->mail = $_mail;
        $this->eta = $_eta;
    
}

}