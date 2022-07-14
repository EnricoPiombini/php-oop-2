<?php

class Cibo extends Prodotto {
    protected $scadenza;
    protected $conservazione;

 public function setArguments($_scadenza, $_conservazione)
{
    $this ->scadenza = $_scadenza;
     $this -> conservazione = $_conservazione;
}


}