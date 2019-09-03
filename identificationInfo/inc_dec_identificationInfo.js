$(document).ready(function(){
	///////adiciona date///////
	IncDec.incElement('#inc_dec_date', '#maisDate', '#dateType');
	IncDec.decElement('.dateType', '#menosDate', 3);
	IncDec.initialLoad('#inc_dec_date', '#dateType');
	/*$("#inc_dec_date").on("click", "#maisDate", function(event) {
		let clone_dat = $("#dateType").clone(true);	
		clone_dat.show();	
		$(event.target).parent().append(clone_dat);
	});
	///////fim adiciona date///////

	///////remove data///////
	$("#dateType").on("click", "#menosDate", function(event) {
		$(event.target).parent().parent().remove();
	});
	///////fim remove data///////

	//////load inicial da pagina: data///////
	let clone_dat = $("#dateType").clone(true);
	clone_dat.show();	
	$("#inc_dec_date").append(clone_dat);
	///////fim load inicial da pagina: data///////*/

	///////adiciona citation///////
	i_citation = 1;
	IncDec.incMenuElement('#inc_dec_citation', '#maisCit', '#citation', 'citation', i_citation, '#menu_citation', 'Citação');
	IncDec.decMenuElement('.citation', '#menosCit', 3, '#menu_citation');
	IncDec.initialLoadMenu('#inc_dec_citation', '#citation', 'citation', '#menu_citation', 'Citação');
	/*let i_citation = 1;
	$("#inc_dec_citation").on("click", "#maisCit", function(event) {
		let new_id = "citation" + i_citation;
		let clone_cit = $("#citation").clone(true,true);
		clone_cit.attr("id", new_id);
		clone_cit.show();
		$(event.target).parent().append(clone_cit);
		$("#menu_citation").append("<li class = " + new_id + "><a href=#" + new_id + " class='link'> Citação</a></li>");
		i_citation+=1;
	});
	///////fim adiciona citation///////

	///////remove citation///////
	$(".citation").on("click", "#menosCit", function(event) {
		$(event.target).parent().parent().parent().remove();
		id = $(event.target).parent().parent().parent().attr("id");
		$("#menu_citation").find("." + id).remove();
	});
	///////fim remove citation///////

	///////load inicial da pagina: citaçao///////
	let clone_cit = $("#citation").clone(true,true);
	clone_cit.attr("id", "citation" + i_citation);
	clone_cit.show();
	$("#inc_dec_citation").append(clone_cit);
	let new_id = "citation" + i_citation;
	$("#menu_citation").append("<li class = " + new_id + "><a href=#" + new_id + " class='link'> Citação</a></li>");
	i_citation+=1;*/
	///////fim load inicial da pagina: citaçao///////
	/////////////////////////////////////////////////
	
	///////adiciona Nome da organização///////
	IncDec.incElement('#inc_dec_metadataOrgNamePoint', '#maisMetadataOrgNamePoint', '#metadataOrgNamePoint');
	IncDec.decElement('.metadataOrgNamePoint', '#menosMetadataOrgNamePoint', 3);
	IncDec.initialLoad('#inc_dec_metadataOrgNamePoint', '#metadataOrgNamePoint');
	/*$("#inc_dec_metadataOrgNamePoint").on("click", "#maisMetadataOrgNamePoint", function(event) {
		let clone_metadataOrgNamePoint = $("#metadataOrgNamePoint").clone(true);	
		clone_metadataOrgNamePoint.show();
		$(event.target).parent().append(clone_metadataOrgNamePoint);
	});
	///////fim adiciona Nome da organização///////

	///////remove Nome da organização///////
	$(".metadataOrgNamePoint").on("click", "#menosMetadataOrgNamePoint", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove Nome da organização///////

	//////load inicial da pagina: Nome da organização///////
	let clone_metadataOrgNamePoint = $("#metadataOrgNamePoint").clone(true);	
	clone_metadataOrgNamePoint.show();
	$("#inc_dec_metadataOrgNamePoint").append(clone_metadataOrgNamePoint);*/
	//////fim load inicial da pagina: Nome da organização///////

	///////adiciona Funçao///////
	IncDec.incElement('#inc_dec_rolPoint', '#maisRolPoint', '#rolPoint');
	IncDec.decElement('.rolPoint', '#menosRolPoint', 3);
	IncDec.initialLoad('#inc_dec_rolPoint', '#rolPoint');
	/*$("#inc_dec_rolPoint").on("click", "#maisRolPoint", function(event) {
		let clone_rolPoint = $("#rolPoint").clone(true);
		clone_rolPoint.show();
		$(event.target).parent().append(clone_rolPoint);
	});
	///////fim adiciona Funçao///////

	///////remove Funçao///////
	$(".rolPoint").on("click", "#menosRolPoint", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove Funçao///////

	//////load inicial da pagina: funçao///////
	let clone_rolPoint = $("#rolPoint").clone(true);
	clone_rolPoint.show();
	$("#inc_dec_rolPoint").append(clone_rolPoint);*/
	//////fim load inicial da pagina: funçao///////

	///////adiciona Responsavel pelo recurso///////
	i_pointOfContact = 1;
	IncDec.incMenuElement('#inc_dec_pointOfContact', '#maisPointOfContact', '#pointOfContact', 'pointOfContact', i_pointOfContact, '#menu_pointOfContact', 'Responsável pelo Recurso');
	IncDec.decMenuElement('.pointOfContact', '#menosPointOfContact', 3, '#menu_pointOfContact');
	IncDec.initialLoadMenu('#inc_dec_pointOfContact', '#pointOfContact', 'pointOfContact', '#menu_pointOfContact', 'Responsável pelo Recurso');
	/*i_pointOfContact = 1;
	$("#inc_dec_pointOfContact").on("click", "#maisPointOfContact", function(event) {
		let new_id_pointOfContact = "pointOfContact" + i_pointOfContact;
		let clone_pointOfContact = $("#pointOfContact").clone(true);	
		clone_pointOfContact.show();
		clone_pointOfContact.attr("id", new_id_pointOfContact);
		$(event.target).parent().append(clone_pointOfContact);
		$("#menu_pointOfContact").append("<li class = " + new_id_pointOfContact + "><a href=#" + new_id_pointOfContact + " class='link'> Responsável pelo Recurso</a></li>");
		i_pointOfContact+=1;
	});
	///////fim adiciona Responsavel pelo recurso///////

	///////remove Responsavel pelo recurso///////
	$(".pointOfContact").on("click", "#menosPointOfContact", function(event) {
		$(event.target).parent().parent().parent().remove();
		id_pointOfContact = $(event.target).parent().parent().parent().attr("id");
		$("#menu_pointOfContact").find("." + id_pointOfContact).remove();
	});
	///////fim remove Responsavel pelo recurso///////

	///////load inicial da pagina: Responsavel pelo recurso///////
	let new_id_pointOfContact = "pointOfContact" + i_pointOfContact;
	let clone_pointOfContact = $("#pointOfContact").clone(true);	
	clone_pointOfContact.show();
	clone_pointOfContact.attr("id", new_id_pointOfContact);
	$("#inc_dec_pointOfContact").append(clone_pointOfContact);
	$("#menu_pointOfContact").append("<li class = " + new_id_pointOfContact + "><a href=#" + new_id_pointOfContact + " class='link'> Responsável pelo Recurso</a></li>");
	i_pointOfContact+=1;*/
	///////fim load inicial da pagina: Responsavel pelo recurso///////
	//////////////////////////////////////////////////////////////////

	///////adiciona keywords///////
	IncDec.incElement('#inc_dec_keyw', '#maisKeyw', '#keyw');
	IncDec.decElement('.keyw', '#menoskeyw', 3);
	IncDec.initialLoad('#inc_dec_keyw', '#keyw');
	/*$("#inc_dec_keyw").on("click", "#maisKeyw", function(event) {
		let clone_keywords = $("#keyw").clone(true);
		clone_keywords.show();
		$(event.target).parent().append(clone_keywords);
	});
	///////fim adiciona keywords///////

	///////remove keywords///////
	$(".keyw").on("click", "#menoskeyw", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove keywords///////

	//////load inicial da pagina: keywords///////
	let clone_keywords = $("#keyw").clone(true);
	clone_keywords.show();
	$("#inc_dec_keyw").append(clone_keywords);*/
	//////fim load inicial da pagina: keywords///////

	///////adiciona descriptiveKeywords///////
	IncDec.incElement('#inc_dec_descriptiveKeywords', '#maisDescriptiveKeywords', '#descKeywords');
	IncDec.decElement('.descKeywords', '#menosDescriptiveKeywords', 3);
	IncDec.initialLoad('#inc_dec_descriptiveKeywords', '#descKeywords');
	/*$("#inc_dec_descriptiveKeywords").on("click", "#maisDescriptiveKeywords", function(event) {
		let clone_descriptiveKeywords = $("#descKeywords").clone(true);
		clone_descriptiveKeywords.show();
		$(event.target).parent().append(clone_descriptiveKeywords);
	});
	///////fim adiciona descriptiveKeywords///////

	///////remove descriptiveKeywords///////
	$(".descKeywords").on("click", "#menosDescriptiveKeywords", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove descriptiveKeywords///////

	//////load inicial da pagina: descriptiveKeywords///////
	let clone_descriptiveKeywords = $("#descKeywords").clone(true);
	clone_descriptiveKeywords.show();
	$("#inc_dec_descriptiveKeywords").append(clone_descriptiveKeywords);*/
	//////fim load inicial da pagina: descriptiveKeywords///////

	///////adiciona graphicOverview///////
	IncDec.incElement('#inc_dec_graphicOverview', '#maisGraphicOverview', '#graphicOverview');
	IncDec.decElement('.graphicOverview', '#menosGraphicOverview', 3);
	IncDec.initialLoad('#inc_dec_graphicOverview', '#graphicOverview');
	/*$("#inc_dec_graphicOverview").on("click", "#maisGraphicOverview", function(event) {
		let clone_graphicOverview = $("#graphicOverview").clone(true);
		clone_graphicOverview.show();
		$(event.target).parent().append(clone_graphicOverview);
	});
	///////fim adiciona graphicOverview///////

	///////remove graphicOverview///////
	$(".graphicOverview").on("click", "#menosGraphicOverview", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove graphicOverview///////

	//////load inicial da pagina: graphicOverview///////
	let clone_graphicOverview = $("#graphicOverview").clone(true);
	clone_graphicOverview.show();
	$("#inc_dec_graphicOverview").append(clone_graphicOverview);*/
	//////fim load inicial da pagina: graphicOverview///////
});