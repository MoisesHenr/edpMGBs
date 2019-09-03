function autocompleteDataQualityInfo(xml) {
	let dataQualityInfo = $(xml).find('gmd\\:dataQualityInfo');
	///////lineage///////
	let lineage = dataQualityInfo.find('gmd\\:lineage');
	///////statement///////
	let statement = lineage.find('gmd\\:statement').find('gco\\:CharacterString').text();
	$('#statement').val(statement);
	///////fim statement///////
	///////source///////
	lineage.find('gmd\\:source').each(function(i) {
		let source = $('#source').clone(true);
		if(i == 0) {
			$('#inc_dec_source').find('.source').remove();
		}

		let sourceExtent = $(this).find('gmd\\:sourceExtent').find('gco\\:CharacterString').text();
		source.find('.sourceExtent').val(sourceExtent);

		let description = $(this).find('gmd\\:description').find('gco\\:CharacterString').text();
		source.find('.descriptionSource').val(description);

		let scaleDenominator = $(this).find('gmd\\:scaleDenominator').find('gco\\:CharacterString').text();
		source.find('.scaleDenominator').val(scaleDenominator);

		source.show();
		$('#inc_dec_source').append(source);
	});
	///////fim source///////
	///////Process Step///////
	lineage.find('gmd\\:processStep').each(function(i) {
		let processStep = $('#proc_step').clone(true);
		if(i == 0) {
			$('#inc_dec_proc_step').find('.proc_step').remove();
		}

		let processStepVal = $(this).find('gco\\:CharacterString').text();
		processStep.find('.descriptionStep').val(processStepVal);

		processStep.show();
		$('#inc_dec_proc_step').append(processStep);
	});
	///////fim Process Step///////
	///////fim lineage///////
}