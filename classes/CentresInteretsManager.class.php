<?php
require_once('IManager.php');

/**
 * Classe permettant la gestion des compétences utilisateurs.
 **/
class CentresInteretsManager implements IManager {
	/**
	 * Fonction permettant de retourner la listes des CentresInterets de l'utilisateur.
	 **/
	function getListRubrique(){
		$arrayResult = array();
		$index = 0;
		$arrayResult[$index]["IMAGE"]	= "images/centre_interet/voyages.png";
		$arrayResult[$index]["TITRE"] 	= "J'aime les voyages";
		$arrayResult[$index]["DESCRIPTION"] = "Chaque année, je pars en Asis, en Afrique ou en Océanie.";

		$index++;
		$arrayResult[$index]["IMAGE"]	= "images/centre_interet/jeux.png";
		$arrayResult[$index]["TITRE"] 	= "Les jeux vidéos";
		$arrayResult[$index]["DESCRIPTION"] = "FPS, RPG, Stratégie ... JE suis un expert reconnu de DoTa.";

		$index++;
		$arrayResult[$index]["IMAGE"]	= "images/centre_interet/photographie.png";
		$arrayResult[$index]["TITRE"] 	= "La photographie";
		$arrayResult[$index]["DESCRIPTION"] = "Je fais des photos de mes nombreux voyages.";

		return $arrayResult;
	}

	function databaseTraitementCentresInterets(){

	}
}
