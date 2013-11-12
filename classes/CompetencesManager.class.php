<?php
require_once('IManager.php');

/**
 * Classe permettant la gestion des compétences utilisateurs.
 **/
class CompetencesManager implements IManager {
	/**
	 * Fonction permettant de retourner la listes des competences de l'utilisateur.
	 **/
	function getListRubrique(){
		$arrayResult = array();
		$index = 0;
		$arrayResult[$index]["COMP"] = "HTML5";
		$arrayResult[$index]["LEVEL"] = 1;
		$arrayResult[$index]["IMAGE"] = "images/competences/html5.png";
		$index++;
		$arrayResult[$index]["COMP"] = "CSS3";
		$arrayResult[$index]["LEVEL"] = 5;
		$arrayResult[$index]["IMAGE"] = "images/competences/css3.png";
		$index++;
		$arrayResult[$index]["COMP"] = "PHP";
		$arrayResult[$index]["LEVEL"] = 2;
		$arrayResult[$index]["IMAGE"] = "images/competences/php.png";
		$index++;
		$arrayResult[$index]["COMP"] = "MySql";
		$arrayResult[$index]["LEVEL"] = 1;
		$arrayResult[$index]["IMAGE"] = "images/competences/mysql.png";
		$index++;
		$arrayResult[$index]["COMP"] = "XML";
		$arrayResult[$index]["LEVEL"] = 3;
		$arrayResult[$index]["IMAGE"] = "images/competences/xml.png";
		$index++;
		$arrayResult[$index]["COMP"] = "XPath";
		$arrayResult[$index]["LEVEL"] = 2;
		$arrayResult[$index]["IMAGE"] = "images/competences/xpath.png";
		$index++;
		$arrayResult[$index]["COMP"] = "Javascript";
		$arrayResult[$index]["LEVEL"] = 3;
		$arrayResult[$index]["IMAGE"] = "images/competences/javascript.png";
		$index++;
		$arrayResult[$index]["COMP"] = "jQuery";
		$arrayResult[$index]["LEVEL"] = 2;
		$arrayResult[$index]["IMAGE"] = "images/competences/jquery.png";
		$index++;
		$arrayResult[$index]["COMP"] = "Photoshop";
		$arrayResult[$index]["LEVEL"] = 4;
		$arrayResult[$index]["IMAGE"] = "images/competences/ps.png";
		$index++;
		$arrayResult[$index]["COMP"] = "Illustrator";
		$arrayResult[$index]["LEVEL"] = 2;
		$arrayResult[$index]["IMAGE"] = "images/competences/illustrator.png";
		sleep(10);
		return $arrayResult;
	}

	function databaseTraitementCompetences(){

	}
}
