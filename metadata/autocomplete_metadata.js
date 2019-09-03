function autocompleteContactInfo(contact, pointOfContact) {
	let voice = contact.find('gmd\\:voice').find('gco\\:CharacterString').text();
    pointOfContact.find('#voice').val(voice);

    let facsimile = contact.find('gmd\\:facsimile').find('gco\\:CharacterString').text();
    pointOfContact.find('#facsimile').val(facsimile);

    let address = contact.find('gmd\\:CI_Address').find('gmd\\:address').find('gco\\:CharacterString').text();
    if (address == "") { //ajuste ANA
        address = contact.find('gmd\\:CI_Address').find('gmd\\:deliveryPoint').find('gco\\:CharacterString').text();
    }
    //console.log(address);
    pointOfContact.find('#address').val(address);

    let city = contact.find('gmd\\:city').find('gco\\:CharacterString').text();
    pointOfContact.find('#city').val(city);

    let administrativeArea = contact.find('gmd\\:administrativeArea').find('gmd\\:UF_TypeCode').attr('codeListValue');
    if (administrativeArea == undefined) { //ajuste ANA
        administrativeArea = contact.find('gmd\\:administrativeArea').find('gco\\:CharacterString').text();
    }
    //console.log(administrativeArea);
    pointOfContact.find('#administrativeArea').val(administrativeArea);

    let postalCode = contact.find('gmd\\:postalCode').find('gco\\:CharacterString').text();
    pointOfContact.find('#postalCode').val(postalCode);

    let country = contact.find('gmd\\:country').find('gco\\:CharacterString').text();
    pointOfContact.find('#country').val(country);

    let electronicMailAddress = contact.find('gmd\\:electronicMailAddress').find('gco\\:CharacterString').text();
    pointOfContact.find('#electronicMailAddress').val(electronicMailAddress);
}

function autocompleteContact(xml) {
	i_cont = 1;
	$(xml).find('gmd\\:contact').find('gmd\\:CI_ResponsibleParty').each(function(i) {
        if(i == 0) {
        	$('#inc_dec_contact').find('.contact').remove();
        	$("#menu_contact").children().remove();
        }
        let contact = $('#contact').clone(true);
        
        let individualName = $(this).find('gmd\\:individualName').find('gco\\:CharacterString').text();
        contact.find('#individualName').val(individualName);

        $(this).find('gmd\\:organisationName').find('gco\\:CharacterString').each(function(ind) {
        	if(ind == 0) {
        		contact.find('#inc_dec_metadataOrgName').find('.metadataOrgName').remove();
        	}
        	let organisationName = $('#metadataOrgName').clone(true);
        	organisationName.find('.metadataOrganisationName').val($(this).text());
            organisationName.show();

        	contact.find('#inc_dec_metadataOrgName').append(organisationName);
        });

        $(this).find('gmd\\:role').find('gmd\\:CI_RoleCode').each(function(ind) {
        	if(ind == 0) {
        		contact.find('#inc_dec_rol').find('.rol').remove();
        	}
        	let role = $('#rol').clone(true);
        	role.find('.role').val($(this).attr('codeListValue'));
            role.show();

        	contact.find('#inc_dec_rol').append(role);
        });

        let contactInfo = $(this).find('gmd\\:contactInfo').find('gmd\\:CI_Contact');

        autocompleteContactInfo(contactInfo, contact);

        contact.show();
        $('#inc_dec_contact').append(contact);

        let new_id_cont = "contact" + i_cont;
        contact.attr("id", new_id_cont);
        $("#menu_contact").append("<li class = " + new_id_cont + "><a href=#" + new_id_cont + " class='link'> Responsável pelo Metadado</a></li>");
		i_cont+=1;
    });
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function autocompleteMetadata(xml) {

    $(xml).find('gmd\\:language').each(function(i) {
        let lang = $('#lang').clone(true);
        if (i == 0) {
            $('#inc_dec_language').find('.lang').remove();
        }

        let language = $(this).find('gco\\:CharacterString').text();
        if (language == "") { //ajuste CPRM
            language = $(this).find('gmd\\:LanguageCode').attr('codeListValue');
        }
        //console.log(language);
        lang.find('.language').val(language);
        lang.show();
        $('#inc_dec_language').append(lang);
    });

    $(xml).find('gmd\\:MD_CharacterSetCode').each(function(i) {
        let character = $('#character').clone(true);
        if (i == 0) {
            $('#inc_dec_character').find('.character').remove();
        }
        charCode = $(this).attr('codeListValue');
        //console.log(charCode);
        character.find('.characterSetCode').val(charCode);
        character.show();
        $('#inc_dec_character').append(character);
    });

	autocompleteContact(xml);

    let metadataStandardName = $(xml).find('gmd\\:metadataStandardName').find('gco\\:CharacterString').text();
    $('#metadataStandardName').val(metadataStandardName);

    let metadataStandardVersion = $(xml).find('gmd\\:metadataStandardVersion').find('gco\\:CharacterString').text();
    $('#metadataStandardVersion').val(metadataStandardVersion);

    let fileIdentifier = $(xml).find('gmd\\:fileIdentifier').find('gco\\:CharacterString').text();
    //console.log(fileIdentifier);
    if (fileIdentifier != "") {
        $('#fileIdentifier').val(fileIdentifier);
        $('#hideDiv').hide();
        $('#fileIdentifier').show();
    }
    
}