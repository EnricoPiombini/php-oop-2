<?php

class Giochi extends Prodotto
{
    protected $materiale;
    protected $etaMinima = 0;

    public function setLimitage($_etaMinima, $_materiale)
    {

        $this->materiale = $_materiale;
        $this->etaMinima = $_etaMinima;

        if ($_etaMinima < 3) {
            $this->materiale = "Plastica";
        } else {
            $this->materiale = "Tutti quelli disponibili";
        }
    }
}
