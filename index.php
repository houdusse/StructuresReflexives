<?php
use Algo\StructureDonnees\StructureReflexive\NoeudBinaire;
use Algo\StructureDonnees\StructureReflexive\NoeudNaire;

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


echo '-------------Parcour Prefixé-------------<br>';
NoeudBinaire::parcourPrefixe($noeud1);
echo '<br>';

echo '-------------Parcour Infixé-------------<br>';
NoeudBinaire::parcourInfixe($noeud1);
echo '<br>';


echo '-------------Parcour Postfixé-------------<br>';
NoeudBinaire::parcourPostfixe($noeud1);
echo '<br>';


$node14 = new NoeudNaire(14);
$node15 = new NoeudNaire(15);
$node16 = new NoeudNaire(16);
$node17 = new NoeudNaire(17);
$node6 = new NoeudNaire(6);
$node7 = new NoeudNaire(7);
$node9 = new NoeudNaire(9);
$node10 = new NoeudNaire(10);
$node12 = new NoeudNaire(12);
$node8 = new NoeudNaire(8, array($node14, $node15));
$node11 = new NoeudNaire(11, array($node16));
$node13 = new NoeudNaire(13, array($node17));
$node2 = new NoeudNaire(2, array($node6, $node7));
$node3 = new NoeudNaire(3, array($node8));
$node4 = new NoeudNaire(4, array($node9, $node10, $node11));
$node5 = new NoeudNaire(5, array($node12, $node13));
$node1 = new NoeudNaire(1, array($node2, $node3, $node4, $node5));

echo '-------------Parcour Prefixé-------------<br>';
$node1->parcourPrefixe($node1);
echo '<br>';









?>