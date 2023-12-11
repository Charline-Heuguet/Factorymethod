<?php

require_once "Class/CompteBancaire.php";
require_once "Class/CompteCourant.php";
require_once "Class/CompteEpargne.php";
require_once "Class/CompteInvestissement.php";
require_once "Class/FabriqueDeCompte.php";

// Création d'un nouveau compte
$monCompte = FabriqueDeCompte::creerCompte("courant", "Jean Dupont", 1000, false, 123456);
$monCompte->afficherInfosCompte();

