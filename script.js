var competences = [
	{
		COMP: "HTML5",
		LEVEL: 1,
		IMAGE: "images/competences/html5.png"
	},
	{
		COMP: "CSS3",
		LEVEL: 5,
		IMAGE: "images/competences/css3.png"
	},
	{
		COMP: "PHP",
		LEVEL: 2,
		IMAGE: "images/competences/php.png"
	},
	{
		COMP: "MySql",
		LEVEL: 1,
		IMAGE: "images/competences/mysql.png"
	},
	{
		COMP: "XML",
		LEVEL: 3,
		IMAGE: "images/competences/xml.png"
	},
	{
		COMP: "XPath",
		LEVEL: 2,
		IMAGE: "images/competences/xpath.png"
	},
	{
		COMP: "Javascript",
		LEVEL: 3,
		IMAGE: "images/competences/javascript.png"
	},
	{
		COMP: "jQuery",
		LEVEL: 2,
		IMAGE: "images/competences/jquery.png"
	},
	{
		COMP: "Photoshop",
		LEVEL: 4,
		IMAGE: "images/competences/ps.png"
	},
	{
		COMP: "Illustrator",
		LEVEL: 2,
		IMAGE: "images/competences/illustrator.png"
	}
];

var experiences = [
	{
		IMAGE : "images/experiences/simple_it_logo.png",
		DATE:"Depuis 2010",
		POSTE: "Intégrateur Web",
		CLIENT:"Simple IT, Paris",
		DESCRITION: "\
			Réalisation d'interfaces web riches dans le recpect des maquettes fournies par le pôle graphisme.\
			Intégrations valides W3C en HTML5 et CCS3 pour la réalisation d'un site de cours en ligne. Mise en place de\
			la stratégie de responsive web design pour un accès lisible sur tous les mobiles et toutes les tablettes."
	},
	{
		IMAGE : "images/experiences/macdo_logo.png",
		DATE:"2009",
		POSTE: "Equipier polyvalent",
		CLIENT:"McDonalds, Avignon",
		DESCRITION: "\
			Tenue de la caisse, réalisation des hamburgers, des frites, des potatoes et de tout un tas d'autres choses bien grasses.\
			Animations Ronald Mc Donald le weekend."
	},
	
];

var formations = [
	{
		DATE:"2003-2008",
		POSTE: "Diplôme d'ingénieur",
		CLIENT:"Polytechnique",
		DESCRITION: "\
			Spécalité système d'information. Major de promo.\
			Réalisation du projet de fin d'étude \"OpeClassroomes\" : plateforme communautaire d'éducation ouvertes à tous."
	},
	
];
var centresInterets = [
	{
		IMAGE:"images/centre_interet/voyages.png",
		TITRE:"J'aime les voyages",
		DESCRITION: "\
			Chaque année, je pars en Asis, en Afrique ou en Océanie."
	},
	{
		IMAGE:"images/centre_interet/jeux.png",
		TITRE:"Les jeux vidéos",
		DESCRITION: "\
			FPS, RPG, Stratégie ... JE suis un expert reconnu de DoTa"
	},
	{
		IMAGE:"images/centre_interet/photographie.png",
		TITRE:"La photographie",
		DESCRITION: "\
			Je fais des photos de mes nombreux voyages."
	},
];
function traitementCompetences(){
	var tpl = $("#tpl_competences").html();
	for(var i in competences){
		$("#tableau_competences").append(Mustache.render(tpl, competences[i]));
	}
}
function traitementExperiences(){
	var tpl = $("#tpl_listLigne").html();
	for(var i in experiences){
		$("#tableau_experiences").append(Mustache.render(tpl, experiences[i]));
	}
}
function traitementFormations(){
	var tpl = $("#tpl_listLigne").html();
	for(var i in formations){
		$("#tableau_formations").append(Mustache.render(tpl, formations[i]));
	}
}

function traitementCentresInterets(){
	var tpl = $("#tpl_centresInteret").html();
	for(var i in centresInterets){
		$("#tableau_centresInteret").append(Mustache.render(tpl, centresInterets[i]));
	}
}

(function($){
	traitementCompetences();
	traitementExperiences();
	traitementFormations();
	traitementCentresInterets();
})(jQuery);