<?php

class Utente
{
    public $nome;
    public $cognome;
    public $mail;
    protected $password;

    public function setPassword($_password)
    {
        $this->password =($_password);

    }

    public function __construct($_nome, $_cognome, $_mail)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->mail = $_mail;
    }
}
