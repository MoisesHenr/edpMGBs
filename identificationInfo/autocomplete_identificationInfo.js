function autocompleteCitation(xml) {
    let i_citation = 1;
    $(xml).find('gmd\\:citation').each(function(i) {
        let citation = $("#citation").clone(true);
        if(i == 0) {
            $("#inc_dec_citation").find(".citation").remove();
            $("#menu_citation").children().remove();
            //console.log($("#menu_citation").children());
        }
        ///////title///////
        let vTitle = $(this).find('gmd\\:title').find('gco\\:CharacterString').text();
        citation.find('#title').val(vTitle);
        ///////end title///////
        ///////dateType///////
        $(this).find('gmd\\:date').find('gmd\\:CI_Date').each(function(ind) {
            if(ind == 0) {
                citation.find('#dateType').remove();
            }
            let dateType = $('#dateType').clone(true);
            ///////date///////
            let vDate = $(this).find('gmd\\:date').text().trim(); //.trim: elimina espaços em branco
            //Ajustes //ANA //CPRM //IBAMA //MINISTERIO //UNB
            vDateAux = vDate.split('T');
            vDate = vDateAux[0];
            vDate = vDate.replace('/', '-'); //IBAMA
            vDate = vDate.replace('/', '-'); //IBAMA
            //Ajustes //ANA //CPRM //IBAMA //MINISTERIO //UNB
            //console.log(vDate); 
            dateType.find('#date').val(vDate);
            ///////end date///////
            ///////type///////
            let vType = $(this).find('gmd\\:CI_DateTypeCode').attr('codeListValue');
            dateType.find('#type').val(vType.toLowerCase()); //letras minusculas
            ///////end type///////
            dateType.show();
            citation.find('#inc_dec_date').append(dateType);
        });
        ///////end dateType///////
        citation = citation.show();
        $("#inc_dec_citation").append(citation);

        let new_id_citation = "citation" + i_citation;
        citation.attr("id", new_id_citation);
        $("#menu_citation").append("<li class = " + new_id_citation + "><a href=#" + new_id_citation + " class='link'> Citação</a></li>");
        //$("#menu_citation").append("<div class = " + new_id_citation + "><a href=#" + new_id_citation + " class='link'>" + i_citation + ". Citação</a></div>");
		i_citation+=1;
    });
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function autocompletePointOfContactInfo(pointOfContactInfo, pointOfContact) {
    let voicePoint = pointOfContactInfo.find('gmd\\:voice').find('gco\\:CharacterString').text();
    //console.log(voicePoint);
    pointOfContact.find('#voicePoint').val(voicePoint);

    let facsimilePoint = pointOfContactInfo.find('gmd\\:facsimile').find('gco\\:CharacterString').text();
    //console.log(facsimilePoint);
    pointOfContact.find('#facsimilePoint').val(facsimilePoint);

    let addressPoint = pointOfContactInfo.find('gmd\\:CI_Address').find('gmd\\:address').find('gco\\:CharacterString').text();
    if (addressPoint == "") { //ajuste ANA
        addressPoint = pointOfContactInfo.find('gmd\\:CI_Address').find('gmd\\:deliveryPoint').find('gco\\:CharacterString').text();
    }
    //console.log(addressPoint);
    pointOfContact.find('#addressPoint').val(addressPoint);

    let cityPoint = pointOfContactInfo.find('gmd\\:city').find('gco\\:CharacterString').text();
    pointOfContact.find('#cityPoint').val(cityPoint);

    let administrativeAreaPoint = pointOfContactInfo.find('gmd\\:administrativeArea').find('gmd\\:UF_TypeCode').attr('codeListValue');
    if (administrativeAreaPoint == undefined) { //ajuste ANA
        administrativeAreaPoint = pointOfContactInfo.find('gmd\\:administrativeArea').find('gco\\:CharacterString').text();
    }
    //console.log(administrativeAreaPoint);
    pointOfContact.find('#administrativeAreaPoint').val(administrativeAreaPoint);

    let postalCodePoint = pointOfContactInfo.find('gmd\\:postalCode').find('gco\\:CharacterString').text();
    //console.log(postalCodePoint);
    pointOfContact.find('#postalCodePoint').val(postalCodePoint);

    let countryPoint = pointOfContactInfo.find('gmd\\:country').find('gco\\:CharacterString').text();
    //console.log(countryPoint);
    pointOfContact.find('#countryPoint').val(countryPoint);

    let electronicMailAddressPoint = pointOfContactInfo.find('gmd\\:electronicMailAddress').find('gco\\:CharacterString').text();
    //console.log(electronicMailAddressPoint);
    pointOfContact.find('#electronicMailAddressPoint').val(electronicMailAddressPoint);
}

function autocompletePointOfContact(xml) {
    i_pointOfContact = 1;
    $(xml).find('gmd\\:pointOfContact').find('gmd\\:CI_ResponsibleParty').each(function(i) {
        if(i == 0) {
            $('#inc_dec_pointOfContact').find('.pointOfContact').remove();
            $("#menu_pointOfContact").children().remove();
        }
        let pointOfContact = $('#pointOfContact').clone(true);
        
        let individualNamePoint = $(this).find('gmd\\:individualName').find('gco\\:CharacterString').text();
        pointOfContact.find('#individualNamePoint').val(individualNamePoint);

        $(this).find('gmd\\:organisationName').find('gco\\:CharacterString').each(function(ind) {
            if(ind == 0) {
                pointOfContact.find('#inc_dec_metadataOrgNamePoint').find('.metadataOrgNamePoint').remove();
            }
            let organisationNamePoint = $('#metadataOrgNamePoint').clone(true);
            organisationNamePoint.find('.metadataOrganisationNamePoint').val($(this).text());
            //console.log($(this).text());
            organisationNamePoint.show();

            pointOfContact.find('#inc_dec_metadataOrgNamePoint').append(organisationNamePoint);
        });

        $(this).find('gmd\\:role').find('gmd\\:CI_RoleCode').each(function(ind) {
            if(ind == 0) {
                pointOfContact.find('#inc_dec_rolPoint').find('.rolPoint').remove();
            }
            let rolePoint = $('#rolPoint').clone(true);
            rolePoint.find('.rolePoint').val($(this).attr('codeListValue'));
            rolePoint.show();

            pointOfContact.find('#inc_dec_rolPoint').append(rolePoint);
        });

        let pointOfContactInfo = $(this).find('gmd\\:contactInfo').find('gmd\\:CI_Contact');

        autocompletePointOfContactInfo(pointOfContactInfo, pointOfContact);

        pointOfContact.show();
        $('#inc_dec_pointOfContact').append(pointOfContact);

        let new_id_pointOfContact = "pointOfContact" + i_pointOfContact;
        pointOfContact.attr("id", new_id_pointOfContact);
        $("#menu_pointOfContact").append("<li class = " + new_id_pointOfContact + "><a href=#" + new_id_pointOfContact + " class='link'> Responsável pelo Recurso</a></li>");
        i_pointOfContact+=1;
    });
}


function autocompleteIdentificationInfo(xml) {
	autocompleteCitation(xml);

	let abstract = $(xml).find('gmd\\:abstract').find('gco\\:CharacterString').text();
	$("#abstract").val(abstract);

	let status = $(xml).find('gmd\\:status').find('gmd\\:MD_ProgressCode').attr('codeListValue');
	$('#status').val(status);

    autocompletePointOfContact(xml);

    $(xml).find('gmd\\:descriptiveKeywords').find('gmd\\:MD_Keywords').each(function(i) {
        if (i == 0) {
            $('#inc_dec_descriptiveKeywords').find('.descKeywords').remove();
        }
        let clone_descriptiveKeywords = $("#descKeywords").clone(true);

        $(this).find('gmd\\:keyword').find('gco\\:CharacterString').each(function(ind) {
            if(ind == 0) {
                clone_descriptiveKeywords.find('#inc_dec_keyw').find('.keyw').remove();
            }
            let keyw = $('#keyw').clone(true);
            keyw.find('.keyword').val($(this).text());
            keyw.show();
            clone_descriptiveKeywords.find('#inc_dec_keyw').append(keyw);
        });

        let typeKeyword = $(this).find('gmd\\:type').find('gmd\\:MD_KeywordTypeCode').attr('codeListValue');
        clone_descriptiveKeywords.find('#typeKeyword').val(typeKeyword);

        clone_descriptiveKeywords.show();
        $("#inc_dec_descriptiveKeywords").append(clone_descriptiveKeywords);
    });

    $(xml).find('gmd\\:graphicOverview').find('gmd\\:MD_BrowseGraphic').each(function(i) {
        if (i == 0) {
            $('#inc_dec_graphicOverview').find('.graphicOverview').remove();
        }
        let clone_graphicOverview = $('#graphicOverview').clone(true);

        let fileName = $(this).find('gmd\\:fileName').find('gco\\:CharacterString').text();
        //console.log(fileName);
        clone_graphicOverview.find('#fileName').val(fileName);

        let fileDescription = $(this).find('gmd\\:fileDescription').find('gco\\:CharacterString').text();
        //console.log(fileDescription);
        clone_graphicOverview.find('#fileDescription').val(fileDescription);

        let fileType = $(this).find('gmd\\:fileType').find('gco\\:CharacterString').text();
        //console.log(fileType);
        clone_graphicOverview.find('#fileType').val(fileType);

        clone_graphicOverview.show();
        $('#inc_dec_graphicOverview').append(clone_graphicOverview);
    })
}