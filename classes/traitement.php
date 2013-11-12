<?php
require_once('CompetencesManager.class.php');
require_once('ExperiencesManager.class.php');
require_once('FormationsManager.class.php');
require_once('CentresInteretsManager.class.php');

$manager = null;
$typeTraitement = $_GET['TYPE'];

switch ($typeTraitement) {
	case 'COMPETENCES':
		$manager = new CompetencesManager();
		break;
	case 'EXPERIENCES':
		$manager = new ExperiencesManager();
		break;
	case 'FORMATIONS':
		$manager = new FormationsManager();
		break;
	case 'CI':
		$manager = new CentresInteretsManager();
		break;
	default:
		break;
}
if($manager != null){
	echo json_encode($manager->getListRubrique());
}else{
	$array = array();
	echo json_encode($array);
}
die();