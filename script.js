
function traitementCompetences(){
	var tpl = $("#tpl_competences").html();
	$.get('classes/traitement.php', {TYPE:"COMPETENCES"}, function(competences){
		for(var i in competences){
			$("#tableau_competences").append(Mustache.render(tpl, competences[i]));
		}
	}, 'json');
	
	
}
function traitementExperiences(){
	var tpl = $("#tpl_listLigne").html();
	$.get('classes/traitement.php', {TYPE:"EXPERIENCES"}, function(experiences){
		for(var i in experiences){
			$("#tableau_experiences").append(Mustache.render(tpl, experiences[i]));
		}
	}, 'json');
}

function traitementFormations(){
	var tpl = $("#tpl_listLigne").html();
	$.get('classes/traitement.php', {TYPE:"FORMATIONS"}, function(formations){
		for(var i in formations){
			$("#tableau_formations").append(Mustache.render(tpl, formations[i]));
		}
	}, 'json');

}

function traitementCentresInterets(){
	var tpl = $("#tpl_centresInteret").html();
	$.get('classes/traitement.php', {TYPE:"CI"}, function(centresInterets){
		for(var i in centresInterets){
			$("#tableau_centresInteret").append(Mustache.render(tpl, centresInterets[i]));
		}
	}, 'json');

}

(function($){
	traitementCompetences();
	traitementExperiences();
	traitementFormations();
	traitementCentresInterets();
})(jQuery);