function post_identificationInfo(Erro, background) {
	let cit = [];
    $(".citation").each(function(i,e) { 
        if(i != 0) {
            let section = $(e);
            let vTitle = section.find("#title").val();
            //console.log(vTitle);
            if (vTitle == "") {
                Erro.erro.push('O campo ("Identificação/' + i + '. Citação/Título") não pode ficar vazio.');
                section.find("#title").css('background', background.erro);
            }
            else {
                section.find("#title").css('background', background.default);
            }
            let vDateType = [];
            section.find('#inc_dec_date').find(".dateType").each(function(ind, elem){
                	let dt = $(elem);
	                let vDate = dt.find("#date").val();
	                //console.log(vDate);
	                let vType = dt.find("#type").val();
	                //console.log(vType);

	                let vdt = {date:vDate, type:vType};
	                vDateType.push(vdt);

                    if (vDate == "") {
                        Erro.erro.push('O campo ("Identificação/' + i + '. Citação/' + (ind+1) + '. Data") não representa uma data válida.');
                        dt.find("#date").css('background', background.erro);
                    }
                    else {
                        dt.find("#date").css('background', background.default);
                    }
            });

            let citation = {title:vTitle, dateType:vDateType};
            cit.push(citation);
        }
    });
    let abstract = $("#abstract").val();
    //console.log(abstract);
    if (abstract == "") {
        Erro.erro.push('O campo (Identificação/Resumo) não pode ficar vazio.');
        $("#abstract").css('background', background.erro);
    }
    else {
        $("#abstract").css('background', background.default);
    }
    let status = $("#status").val();
    //console.log(status);
    let pointOfContact = [];
    $(".pointOfContact").each(function(i,e) {
        if(i != 0) {
            let cont = $(e);
            let individualNamePoint = cont.find("#individualNamePoint").val();
            //console.log(individualNamePoint);
            let metadataOrganisationNamePoint = [];
            cont.find(".metadataOrgNamePoint").each(function(ind, elem) {
                if (ind != 0) {
                    let metadataOrgNamePoint = $(elem).find(".metadataOrganisationNamePoint").val();
                    //console.log(metadataOrgNamePoint);
                    if (metadataOrgNamePoint == "") {
                        Erro.erro.push('O campo ("Identificação/' + i + '. Responsável pelos Recursos/' + ind + '. Nome da Organização") não pode ficar vazio.');
                        $(elem).find(".metadataOrganisationNamePoint").css('background', background.erro);
                    }
                    else {
                        $(elem).find(".metadataOrganisationNamePoint").css('background', background.default);
                    }
                    metadataOrganisationNamePoint.push(metadataOrgNamePoint);
                }
            });
            let rolePoint = [];
            cont.find(".rolPoint").each(function(ind, elem) {
                if (ind != 0) {
                    let rolPoint = $(elem).find(".rolePoint").val();
                    //console.log(rolPoint);
                    if (rolPoint == "") {
                        Erro.alert.push('O campo ("Identificação/' + i + '. Responsável pelos Recursos/' + ind + '. Função") não está preenchido.');
                        $(elem).find(".rolePoint").css('background', background.erro);
                    }
                    else {
                        $(elem).find(".rolePoint").css('background', background.default);
                    }
                    rolePoint.push(rolPoint);
                }
            });
            let voicePoint = cont.find("#voicePoint").val();
            //console.log(voicePoint);
            let facsimilePoint = cont.find("#facsimilePoint").val();
            //console.log(facsimilePoint);
            let addressPoint = cont.find("#addressPoint").val();
            //console.log(addressPoint);
            let cityPoint = cont.find("#cityPoint").val();
            //console.log(cityPoint);
            let administrativeAreaPoint = cont.find("#administrativeAreaPoint").val();
            //console.log(administrativeAreaPoint);
            let postalCodePoint = cont.find("#postalCodePoint").val();
            //console.log(postalCodePoint);
            let countryPoint = cont.find("#countryPoint").val();
            //console.log(countryPoint);
            let electronicMailAddressPoint = cont.find("#electronicMailAddressPoint").val();
            //console.log(electronicMailAddressPoint);
            let pointOfContactInfo = {voicePoint:voicePoint, facsimilePoint:facsimilePoint, addressPoint:addressPoint, cityPoint:cityPoint, administrativeAreaPoint:administrativeAreaPoint, postalCodePoint:postalCodePoint, countryPoint:countryPoint, electronicMailAddressPoint:electronicMailAddressPoint};

            let contact = {individualNamePoint:individualNamePoint, metadataOrganisationNamePoint:metadataOrganisationNamePoint, rolePoint:rolePoint, pointOfContactInfo:pointOfContactInfo};
            //console.log(contact);
            pointOfContact.push(contact);
        }
    });
    let descriptiveKeywords = [];
    $(".descKeywords").each(function(i,e) {
        if(i != 0) {
            let desc = $(e);
            let keyword = [];
            desc.find(".keyw").each(function(ind,elem) {
                if (ind != 0) {
                    let key = $(elem).find(".keyword").val();
                    //console.log(key);
                    keyword.push(key);
                }
            });
            let typeKeyword = desc.find(".typeKeyword").val();
            //console.log(typeKeyword);
            let descKey = {keyword:keyword, typeKeyword:typeKeyword};

            descriptiveKeywords.push(descKey);
        }
    });
    let graphicOverview = [];
    $(".graphicOverview").each(function(i,e) {
        if (i != 0) {
            let fileName = $(e).find("#fileName").val();
            //console.log(fileName);
            let fileDescription = $(e).find("#fileDescription").val();
            //console.log(fileDescription);
            let fileType = $(e).find("#fileType").val();
            //console.log(fileType);

            graphicOverview.push({fileName:fileName, fileDescription:fileDescription, fileType:fileType});
        }
    })

    let identificationInfo = {citation:cit, abstract:abstract, status:status, pointOfContact:pointOfContact, descriptiveKeywords:descriptiveKeywords, graphicOverview:graphicOverview};
    return identificationInfo;
}