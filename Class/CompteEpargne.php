<?php

class CompteEpargne extends CompteBancaire{
    private $tauxInteret;

    public function __construct(string $titulaire, bool $premium, int $numeroDeCompte, float $tauxInteret) {
        parent::__construct($titulaire, $premium, $numeroDeCompte);
        $this->tauxInteret = $tauxInteret;
    }

    public function appliquerInteret() {
        $this->solde += ($this->solde * $this->tauxInteret / 100);
    }
}