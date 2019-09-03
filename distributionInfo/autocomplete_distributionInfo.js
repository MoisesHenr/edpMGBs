function autocompleteDistributionInfo(xml) {

	$(xml).find('gmd\\:distributionInfo').find('gmd\\:MD_Distribution').find('gmd\\:distributionFormat').each(function(i) {
		let distribution = $('#distribution').clone(true);
		if(i == 0) {
			$('#inc_dec_distribution').find('.distribution').remove();
		}

		$(this).find('gmd\\:name').each(function(ind) { //ajuste GeoNetwork
			let nameFor = $('#nameFor').clone(true);
			if(ind == 0) {
				distribution.find('#inc_dec_nameFor').find('.nameFor').remove();
			}

			nameFor.find('.nameFormat').val($(this).find('gco\\:CharacterString').text());
			//console.log($(this).find('gco\\:CharacterString').text());
			nameFor.show();
			distribution.find('#inc_dec_nameFor').append(nameFor);
		});

		$(this).find('gmd\\:version').each(function(ind) { //ajuste GeoNetwork
			let versionFor = $('#versionFor').clone(true);
			if(ind == 0) {
				distribution.find('#inc_dec_versionFor').find('.versionFor').remove();
			}

			versionFor.find('.versionFormat').val($(this).find('gco\\:CharacterString').text());
			//console.log($(this).find('gco\\:CharacterString').text());
			versionFor.show();
			distribution.find('#inc_dec_versionFor').append(versionFor);
		});

		distribution.show();
		$('#inc_dec_distribution').append(distribution);
	});

	$(xml).find('gmd\\:distributionInfo').find('gmd\\:MD_Distribution').find('gmd\\:transferOptions').find('gmd\\:CI_OnlineResource').each(function(i) {
		let link = $('#link').clone(true);
		if (i == 0) {
			$('#inc_dec_link').find('.link').remove();
		}

		link.find('.linkage').val($(this).find('gmd\\:URL').text());
		//console.log($(this).find('gmd\\:URL').text());
		link.find('.protocol').val($(this).find('gmd\\:protocol').find('gco\\:CharacterString').text());
		//console.log($(this).find('gmd\\:protocol').find('gco\\:CharacterString').text());
		link.show();
		$('#inc_dec_link').append(link);
	});
}