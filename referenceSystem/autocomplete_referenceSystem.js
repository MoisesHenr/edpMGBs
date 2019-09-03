function autocompleteReferenceSystem(xml) {

    let MD_CRS = $(xml).find('gmd\\:referenceSystemInfo').find('gmd\\:MD_ReferenceSystem').find('gmd\\:MD_CRS');

    let projection = MD_CRS.find('gmd\\:projection').find('gco\\:CharacterString').text();
    //console.log(projection);
    $('#md_crs').find('#projection').val(projection);
    let ellipsoid = MD_CRS.find('gmd\\:ellipsoid').find('gco\\:CharacterString').text();
    //console.log(ellipsoid);
    $('#md_crs').find('#ellipsoid').val(ellipsoid);
    MD_CRS.find('gmd\\:datum').find('gco\\:CharacterString').each(function(i) {
        if (i == 0) {
            $('#inc_dec_datum').find('.referenceDatum').remove();
        }
        let datum = $('#referenceDatum').clone(true);
        //console.log($(this).text());
        datum.find('.datum').val($(this).text());
        datum.show();
        $('#inc_dec_datum').append(datum);
    });
    MD_CRS.find('gmd\\:ellipsoidParameters').each(function(i) {
        if (i == 0) {
            $('#inc_dec_ellipsoidParameters').find('.ellipsoidParameters').remove();
        }
        let ellipsoidParameters = $('#ellipsoidParameters').clone(true);
        
        let semiMajorAxis = $(this).find('gmd\\:semiMajorAxis').find('gco\\:Real').text();
        //console.log(semiMajorAxis);
        ellipsoidParameters.find('.semiMajorAxis').val(semiMajorAxis);

        let axisUnits = $(this).find('gmd\\:axisUnits').find('gco\\:CharacterString').text();
        //console.log(axisUnits);
        ellipsoidParameters.find('.axisUnits').val(axisUnits);

        let denominatorOfFlatteningRatio = $(this).find('gmd\\:denominatorOfFlatteningRatio').find('gco\\:Real').text();
        //console.log(denominatorOfFlatteningRatio);
        ellipsoidParameters.find('.denominatorOfFlatteningRatio').val(denominatorOfFlatteningRatio);

        ellipsoidParameters.show();
        $('#inc_dec_ellipsoidParameters').append(ellipsoidParameters);
    });
    MD_CRS.find('gmd\\:projectionParameters').find('gco\\:CharacterString').each(function(i) {
        if (i == 0) {
            $('#inc_dec_projParam').find('.projParam').remove();
        }
        let projectionParameters = $('#projParam').clone(true);
        //console.log($(this).text());
        projectionParameters.find('.projectionParameters').val($(this).text());
        projectionParameters.show();
        $('#inc_dec_projParam').append(projectionParameters);
    });


    let referenceSystemIdentifier = $(xml).find('gmd\\:referenceSystemInfo').find('gmd\\:MD_ReferenceSystem').find('gmd\\:referenceSystemIdentifier');
    let code = referenceSystemIdentifier.find('gmd\\:code').find('gco\\:CharacterString').text();
    //console.log(code);
    $('#identifier').find('#code').val(code);
    let version = referenceSystemIdentifier.find('gmd\\:version').find('gco\\:CharacterString').text();
    //console.log(version);
    $('#identifier').find('#version').val(version);
    let codeSpace = referenceSystemIdentifier.find('gmd\\:codeSpace').find('gco\\:CharacterString').text();
    //console.log(codeSpace);
    $('#identifier').find('#codeSpace').val(codeSpace);
}