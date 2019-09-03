$(document).ready(function(){
	///////////////////////////////
	///////adiciona language///////
	IncDec.incElement('#inc_dec_language', '#maisLang', '#lang');
	IncDec.decElement('.lang', '#menosLang', 3);
	IncDec.initialLoad('#inc_dec_language', '#lang');
	/*$("#inc_dec_language").on("click", "#maisLang", function(event) {
		let clone_lang = $("#lang").clone(true);	
		clone_lang.show();	
		$(event.target).parent().append(clone_lang);
	});
	///////fim adiciona language///////

	///////remove language///////
	$("#lang").on("click", "#menosLang", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove language///////

	//////load inicial da pagina: language///////
	let clone_lang = $("#lang").clone(true);
	clone_lang.show();	
	$("#inc_dec_language").append(clone_lang);*/
	///////fim load inicial da pagina: language///////
	//////////////////////////////////////////////////


	/////////////////////////////////////////
	///////adiciona Character Set Code///////
	IncDec.incElement('#inc_dec_character', '#maisCharacter', '#character');
	IncDec.decElement('.character', '#menosCharacter', 3);
	IncDec.initialLoad('#inc_dec_character', '#character');
	/*$("#inc_dec_character").on("click", "#maisCharacter", function(event) {
		let clone_character = $("#character").clone(true);	
		clone_character.show();	
		$(event.target).parent().append(clone_character);
	});
	///////fim adiciona Character Set Code///////

	///////remove Character Set Code///////
	$("#character").on("click", "#menosCharacter", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove Character Set Code///////

	//////load inicial da pagina: Character Set Code///////
	let clone_character = $("#character").clone(true);
	clone_character.show();	
	$("#inc_dec_character").append(clone_character);*/
	///////fim load inicial da pagina: Character Set Code///////
	////////////////////////////////////////////////////////////


	//////////////////////////////////////////
	///////adiciona Nome da organização///////
	IncDec.incElement('#inc_dec_metadataOrgName', '#maisMetadataOrgName', '#metadataOrgName');
	IncDec.decElement('.metadataOrgName', '#menosMetadataOrgName', 3);
	IncDec.initialLoad('#inc_dec_metadataOrgName', '#metadataOrgName');
	/*$("#inc_dec_metadataOrgName").on("click", "#maisMetadataOrgName", function(event) {
		let clone_metadataOrgName = $("#metadataOrgName").clone(true);	
		clone_metadataOrgName.show();
		$(event.target).parent().append(clone_metadataOrgName);
	});
	///////fim adiciona Nome da organização///////

	///////remove Nome da organização///////
	$(".metadataOrgName").on("click", "#menosMetadataOrgName", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove Nome da organização///////

	//////load inicial da pagina: Nome da organização///////
	let clone_metadataOrgName = $("#metadataOrgName").clone(true);	
	clone_metadataOrgName.show();
	$("#inc_dec_metadataOrgName").append(clone_metadataOrgName);*/
	//////fim load inicial da pagina: Nome da organização///////
	////////////////////////////////////////////////////////////


	/////////////////////////////
	///////adiciona Funçao///////
	IncDec.incElement('#inc_dec_rol', '#maisRol', '#rol');
	IncDec.decElement('.rol', '#menosRol', 3);
	IncDec.initialLoad('#inc_dec_rol', '#rol');
	/*$("#inc_dec_rol").on("click", "#maisRol", function(event) {
		let clone_rol = $("#rol").clone(true);
		clone_rol.show();
		$(event.target).parent().append(clone_rol);
	});
	///////fim adiciona Funçao///////

	///////remove Funçao///////
	$(".rol").on("click", "#menosRol", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove Funçao///////

	//////load inicial da pagina: funçao///////
	let clone_rol = $("#rol").clone(true);
	clone_rol.show();
	$("#inc_dec_rol").append(clone_rol);*/
	//////fim load inicial da pagina: funçao///////
	///////////////////////////////////////////////


	///////////////////////////////////////////////
	///////adiciona Responsavel pelo recurso///////
	i_cont = 1;
	IncDec.incMenuElement('#inc_dec_contact', '#maisContact', '#contact', 'contact', i_cont, '#menu_contact', 'Responsável pelo Metadado');
	IncDec.decMenuElement('.contact', '#menosContact', 3, '#menu_contact');
	IncDec.initialLoadMenu('#inc_dec_contact', '#contact', 'contact', '#menu_contact', 'Responsável pelo Metadado');
	/*i_cont = 1;
	$("#inc_dec_contact").on("click", "#maisContact", function(event) {
		let new_id_cont = "contact" + i_cont;
		let clone_contact = $("#contact").clone(true);	
		clone_contact.show();
		clone_contact.attr("id", new_id_cont);
		$(event.target).parent().append(clone_contact);
		$("#menu_contact").append("<li class = " + new_id_cont + "><a href=#" + new_id_cont + " class='link'> Responsável pelo Metadado</a></li>");
		i_cont+=1;
	});
	///////fim adiciona Responsavel pelo recurso///////

	///////remove Responsavel pelo recurso///////
	$(".contact").on("click", "#menosContact", function(event) {
		$(event.target).parent().parent().parent().remove();
		id_cont = $(event.target).parent().parent().parent().attr("id");
		$("#menu_contact").find("." + id_cont).remove();
	});
	///////fim remove Responsavel pelo recurso///////

	///////load inicial da pagina: Responsavel pelo recurso///////
	let new_id_cont = "contact" + i_cont;
	let clone_contact = $("#contact").clone(true);	
	clone_contact.show();
	clone_contact.attr("id", new_id_cont);
	$("#inc_dec_contact").append(clone_contact);
	$("#menu_contact").append("<li class = " + new_id_cont + "><a href=#" + new_id_cont + " class='link'> Responsável pelo Metadado</a></li>");
	i_cont+=1;*/
	///////fim load inicial da pagina: Responsavel pelo recurso///////
	//////////////////////////////////////////////////////////////////
});