<?php

class CompteInvestissement extends CompteBancaire{
    private $risque;

    public function __construct(string $titulaire, bool $premium, int $numeroDeCompte, string $risque) {
        parent::__construct($titulaire, $premium, $numeroDeCompte);
        $this->risque = $risque;
    }

    public function evaluerRisque() {
        // Méthode pour évaluer le risque de l'investissement
        echo "Risque d'investissement : {$this->risque}";
    }
}