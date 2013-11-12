<?php
require_once('IManager.php');

/**
 * Classe permettant la gestion des compétences utilisateurs.
 **/
class FormationsManager implements IManager {
	/**
	 * Fonction permettant de retourner la listes des Formations de l'utilisateur.
	 **/
	function getListRubrique(){
		$arrayResult = array();
		$index = 0;
		$arrayResult[$index]["DATE"] = "2003-2008";
		$arrayResult[$index]["POSTE"] = "Diplôme d'ingénieur";
		$arrayResult[$index]["CLIENT"] = "Polytechnique";
		$arrayResult[$index]["DESCRIPTION"] = "
			Spécalité système d'information. Major de promo.
			Réalisation du projet de fin d'étude \"OpeClassroomes\" : plateforme communautaire d'éducation ouvertes à tous.";

		return $arrayResult;
	}

	function databaseTraitementFormations(){

	}
}
