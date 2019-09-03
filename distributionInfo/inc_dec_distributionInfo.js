$(document).ready(function(){

	//////////////////////////////////////////////
	///////adiciona formato de distribuiçao///////
	IncDec.incElement('#inc_dec_nameFor', '#maisNameFor', '#nameFor');
	IncDec.decElement('.nameFor', '#menosNameFor', 3);
	IncDec.initialLoad('#inc_dec_nameFor', '#nameFor');
	/*$("#inc_dec_nameFor").on("click", "#maisNameFor", function(event) {
		let clone_name_for = $("#nameFor").clone(true);
		clone_name_for.show();	
		$(event.target).parent().append(clone_name_for);
	});
	///////fim adiciona formato de distribuiçao///////

	///////remove formato de distribuiçao///////
	$(".nameFor").on("click", "#menosNameFor", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove formato de distribuiçao///////

	///////load inicial da pagina: formato de distribuiçao///////
	let clone_name_for = $("#nameFor").clone(true);
	clone_name_for.show();	
	$("#inc_dec_nameFor").append(clone_name_for);*/
	///////fim load inicial da pagina: formato de distribuiçao///////
	/////////////////////////////////////////////////////////////////


	//////////////////////////////////////////////
	///////adiciona versao de distribuiçao///////
	IncDec.incElement('#inc_dec_versionFor', '#maisVersionFor', '#versionFor');
	IncDec.decElement('.versionFor', '#menosVersionFor', 3);
	IncDec.initialLoad('#inc_dec_versionFor', '#versionFor');
	/*$("#inc_dec_versionFor").on("click", "#maisVersionFor", function(event) {
		let clone_version_for = $("#versionFor").clone(true);
		clone_version_for.show();	
		$(event.target).parent().append(clone_version_for);
	});
	///////fim adiciona versao de distribuiçao///////

	///////remove versao de distribuiçao///////
	$(".versionFor").on("click", "#menosVersionFor", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove versao de distribuiçao///////

	///////load inicial da pagina: versao de distribuiçao///////
	let clone_version_for = $("#versionFor").clone(true);
	clone_version_for.show();	
	$("#inc_dec_versionFor").append(clone_version_for);*/
	///////fim load inicial da pagina: versao de distribuiçao///////
	/////////////////////////////////////////////////////////////////


	//////////////////////////////////////////////
	///////adiciona distribuiçao///////
	IncDec.incElement('#inc_dec_distribution', '#maisDistribution', '#distribution');
	IncDec.decElement('.distribution', '#menosDistribution', 3);
	IncDec.initialLoad('#inc_dec_distribution', '#distribution');
	/*$("#inc_dec_distribution").on("click", "#maisDistribution", function(event) {
		let clone_distribution = $("#distribution").clone(true);
		clone_distribution.show();	
		$(event.target).parent().append(clone_distribution);
	});
	///////fim adiciona distribuiçao///////

	///////remove versao de distribuiçao///////
	$(".distribution").on("click", "#menosDistribution", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove versao de distribuiçao///////

	///////load inicial da pagina: versao de distribuiçao///////
	let clone_distribution = $("#distribution").clone(true);
	clone_distribution.show();	
	$("#inc_dec_distribution").append(clone_distribution);*/
	///////fim load inicial da pagina: versao de distribuiçao///////
	/////////////////////////////////////////////////////////////////
	

	//////////////////////////////////////////////
	///////adiciona linkage///////
	IncDec.incElement('#inc_dec_link', '#maisLink', '#link');
	IncDec.decElement('.link', '#menosLink', 3);
	IncDec.initialLoad('#inc_dec_link', '#link');
	/*$("#inc_dec_link").on("click", "#maisLink", function(event) {
		let clone_link = $("#link").clone(true);
		clone_link.show();	
		$(event.target).parent().append(clone_link);
	});
	///////fim adiciona linkage///////

	///////remove linkage///////
	$(".link").on("click", "#menosLink", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove linkage///////

	///////load inicial da pagina: linkage///////
	let clone_link = $("#link").clone(true);
	clone_link.show();	
	$("#inc_dec_link").append(clone_link);*/
	///////fim load inicial da pagina: linkage///////
	/////////////////////////////////////////////////////////////////
});