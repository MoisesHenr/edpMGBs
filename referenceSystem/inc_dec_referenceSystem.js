$(document).ready(function(){
	////////////////////////////
	///////adiciona datum///////
	IncDec.incElement('#inc_dec_datum', '#maisDatum', '#referenceDatum');
	IncDec.decElement('.referenceDatum', '#menosDatum', 3);
	IncDec.initialLoad('#inc_dec_datum', '#referenceDatum');
	/*$("#inc_dec_datum").on("click", "#maisDatum", function(event) {
		let clone_datum = $("#referenceDatum").clone(true);	
		clone_datum.show();	
		$(event.target).parent().append(clone_datum);
	});
	///////fim adiciona datum///////

	///////remove datum///////
	$("#referenceDatum").on("click", "#menosDatum", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove datum///////

	//////load inicial da pagina: datum///////
	let clone_datum = $("#referenceDatum").clone(true);
	clone_datum.show();	
	$("#inc_dec_datum").append(clone_datum);*/
	///////fim load inicial da pagina: datum///////
	///////////////////////////////////////////////


	//////////////////////////////////////////
	///////adiciona ellipsoidParameters///////
	IncDec.incElement('#inc_dec_ellipsoidParameters', '#maisEllipsoidParameters', '#ellipsoidParameters');
	IncDec.decElement('.ellipsoidParameters', '#menosEllipsoidParameters', 3);
	IncDec.initialLoad('#inc_dec_ellipsoidParameters', '#ellipsoidParameters');
	/*$("#inc_dec_ellipsoidParameters").on("click", "#maisEllipsoidParameters", function(event) {
		let clone_elip_param = $("#ellipsoidParameters").clone(true);	
		clone_elip_param.show();	
		$(event.target).parent().append(clone_elip_param);
	});
	///////fim adiciona ellipsoidParameters///////

	///////remove ellipsoidParameters///////
	$("#ellipsoidParameters").on("click", "#menosEllipsoidParameters", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove ellipsoidParameters///////

	//////load inicial da pagina: ellipsoidParameters///////
	let clone_elip_param = $("#ellipsoidParameters").clone(true);
	clone_elip_param.show();	
	$("#inc_dec_ellipsoidParameters").append(clone_elip_param);*/
	///////fim load inicial da pagina: ellipsoidParameters///////
	/////////////////////////////////////////////////////////////


	///////////////////////////////////////////
	///////adiciona projectionParameters///////
	IncDec.incElement('#inc_dec_projParam', '#maisProjParam', '#projParam');
	IncDec.decElement('.projParam', '#menosProjParam', 3);
	IncDec.initialLoad('#inc_dec_projParam', '#projParam');
	/*$("#inc_dec_projParam").on("click", "#maisProjParam", function(event) {
		let clone_proj_param = $("#projParam").clone(true);	
		clone_proj_param.show();	
		$(event.target).parent().append(clone_proj_param);
	});
	///////fim adiciona projectionParameters///////

	///////remove projectionParameters///////
	$("#projParam").on("click", "#menosProjParam", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove projectionParameters///////

	//////load inicial da pagina: projectionParameters///////
	let clone_proj_param = $("#projParam").clone(true);
	clone_proj_param.show();	
	$("#inc_dec_projParam").append(clone_proj_param);*/
	///////fim load inicial da pagina: projectionParameters///////
	//////////////////////////////////////////////////////////////
});