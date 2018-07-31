<?php
namespace Algo\StructureDonnees\StructureReflexive;
// use Algo\StructureDonnees\StructureReflexive\Pile

 class NoeudNaire {
 
	private $valeur;
	private $pileEnfants; // Pile ou est stockée les enfants du noeud courant

	public function __construct($valeur, array $listeEnfants = null) {
		if ($listeEnfants !== null) {
			$this->pileEnfants = new Pile();
			foreach ($listeEnfants as  $noeudEnfant) {
				$this->pileEnfants->empiler($noeudEnfant);
			}
		}
		$this->valeur = $valeur;
	}


	public function getValeur() {
		return $this->valeur;
	}


	public function setValeur($valeur) {
		$this->valeur = $valeur;
	}

	public function isFeuille() {
		return ($this->pileEnfants === null);
	}

	public  function parcourPrefixe(NoeudNaire $node) {
		echo $node->getValeur() .'<br>';
		// parcour de la pile en depilant pour recuperer les noeuds enfants
		if ($node->pileEnfants !== null) {
			while($node->pileEnfants->isVide() === false) {
				$noeud = $node->pileEnfants->depiler();
				$node->parcourPrefixe($noeud);
			} 
		}
	}

public  function parcourPostfixe(NoeudNaire $node) {
		// parcour de la pile en depilant pour recuperer les noeuds enfants
		if ($node->pileEnfants !== null) {
			while($node->pileEnfants->isVide() === false) {
				$noeud = $node->pileEnfants->depiler();
				$node->parcourPrefixe($noeud);
			} 
		}
		echo $node->getValeur() .'<br>';
	}
	
}
?>