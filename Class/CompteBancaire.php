<?php

// CompteBancaire est le squelette de base pour tous les comptes bancaires.
// Il contient les propriétés et méthodes communes à tous les comptes.
// Et pour qu'il ne soit pas instancié directement, on le déclare comme abstrait.
abstract class CompteBancaire{
    private $titulaire;
    private $solde;
    private $devise;
    private $premium;
    private $numeroDeCompte;

    public function __construct(string $titulaire, bool $premium, int $numeroDeCompte) {
        $this->titulaire = $titulaire;
        $this->solde = 0;
        $this->devise = "euros";
        $this->premium = $premium;
        $this->numeroDeCompte = $numeroDeCompte;
    }

    public function getTitulaire()
    {
        return $this->titulaire;
    }


    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    public function getSolde()
    {
        return $this->solde;
    }


    public function getDevise()
    {
        return $this->devise;
    }

    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * set the value of premium
     */ 
    public function setPremium()
    {
        return $this->premium;
    }

    /**
     * Get the value of numeroDeCompte
     */ 
    public function getNumeroDeCompte()
    {
        return $this->numeroDeCompte;
    }

    //   Ajoutez une méthode deposerArgent($montant): Cette méthode ajoute le montant spécifié au solde du compte.
    public function deposerArgent($montant) {
        $this->solde += $montant;
    }

    //   Créez une méthode retirerArgent($montant): Cette méthode soustrait le montant du solde, à condition que le solde soit suffisant. Sinon, affichez un message d'erreur.
    public function retirerArgent($montant) {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
        } else {
            echo "Solde insuffisant";
        }
    }

    //   Créez une méthode afficherSolde(): Cette méthode affiche le solde du compte.
    public function afficherSolde() {
        echo "Le solde du compte est de $this->solde $this->devise";
    }

    // Créez une méthode transfererArgent($montant, $autreCompte):Cette méthode permet de transférer un montant d'un compte à un autre. Assurez-vous que le compte source a un solde suffisant avant le transfert.
    public function transfererArgent($montant, $autreCompte) {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
            $autreCompte->solde += $montant;
        } else {
            echo "Solde insuffisant";
        }
    }

    // Affichage d'un compte bancaire
    public function afficherInfosCompte() {
        echo "Le compte bancaire de {$this->titulaire} a un solde de {$this->solde} {$this->devise}.";
    }
}