$(document).ready(function(){

	////////////////////////////////////////////////////
	///////adiciona tipo de representaçao espacial///////
	IncDec.incElement('#inc_dec_spatial_rep', '#maisSpatial', '#spatial_rep');
	IncDec.decElement('.spatial_rep', '#menosSpatial', 3);
	IncDec.initialLoad('#inc_dec_spatial_rep', '#spatial_rep');
	/*$("#inc_dec_spatial_rep").on("click", "#maisSpatial", function(event) {
		let clone_spatial_rep = $("#spatial_rep").clone(true);
		clone_spatial_rep.show();	
		$(event.target).parent().append(clone_spatial_rep);
	});
	///////fim adiciona tipo de representaçao espacial///////

	///////remove tipo de representaçao espacial///////
	$(".spatial_rep").on("click", "#menosSpatial", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove tipo de representaçao espacial///////

	///////load inicial da pagina: tipo de representaçao espacial///////
	let clone_spatial_rep = $("#spatial_rep").clone(true);
	clone_spatial_rep.show();	
	$("#inc_dec_spatial_rep").append(clone_spatial_rep);*/
	///////fim load inicial da pagina: tipo de representaçao espacial///////
	///////////////////////////////////////////////////////////////////////


	/////////////////////////////
	///////adiciona escala///////
	IncDec.incElement('#inc_dec_spatial_res', '#maisSpatialRes', '#spatial_res');
	IncDec.decElement('.spatial_res', '#menosSpatialRes', 3);
	IncDec.initialLoad('#inc_dec_spatial_res', '#spatial_res');
	/*$("#inc_dec_spatial_res").on("click", "#maisSpatialRes", function(event) {
		let clone_spatial_res = $("#spatial_res").clone(true);
		clone_spatial_res.show();	
		$(event.target).parent().append(clone_spatial_res);
	});
	///////fim adiciona escala///////

	///////remove escala///////
	$(".spatial_res").on("click", "#menosSpatialRes", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove escala///////

	///////load inicial da pagina: escala///////
	let clone_spatial_res = $("#spatial_res").clone(true);
	clone_spatial_res.show();	
	$("#inc_dec_spatial_res").append(clone_spatial_res);*/
	///////fim load inicial da pagina: escala///////
	////////////////////////////////////////////////

	///////////////////////////////
	///////adiciona language///////
	IncDec.incElement('#inc_dec_languageCdg', '#maisLangCdg', '#langCdg');
	IncDec.decElement('.langCdg', '#menosLangCdg', 3);
	IncDec.initialLoad('#inc_dec_languageCdg', '#langCdg');
	/*$("#inc_dec_languageCdg").on("click", "#maisLangCdg", function(event) {
		let clone_langCdg = $("#langCdg").clone(true);	
		clone_langCdg.show();	
		$(event.target).parent().append(clone_langCdg);
	});
	///////fim adiciona language///////

	///////remove language///////
	$("#langCdg").on("click", "#menosLangCdg", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove language///////

	//////load inicial da pagina: language///////
	let clone_langCdg = $("#langCdg").clone(true);
	clone_langCdg.show();	
	$("#inc_dec_languageCdg").append(clone_langCdg);*/
	///////fim load inicial da pagina: language///////
	//////////////////////////////////////////////////


	/////////////////////////////////////////
	///////adiciona categoria tematica///////
	IncDec.incElement('#inc_dec_topic_cat', '#maisTopicCat', '#topic_cat');
	IncDec.decElement('.topic_cat', '#menosTopicCat', 3);
	IncDec.initialLoad('#inc_dec_topic_cat', '#topic_cat');
	/*$("#inc_dec_topic_cat").on("click", "#maisTopicCat", function(event) {
		let clone_topic_cat = $("#topic_cat").clone(true);
		clone_topic_cat.show();	
		$(event.target).parent().append(clone_topic_cat);
	});
	///////fim adiciona categoria tematica///////

	///////remove categoria tematica///////
	$(".topic_cat").on("click", "#menosTopicCat", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove categoria tematica///////

	///////load inicial da pagina: categoria tematica///////
	let clone_topic_cat = $("#topic_cat").clone(true);
	clone_topic_cat.show();	
	$("#inc_dec_topic_cat").append(clone_topic_cat);*/
	///////fim load inicial da pagina: categoria tematica///////
	////////////////////////////////////////////////


	//////////////////////////////////////////////////////////////////////////////////////////////////
	///////adiciona poligono delimitador///////
	IncDec.incElement('#inc_dec_poli', '#maisPoli', '#poli_bound');
	IncDec.decElement('.poli_bound', '#menosPoli', 3);
	IncDec.initialLoad('#inc_dec_poli', '#poli_bound');
	/*$("#inc_dec_poli").on("click", "#maisPoli", function(event) {
		let clone_poli = $("#poli_bound").clone(true);
		clone_poli.show();	
		$(event.target).parent().append(clone_poli);
	});
	///////fim adiciona poligono delimitador///////

	///////remove poligono delimitador///////
	$(".poli_bound").on("click", "#menosPoli", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove poligono delimitador///////

	///////load inicial: adiciona poligono delimitador///////
	let clone_poli = $("#poli_bound").clone(true);
	clone_poli.show();	
	$("#inc_dec_poli").append(clone_poli);*/
	///////fim load inicial: adiciona poligono delimitador///////
	/////////////////////////////////////////////////////////////


	///////////////////////////////////////////
	///////adiciona retangulo envolvente///////
	IncDec.incElement('#inc_dec_geog_bound_box', '#maisGeogBoundBox', '#geog_bound_box');
	IncDec.decElement('.geog_bound_box', '#menosGeogBoundBox', 3);
	IncDec.initialLoad('#inc_dec_geog_bound_box', '#geog_bound_box');
	/*$("#inc_dec_geog_bound_box").on("click", "#maisGeogBoundBox", function(event) {
		let clone_geog_bound_box = $("#geog_bound_box").clone(true);
		clone_geog_bound_box.show();	
		$(event.target).parent().append(clone_geog_bound_box);
	});
	///////fim adiciona retangulo envolvente///////

	///////remove retangulo envolvente///////
	$(".geog_bound_box").on("click", "#menosGeogBoundBox", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove retangulo envolvente///////

	///////load inicial: retangulo envolvente///////
	let clone_geog_bound_box = $("#geog_bound_box").clone(true);
	clone_geog_bound_box.show();	
	$("#inc_dec_geog_bound_box").append(clone_geog_bound_box);*/
	///////fim load inicial: retangulo envolvente///////
	////////////////////////////////////////////////////

	//////////////////////////////////////////
	///////adiciona extensao geografica///////
	IncDec.incElement('#inc_dec_geog_elem', '#maisGeogElem', '#geog_elem');
	IncDec.decElement('.geog_elem', '#menosGeogElem', 3);
	IncDec.initialLoad('#inc_dec_geog_elem', '#geog_elem');
	/*$("#inc_dec_geog_elem").on("click", "#maisGeogElem", function(event) {
		let clone_geog_elem = $("#geog_elem").clone(true);
		clone_geog_elem.show();	
		$(event.target).parent().append(clone_geog_elem);
	});
	///////fim adiciona extensao geografica///////

	///////remove extensao geografica///////
	$(".geog_elem").on("click", "#menosGeogElem", function(event) {
		$(event.target).parent().parent().remove();
	});
	///////fim remove extensao geografica///////

	///////load inicial: extensao geografica///////
	let clone_geog_elem = $("#geog_elem").clone(true);
	clone_geog_elem.show();	
	$("#inc_dec_geog_elem").append(clone_geog_elem);*/
	///////fim load inicial: extensao geografica///////
	///////////////////////////////////////////////////

	///////////////////////////////
	///////adiciona extensao///////
	i_extent = 1;
	IncDec.incMenuElement('#inc_dec_extent', '#maisExtent', '#extent', 'extent', i_extent, '#menu_extent', 'Extensão');
	IncDec.decMenuElement('.extent', '#menosExtent', 3, '#menu_extent');
	IncDec.initialLoadMenu('#inc_dec_extent', '#extent', 'extent', '#menu_extent', 'Extensão');
	/*let i_extent = 1;
	$("#inc_dec_extent").on("click", "#maisExtent", function(event) {
		let new_id = 'extent' + i_extent;
		let clone_extent = $("#extent").clone(true);
		clone_extent.attr('id', new_id);
		clone_extent.show();	
		$(event.target).parent().append(clone_extent);
		$('#menu_extent').append("<li class = " + new_id + "><a href=#" + new_id + " class='link'> Extensão</a></li>");
		i_extent+=1;
	});
	///////fim adiciona extensao///////

	///////remove extensao///////
	$(".extent").on("click", "#menosExtent", function(event) {
		id = $(event.target).parent().parent().parent().attr("id");
		$(event.target).parent().parent().remove();
		//console.log(id);
		$("#menu_extent").find("." + id).remove();
	});
	///////fim remove extensao///////

	///////load inicial: extensao///////
	let new_id_extent = 'extent' + i_extent;
	let clone_extent = $("#extent").clone(true);
	clone_extent.attr('id', new_id_extent);
	clone_extent.show();	
	$("#inc_dec_extent").append(clone_extent);
	$('#menu_extent').append("<li class = " + new_id_extent + "><a href=#" + new_id_extent + " class='link'> Extensão</a></li>");
	i_extent+=1;*/
	///////fim load inicial: extensao///////
	////////////////////////////////////////
});