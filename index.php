<?php
use Algo\StructureDonnees\StructureReflexive\NoeudBinaire;

// Mise en place autoloader
require 'autoloader.class.php';
Algo\StructureDonnees\StructureReflexive\MountLoader::defLoader();



// On commence par les feuilles de l'arbre
// puis on remonte vers la racine
$noeud13 = new NoeudBinaire(13);
$noeud8 = new NoeudBinaire(8);
$noeud9 = new NoeudBinaire(9);
$noeud6 = new NoeudBinaire(6);
$noeud10 = new NoeudBinaire(10);
$noeud11 = new NoeudBinaire(11);
$noeud12 = new NoeudBinaire(12, $noeud13);
$noeud4 = new NoeudBinaire(4, $noeud8, $noeud9);
$noeud5 = new NoeudBinaire(5, $noeud10);
$noeud7 = new NoeudBinaire(7, $noeud11, $noeud12);
$noeud2 = new NoeudBinaire(2, $noeud4, $noeud5);
$noeud3 = new NoeudBinaire(3, $noeud6, $noeud7);
$noeud1 = new NoeudBinaire(1, $noeud2, $noeud3);







?>