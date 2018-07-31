<?php
namespace Algo\StructureDonnees\StructureReflexive;

 class Noeud {
 
	private $valeur;
	private $gauche;
	private $droit;

	public function __construct($valeur, Noeud $gauche = null, Noeud $droit = null) {
		$this->valeur = $valeur;
		$this->gauche = $gauche;
		$this->droit = $droit;
	}


	public function getValeur() {
		return $this->valeur;
	}

	public function getGauche() {
		return $this->gauche;
	}

	public function getDroit() {
		return $this->droit;
	}

	public function setValeur($valeur) {
		$this->valeur = $valeur;
	}

	public function setGauche(Noeud $gauche) {
		$this->gauche = $gauche;
	}

	public function setDroit(Noeud droit) {
		$this->droit = $droit;
	}

	public function isFeuille() {
		return ($this->gauche === null AND $this->droit === null);
	}




}



?>