function autocompleteExtent(xml) {
    let i_extent = 1;
    $(xml).find('gmd\\:EX_Extent').each(function(i) {
        if(i == 0) {
            $('#inc_dec_extent').find('.extent').remove();
            $("#menu_extent").children().remove();
        }
        let extent = $('#extent').clone(true);

        ///////geographicElement///////
        $(this).find('gmd\\:geographicElement').each(function(ind) {
            if(ind == 0) {
                extent.find('#inc_dec_geog_elem').find('.geog_elem').remove();
            }
            let geographicElement = $('#geog_elem').clone(true);

            ///////polygon///////
            $(this).find('gmd\\:EX_BoundingPolygon').each(function(ind_pol) {
                if(ind_pol == 0) {
                    geographicElement.find('#inc_dec_poli').find('.poli_bound').remove();
                }
                let polygon = $('#poli_bound').clone(true);

                let valPolygon = $(this).find('gco\\:CharacterString').text();
                polygon.find('.polygon').val(valPolygon);

                polygon.show();
                geographicElement.find('#inc_dec_poli').append(polygon);
            });
            ///////polygon///////
            ///////GeographicBoundingBox///////
            $(this).find('gmd\\:EX_GeographicBoundingBox').each(function(ind_geo) {
                if(ind_geo == 0) {
                    geographicElement.find('#inc_dec_geog_bound_box').find('.geog_bound_box').remove();
                }
                let geogBoundBox = $('#geog_bound_box').clone(true);

                let valWest = $(this).find('gmd\\:westBoundLongitude').find('gco\\:Decimal').text();
                geogBoundBox.find('.westBoundLongitude').val(valWest);
                let valEast = $(this).find('gmd\\:eastBoundLongitude').find('gco\\:Decimal').text();
                geogBoundBox.find('.eastBoundLongitude').val(valEast);
                let valSouth = $(this).find('gmd\\:southBoundLatitude').find('gco\\:Decimal').text();
                geogBoundBox.find('.southBoundLatitude').val(valSouth);
                let valNorth = $(this).find('gmd\\:northBoundLatitude').find('gco\\:Decimal').text();
                geogBoundBox.find('.northBoundLatitude').val(valNorth);

                geogBoundBox.show();
                geographicElement.find('#inc_dec_geog_bound_box').append(geogBoundBox);
            });
            ///////GeographicBoundingBox///////
            ///////GeographicDescription///////
            let valGeogDesc = $(this).find('gmd\\:EX_GeographicDescription').find('gco\\:CharacterString').text();
            geographicElement.find('#geographicIdentifier').val(valGeogDesc);
            ///////GeographicDescription///////

            geographicElement.show();
            extent.find('#inc_dec_geog_elem').append(geographicElement);
        });
        ///////geographicElement///////
        ///////temporalElement///////
        let valTemp = []; //AJUSTES ANA, CPRM, UNB
        valTemp.push($(this).find('gmd\\:EX_TemporalExtent').find('gml\\:beginPosition').text());
        valTemp.push($(this).find('gmd\\:EX_TemporalExtent').find('gml\\:endPosition').text());
        //console.log(valTemp);
        if (valTemp[0] == "" && valTemp[1] == "") { //edpMGBs
            valTemp = $(this).find('gmd\\:temporalElement').find('gco\\:CharacterString').text().split(" ");
            //console.log(valTemp);
        }
        extent.find('#temporalElementInitial').val(valTemp[0]);
        //console.log(valTemp[0]);
        extent.find('#temporalElementLast').val(valTemp[1]);
        //console.log(valTemp[1]);
        ///////temporalElement///////
        ///////VerticalExtent///////
        let VerticalExtent = $(this).find('gmd\\:EX_VerticalExtent');
        let valMin = VerticalExtent.find('gmd\\:minimumValue').find('gco\\:Real').text();
        extent.find('#minimumValue').val(valMin);
        let valMax = VerticalExtent.find('gmd\\:maximumValue').find('gco\\:Real').text();
        extent.find('#maximumValue').val(valMax);
        let valUnit = VerticalExtent.find('gmd\\:unitOfMeasure').find('gco\\:CharacterString').text();
        extent.find('#unitOfMeasure').val(valUnit);
        let valDatum = VerticalExtent.find('gmd\\:verticalDatum').find('gco\\:CharacterString').text();
        extent.find('#verticalDatum').val(valDatum);
        ///////VerticalExtent///////

        let new_id = 'extent' + i_extent;
        extent.attr('id', new_id);
        $('#menu_extent').append("<li class = " + new_id + "><a href=#" + new_id + " class='link'> Extensão</a></li>");
        //$('#menu_extent').append("<li class = " + new_id + "><a href=#" + new_id + " class='link'>" + i_extent + ". Extensão</a></li>");
        i_extent+=1;

        extent.show();
        $('#inc_dec_extent').append(extent);
    });
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function autocompleteIdentificationInfoCDG(xml) {
    $(xml).find('gmd\\:spatialRepresentationType').each(function(i) {
        let spatialRepresentationType = $('#spatial_rep').clone(true);
        if(i == 0) {
            $('#inc_dec_spatial_rep').find('.spatial_rep').remove();
        }
        let valSpatialRep = $(this).find('gmd\\:MD_SpatialRepresentationTypeCode').attr('codeListValue');
        //console.log(valSpatial);
        spatialRepresentationType.find('.spatialRepresentationType').val(valSpatialRep);
        spatialRepresentationType.show();
        $('#inc_dec_spatial_rep').append(spatialRepresentationType);
    });

    $(xml).find('gmd\\:MD_Resolution').each(function(i) {
        let spatialResolution = $('#spatial_res').clone(true);
        if(i == 0) {
            $('#inc_dec_spatial_res').find('.spatial_res').remove();
        }
        let valSpatialRes = $(this).find('gco\\:Integer').text();
        //console.log(valSpatialRes);
        spatialResolution.find('.spatialResolution').val(valSpatialRes);
        spatialResolution.show();
        $('#inc_dec_spatial_res').append(spatialResolution);
    });


    $(xml).find('gmd\\:identificationInfo').find('gmd\\:language').each(function(i) {
        let langCdg = $('#langCdg').clone(true);
        if (i == 0) {
            $('#inc_dec_languageCdg').find('.langCdg').remove();
        }

        let languageCdg = $(this).find('gco\\:CharacterString').text();
        if (languageCdg == "") { //ajuste CPRM
            languageCdg = $(this).find('gmd\\:LanguageCode').attr('codeListValue');
        }
        //console.log(languageCdg);
        langCdg.find('.languageCdg').val(languageCdg);
        langCdg.show();
        $('#inc_dec_languageCdg').append(langCdg);
    });


    let characterSet = $(xml).find('gmd\\:identificationInfo').find('gmd\\:characterSet').find('gmd\\:MD_CharacterSetCode').attr('codeListValue');
    if (characterSet == undefined) {//AJUSTES UNB
        characterSet = $(xml).find('gmd\\:characterSet').find('gmd\\:MD_CharacterSetCode').attr('codeListValue');
    }
    //console.log(characterSet);
    $('#characterSet').val(characterSet);

    $(xml).find('gmd\\:topicCategory').each(function(i) {
        let topicCategory = $('#topic_cat').clone(true);
        if(i == 0) {
            $('#inc_dec_topic_cat').find('.topic_cat').remove();
        }
        //let valTopicCat = $(this).find('gmd\\:MD_TopicCategoryCode').attr('codeListValue');
        let valTopicCat = $(this).text().trim(); //Ajustes //ANA //CPRM //IBAMA //MINISTERIO //UNB
        if (valTopicCat == "") {
            valTopicCat = $(this).find('gmd\\:MD_TopicCategoryCode').attr('codeListValue');
        }
        //console.log(valTopicCat);

        topicCategory.find('.topicCategory').val(valTopicCat);
        topicCategory.show();
        $('#inc_dec_topic_cat').append(topicCategory);
    });

    autocompleteExtent(xml);
}