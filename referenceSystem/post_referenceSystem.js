function post_referenceSystem() {
    
    let projection = $('#projection').val();
    //console.log(projection);
    let ellipsoid = $('#ellipsoid').val();
    //console.log(ellipsoid);
    let datum = [];
    $('#inc_dec_datum').find('.referenceDatum').each(function(i,e) {
        datum.push($(e).find('.datum').val());
        //console.log($(e).find('.datum').val());
    });
    let ellipsoidParameters = [];
    $('#inc_dec_ellipsoidParameters').find('.ellipsoidParameters').each(function(i,e) {
        let semiMajorAxis = $(e).find('.semiMajorAxis').val();
        //console.log(semiMajorAxis);
        let axisUnits = $(e).find('.axisUnits').val();
        //console.log(axisUnits);
        let denominatorOfFlatteningRatio = $(e).find('.denominatorOfFlatteningRatio').val();
        //console.log(denominatorOfFlatteningRatio);

        let ellipParam = {semiMajorAxis:semiMajorAxis, axisUnits:axisUnits, denominatorOfFlatteningRatio:denominatorOfFlatteningRatio};
        ellipsoidParameters.push(ellipParam);
    });
    let projectionParameters = [];
    $('#inc_dec_projParam').find('.projParam').each(function(i,e) {
        projectionParameters.push($(e).find('.projectionParameters').val());
        //console.log($(e).find('.projectionParameters').val());
    });
    let md_crs = {projection:projection, ellipsoid:ellipsoid, datum:datum, ellipsoidParameters:ellipsoidParameters,projectionParameters:projectionParameters};

    let code = $('#code').val();
    //console.log(code);
    let version = $('#version').val();
    //console.log(version);
    let codeSpace = $('#codeSpace').val();
    //console.log(codeSpace);
    let identifier = {code:code, version:version, codeSpace:codeSpace};

    let referenceSystem = {md_crs:md_crs, identifier:identifier};
    return referenceSystem;
}