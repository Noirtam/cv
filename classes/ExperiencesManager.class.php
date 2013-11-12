<?php
require_once('IManager.php');

/**
 * Classe permettant la gestion des compétences utilisateurs.
 **/
class ExperiencesManager implements IManager {
	/**
	 * Fonction permettant de retourner la listes des Experiences de l'utilisateur.
	 **/
	function getListRubrique(){
		$arrayResult = array();
		$index = 0;
		$arrayResult[$index]["IMAGE"]	= "images/experiences/simple_it_logo.png";
		$arrayResult[$index]["DATE"] 	= "Depuis 2010";
		$arrayResult[$index]["POSTE"] 	= "Intégrateur Web";
		$arrayResult[$index]["CLIENT"] 	= "Simple IT, Paris";
		$arrayResult[$index]["DESCRIPTION"] = "
			Réalisation d'interfaces web riches dans le recpect des maquettes fournies par le pôle graphisme.Intégrations valides W3C en HTML5 et CCS3 pour la réalisation d'un site de cours en ligne. 
			Mise en place de la stratégie de responsive web design pour un accès lisible sur tous les mobiles et toutes les tablettes.";

		$index++;
		$arrayResult[$index]["IMAGE"] 	= "images/experiences/macdo_logo.png";
		$arrayResult[$index]["DATE"] 	= "2009";
		$arrayResult[$index]["POSTE"]	= "Equipier polyvalent";
		$arrayResult[$index]["CLIENT"] 	= "McDonalds, Avignon";
		$arrayResult[$index]["DESCRIPTION"] = "
			Tenue de la caisse, réalisation des hamburgers, des frites, des potatoes et de tout un tas d'autres choses bien grasses.\
			Animations Ronald Mc Donald le weekend.";

		return $arrayResult;
	}

	function databaseTraitementExperiences(){

	}
}
