function post_metadata(Erro, background) {
    let language = [];
    $("#inc_dec_language").find(".lang").each(function(i, e) {
        let lang = $(e).find(".language").val();
        //console.log(lang);
        if (lang == "") {
            Erro.alert.push('O campo ("Metametadados/' + (i+1) + '. Idioma") não está preenchido.');
            $(e).find(".language").css('background', background.erro);
        }
        else {
            $(e).find(".language").css('background', background.default);
        }
        language.push(lang);
    });
    let characterSetCode = [];  //pq nao esta pegando??
    $("#inc_dec_character").find(".character").each(function(i, e) {
        let character = $(e).find(".characterSetCode").val();
        //console.log(character);
        if (character == "") {
            Erro.alert.push('O campo ("Metametadados/' + (i+1) + '. Norma de cod. de caracteres") não está preenchido.');
            $(e).find(".characterSetCode").css('background', background.erro);
        }
        else {
            $(e).find(".characterSetCode").css('background', background.default);
        }
        characterSetCode.push(character);
    });

    let cont = [];
    $(".contact").each(function(i,e) {
        if(i != 0) {
            let section = $(e);
            let individualName = section.find("#individualName").val();
            //console.log(individualName);
            let metadataOrganisationName = [];
            section.find(".metadataOrgName").each(function(ind, elem) {
                if (ind != 0) {
                    let metadataOrgName = $(elem).find(".metadataOrganisationName").val();
                    //console.log(metadataOrgName);
                    if (metadataOrgName == "") {
                        Erro.erro.push('O campo ("Metametadados/' + i + '. Responsável pelos Metadados/' + ind + '. Nome da Organização") não pode ficar vazio.');
                        $(elem).find(".metadataOrganisationName").css('background', background.erro);
                    }
                    else {
                        $(elem).find(".metadataOrganisationName").css('background', background.default);
                    }
                    metadataOrganisationName.push(metadataOrgName);
                }
            });
            let role = [];
            section.find(".rol").each(function(ind, elem) {
                if (ind != 0) {
                    let rol = $(elem).find(".role").val();
                    //console.log(rol);
                    if (rol == "") {
                        Erro.alert.push('O campo ("Metametadados/' + i + '. Responsável pelos Metadados/' + ind + '. Função") não está preenchido.');
                        $(elem).find(".role").css('background', background.erro);
                    }
                    else {
                        $(elem).find(".role").css('background', background.default);
                    }
                    role.push(rol);
                }
            });
            let voice = section.find("#voice").val();
            //console.log(voice);
            let facsimile = section.find("#facsimile").val();
            //console.log(facsimile);
            let address = section.find("#address").val();
            //console.log(address);
            let city = section.find("#city").val();
            //console.log(city);
            let administrativeArea = section.find("#administrativeArea").val();
            //console.log(administrativeArea);
            let postalCode = section.find("#postalCode").val();
            //console.log(postalCode);
            let country = section.find("#country").val();
            //console.log(country);
            let electronicMailAddress = section.find("#electronicMailAddress").val();
            //console.log(electronicMailAddress);
            let contactInfo = {voice:voice, facsimile:facsimile, address:address, city:city, administrativeArea:administrativeArea, postalCode:postalCode, country:country, electronicMailAddress:electronicMailAddress};

            let contact = {individualName:individualName, metadataOrganisationName:metadataOrganisationName, role:role, contactInfo:contactInfo};
            cont.push(contact);
        }
    });

    let metadataStandardName = $('#metadataStandardName').val();
    //console.log(metadataStandardName);
    let metadataStandardVersion = $('#metadataStandardVersion').val();
    //console.log(metadataStandardVersion);
    if (metadataStandardVersion == "") {
        Erro.erro.push('O campo ("Metametadados/Versão da norma de metadados") não pode ficar vazio.');
        $('#metadataStandardVersion').css('background', background.erro);
    }
    else {
        $('#metadataStandardVersion').css('background', background.default);
    }
    let dateStamp = $('#dateStamp').val();
    //console.log(dateStamp);
    let fileIdentifier = $('#fileIdentifier').val();
    //console.log(fileIdentifier);
    if (fileIdentifier == "") {
        fileIdentifier = uuid();
    } 
    //console.log(fileIdentifier);

    let metadata = {language:language, characterSetCode:characterSetCode, contact:cont, metadataStandardName:metadataStandardName, metadataStandardVersion:metadataStandardVersion, dateStamp:dateStamp, fileIdentifier:fileIdentifier};
    return metadata;
}