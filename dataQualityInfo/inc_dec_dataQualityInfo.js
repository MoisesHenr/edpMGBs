$(document).ready(function(){
	/////////////////////////////////////
	///////adiciona fonte de dados///////
	IncDec.incElement('#inc_dec_source', '#maisSource', '#source');
	IncDec.decElement('.source', '#menosSource', 3);
	IncDec.initialLoad('#inc_dec_source', '#source');
	/*$("#inc_dec_source").on("click", "#maisSource", function(event) {
		let clone_source = $("#source").clone(true);
		clone_source.show();	
		$(event.target).parent().append(clone_source);
	});
	///////fim adiciona fonte de dados///////

	///////remove fonte de dados///////
	$(".source").on("click", "#menosSource", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove fonte de dados///////

	///////load inicial fonte de dados///////
	let clone_source = $("#source").clone(true);
	clone_source.show();	
	$("#inc_dec_source").append(clone_source);*/
	///////fim load inicial fonte de dados///////
	/////////////////////////////////////////////


	/////////////////////////////////////////
	///////adiciona etapas do processo///////
	IncDec.incElement('#inc_dec_proc_step', '#maisProcStep', '#proc_step');
	IncDec.decElement('.proc_step', '#menosProcStep', 3);
	IncDec.initialLoad('#inc_dec_proc_step', '#proc_step');
	/*$("#inc_dec_proc_step").on("click", "#maisProcStep", function(event) {
		let clone_proc_step = $("#proc_step").clone(true);
		clone_proc_step.show();	
		$(event.target).parent().append(clone_proc_step);
	});
	///////fim adiciona etapas do processo///////

	///////remove etapas do processo///////
	$(".proc_step").on("click", "#menosProcStep", function(event) {
		$(event.target).parent().parent().parent().remove();
	});
	///////fim remove etapas do processo///////

	///////load inicial etapas do processo///////
	let clone_proc_step = $("#proc_step").clone(true);
	clone_proc_step.show();	
	$("#inc_dec_proc_step").append(clone_proc_step);*/
	///////fim load inicial etapas do processo///////
	/////////////////////////////////////////////////
});