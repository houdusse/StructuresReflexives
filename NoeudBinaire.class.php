<?php
namespace Algo\StructureDonnees\StructureReflexive;

 class NoeudBinaire {
 
	private $valeur;
	private $gauche;
	private $droit;

	public function __construct($valeur, NoeudBinaire $gauche = null, NoeudBinaire $droit = null) {
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

	public function setGauche(NoeudBinaire $gauche) {
		$this->gauche = $gauche;
	}

	public function setDroit(NoeudBinaire $droit) {
		$this->droit = $droit;
	}

	public function isFeuille() {
		return ($this->gauche === null AND $this->droit === null);
	}

	public static function parcourPrefixe(NoeudBinaire $racine) {
		echo $racine->getValeur() .'<br>';
		if ($racine->getGauche() !== null ) {
			self::parcourPrefixe($racine->getGauche());
		}

		if ($racine->getDroit() !== null) {
			self::parcourPrefixe($racine->getDroit());
		}
	}

	public static function parcourInfixe(NoeudBinaire $racine) {
		if ($racine->getGauche() !== null ) {
			self::parcourinfixe($racine->getGauche());
		}
		echo $racine->getValeur() .'<br>';

		if ($racine->getDroit() !== null) {
			self::parcourInfixe($racine->getDroit());
		}
	}

		public static function parcourPostfixe(NoeudBinaire $racine) {
		if ($racine->getGauche() !== null ) {
			self::parcourPostfixe($racine->getGauche());
		}

		if ($racine->getDroit() !== null) {
			self::parcourPostfixe($racine->getDroit());
		}
		echo $racine->getValeur() .'<br>';
	}





}



?>