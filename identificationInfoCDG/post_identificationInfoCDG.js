function post_identificationInfoCDG(Erro, background) {
    let spatialRepresentationType = [];
    $(".spatial_rep").each(function(i,e) {
        if(i != 0) {
            let spatialRep = $(e).find(".spatialRepresentationType").val();
            //console.log(spatialRep);
            if (spatialRep == "") {
                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Tipo de Representação Espacial") não está preenchido.');
                $(e).find(".spatialRepresentationType").css('background', background.erro);
            }
            else {
                $(e).find(".spatialRepresentationType").css('background', background.default);
            }
            spatialRepresentationType.push(spatialRep);
        }
    });
    let spatialResolution = [];
    $(".spatial_res").each(function(i,e) {
        if(i != 0) {
            let spatialRes = $(e).find(".spatialResolution").val();
            //console.log(spatialRes);
            spatialResolution.push(spatialRes);
        }
    });
    let languageCdg = [];
    $("#inc_dec_languageCdg").find(".langCdg").each(function(i, e) {
        let langCdg = $(e).find(".languageCdg").val();
        //console.log(langCdg);
        languageCdg.push(langCdg);
    });
    let characterSet = $("#characterSet").val();
    //console.log(characterSet);
    let topicCategory = [];
    $('.topic_cat').each(function(i,e) {
        if(i != 0) {
            let topic = $(e).find('.topicCategory').val();
            //console.log(topic);
            if (topic == "") {
                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Categoria Temática") não está preenchido.');
                $(e).find('.topicCategory').css('background', background.erro);
            }
            else {
                $(e).find('.topicCategory').css('background', background.default);
            }
            topicCategory.push(topic);
        }
    });
    let extent = [];
    $('.extent').each(function(i,e) {
        if(i != 0) {
            let ext = $(e);
            let geographicElement = [];
            ext.find('.geog_elem').each(function(ind, elem) {
                if(ind != 0) {
                    let geog_elem = $(elem);
                    let polygon = [];
                    geog_elem.find('.poli_bound').each(function(geog_elem_i, geog_elem_e) {
                        if(geog_elem_i != 0) {
                            let poli = $(geog_elem_e).find('.polygon').val();
                            //console.log(poli);
                            if (poli == "") {
                                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/' + ind + '. Extensão Geográfica/' + geog_elem_i + '. Polígono Delimitador") não está preenchido.');
                                $(geog_elem_e).find('.polygon').css('background', background.erro);
                            }
                            else {
                                $(geog_elem_e).find('.polygon').css('background', background.default);
                            }
                            polygon.push(poli);
                        }
                    });
                    let geographicBoundingBox = [];
                    geog_elem.find('.geog_bound_box').each(function(geog_elem_i, geog_elem_e) {
                        if(geog_elem_i != 0) {
                            let west = $(geog_elem_e).find('.westBoundLongitude').val();
                            //console.log(west);
                            if (west == "") {
                                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/' + ind + '. Extensão Geográfica/' + geog_elem_i + '. Retângulo envolvente/Longitude Limítrofe Oeste") não está preenchido.');
                                $(geog_elem_e).find('.westBoundLongitude').css('background', background.erro);
                            }
                            else {
                                $(geog_elem_e).find('.westBoundLongitude').css('background', background.default);
                            }
                            let east = $(geog_elem_e).find('.eastBoundLongitude').val();
                            //console.log(east);
                            if (east == "") {
                                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/' + ind + '. Extensão Geográfica/' + geog_elem_i + '. Retângulo envolvente/Longitude Limítrofe Leste") não está preenchido.');
                                $(geog_elem_e).find('.eastBoundLongitude').css('background', background.erro);
                            }
                            else {
                                $(geog_elem_e).find('.eastBoundLongitude').css('background', background.default);
                            }
                            let south = $(geog_elem_e).find('.southBoundLatitude').val();
                            //console.log(south);
                            if (south == "") {
                                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/' + ind + '. Extensão Geográfica/' + geog_elem_i + '. Retângulo envolvente/Longitude Limítrofe Sul") não está preenchido.');
                                $(geog_elem_e).find('.southBoundLatitude').css('background', background.erro);
                            }
                            else {
                                $(geog_elem_e).find('.southBoundLatitude').css('background', background.default);
                            }
                            let north = $(geog_elem_e).find('.northBoundLatitude').val();
                            //console.log(north);
                            if (north == "") {
                                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/' + ind + '. Extensão Geográfica/' + geog_elem_i + '. Retângulo envolvente/Longitude Limítrofe Norte") não está preenchido.');
                                $(geog_elem_e).find('.northBoundLatitude').css('background', background.erro);
                            }
                            else {
                                $(geog_elem_e).find('.northBoundLatitude').css('background', background.default);
                            }

                            let geog_bound_box = {westBoundLongitude:west, eastBoundLongitude:east, southBoundLatitude:south, northBoundLatitude:north};
                            geographicBoundingBox.push(geog_bound_box);
                        }
                    });
                    let geographicIdentifier = $(geog_elem).find('.geographicIdentifier').val();
                    //console.log(geographicIdentifier);
                    if (geographicIdentifier == "") {
                        Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/' + ind + 'Extensão Geográfica/Identificadore Geográfico") não está preenchido.');
                        $(geog_elem).find('.geographicIdentifier').css('background', background.erro);
                    }
                    else {
                        $(geog_elem).find('.geographicIdentifier').css('background', background.default);
                    }

                    let geographicElem = {polygon:polygon, geographicBoundingBox:geographicBoundingBox, geographicIdentifier:geographicIdentifier};
                    geographicElement.push(geographicElem);
                }
            });
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            let temporalElementInitial = ext.find('.temporalElementInitial').val();
            //console.log(temporalElementInitial);
            if (temporalElementInitial == "") {
                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/Extensão Temporal/Data Inicial") não está preenchido.');
                ext.find('.temporalElementInitial').css('background', background.erro);
            }
            else {
                ext.find('.temporalElementInitial').css('background', background.default);
            }
            let temporalElementLast = ext.find('.temporalElementLast').val();
            //console.log(temporalElementLast);
            if (temporalElementLast == "") {
                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/Extensão Temporal/Data Final") não está preenchido.');
                ext.find('.temporalElementLast').css('background', background.erro);
            }
            else {
                ext.find('.temporalElementLast').css('background', background.default);
            }
            let temporalElement = {temporalElementInitial:temporalElementInitial, temporalElementLast:temporalElementLast};
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            let minimumValue = ext.find('.minimumValue').val();
            //console.log(minimumValue);
            if (minimumValue == "") {
                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/Extensão Altimétrica-Batimétrica/Valor Mínimo") não está preenchido.');
                ext.find('.minimumValue').css('background', background.erro);
            }
            else {
                ext.find('.minimumValue').css('background', background.default);
            }
            let maximumValue = ext.find('.maximumValue').val();
            //console.log(maximumValue);
            if (maximumValue == "") {
                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/Extensão Altimétrica-Batimétrica/Valor Máximo") não está preenchido.');
                ext.find('.maximumValue').css('background', background.erro);
            }
            else {
                ext.find('.maximumValue').css('background', background.default);
            }
            let unitOfMeasure = ext.find('.unitOfMeasure').val();
            //console.log(unitOfMeasure);
            if (unitOfMeasure == "") {
                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/Extensão Altimétrica-Batimétrica/Unidade de Medida") não está preenchido.');
                ext.find('.unitOfMeasure').css('background', background.erro);
            }
            else {
                ext.find('.unitOfMeasure').css('background', background.default);
            }
            let verticalDatum = ext.find('.verticalDatum').val();
            //console.log(verticalDatum);
            if (verticalDatum == "") {
                Erro.alert.push('O campo ("Identificação do CDG/' + i + '. Extensão/Extensão Altimétrica-Batimétrica/Datum Altimétrico") não está preenchido.');
                ext.find('.verticalDatum').css('background', background.erro);
            }
            else {
                ext.find('.verticalDatum').css('background', background.default);
            }
            let VerticalExtent = {minimumValue:minimumValue, maximumValue:maximumValue, unitOfMeasure:unitOfMeasure, verticalDatum:verticalDatum};
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            let extentElem = {geographicElement:geographicElement, temporalElement:temporalElement, VerticalExtent:VerticalExtent};
            extent.push(extentElem);
        }
    });

    let identificationInfoCDG = {spatialRepresentationType:spatialRepresentationType, spatialResolution:spatialResolution,  languageCdg:languageCdg, characterSet:characterSet, topicCategory:topicCategory, extent:extent};
    return identificationInfoCDG;
}