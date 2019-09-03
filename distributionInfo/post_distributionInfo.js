function post_distributionInfo(Erro, background) {
    let distribution = [];
    $('.distribution').each(function(i, e) {
        if(i != 0) {
            let nameFormat = [];
            $(e).find('.nameFor').each(function(ind, elem) {
                if (ind != 0) {
                    let nameFor = $(elem).find('.nameFormat').val();
                    //console.log(nameFor);
                    if (nameFor == "") {
                        Erro.erro.push('O campo ("Informação de Distribuição/' + i + '. Formato de distribuição/' + ind + '. Nome do Formato") não pode ficar vazio.');
                        $(elem).find('.nameFormat').css('background', background.erro);
                    }
                    else {
                        $(elem).find('.nameFormat').css('background', background.default);
                    }
                    nameFormat.push(nameFor);
                }
            });
            let versionFormat = [];
            $(e).find('.versionFor').each(function(ind, elem) {
                if (ind != 0) {
                    let versionFor = $(elem).find('.versionFormat').val();
                    //console.log(versionFor);
                    versionFormat.push(versionFor);
                }
            });

            let dist = {nameFormat:nameFormat, versionFormat:versionFormat};
            distribution.push(dist);
        }
    });
    let transferOptions = [];
    $('#inc_dec_link').find('.link').each(function(i, e) {
        let linkage = $(e).find('.linkage').val();
        //console.log(linkage);
        let protocol = $(e).find('.protocol').val();
        //console.log(protocol);
        transferOptions.push({linkage:linkage, protocol:protocol});
    });

    let distributionInfo = {distribution:distribution, transferOptions:transferOptions};
    return distributionInfo;
}