<?php

class ScontoUtente extends Utente
{

    public $sconto = 0;
    public $eta;

    public function setSconto($_sconto, $_eta)
    {
        $this->sconto = $_sconto;
        $this->eta = $_eta;



        if ($_eta > 60) {
            $this->sconto = 20;
        } elseif ($_eta < 18) {
            $this->sconto = 10;
        } else {
            $this->sconto = 0;
        };
    }
}
