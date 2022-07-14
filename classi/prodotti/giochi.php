<?php

class Giochi extends Prodotto {
    protected $materiale;
    protected $etaMinima;

public function __construct($_materiale, $_utilizzo)
{
    $this ->materiale = $_materiale;
    $this -> utilizzo = $_utilizzo;
}


}