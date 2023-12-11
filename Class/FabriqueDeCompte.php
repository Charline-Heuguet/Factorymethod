<?php

require_once "Class/CompteBancaire.php";
require_once "Class/CompteCourant.php";
require_once "Class/CompteEpargne.php";
require_once "Class/CompteInvestissement.php";

// FabriqueDeCompte est une classe qui permet de créer des comptes bancaires.
class FabriqueDeCompte {

    // La méthode creerCompte() permet de créer un compte bancaire en fonction de son type. 
    public static function creerCompte($typeDeCompte, $titulaire, $soldeInitial, $premium, $numeroDeCompte) {
        switch ($typeDeCompte) {
            // En fonction du type de compte, on crée un objet de la classe correspondante:
            // Si $typeDeCompte est "courant", alors new CompteCourant(...) est appelé.
            case "courant":
                return new CompteCourant($titulaire, $premium, $numeroDeCompte);
            case "epargne":
                return new CompteEpargne($titulaire, $premium, $numeroDeCompte);
            case "investissement":
                return new CompteInvestissement($titulaire, $premium, $numeroDeCompte);
            default:
                echo "Type de compte inconnu.";
                return null;
        }
    }
}
