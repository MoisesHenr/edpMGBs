function post_dataQualityInfo(Erro, background) {
    let lineage;
    let statement = $("#lineage").find("#statement").val();
    //console.log(statement);
    if (statement == "") {
        Erro.alert.push('O campo ("Qualidade/Linhagem/Declaração") não está preenchido.');
        $("#lineage").find("#statement").css('background', background.erro);
    }
    else {
        $("#lineage").find("#statement").css('background', background.default);
    }
    let source = [];
    $("#lineage").find('#inc_dec_source').find('#source').each(function(i,e) {
        let sourceExtent = $(e).find('#sourceExtent').val();
        //console.log(sourceExtent);
        if (sourceExtent == "") {
            Erro.alert.push('O campo ("Qualidade/Linhagem/' + (i+1) + '. Fonte de Dados/Extensão da Fonte") não está preenchido.');
            $(e).find('#sourceExtent').css('background', background.erro);
        }
        else {
            $(e).find('#sourceExtent').css('background', background.default);
        }
        let descriptionSource = $(e).find('#descriptionSource').val();
        //console.log(descriptionSource);
        if (descriptionSource == "") {
            Erro.alert.push('O campo ("Qualidade/Linhagem/' + (i+1) + '. Fonte de Dados/Descrição") não está preenchido.');
            $(e).find('#descriptionSource').css('background', background.erro);
        }
        else {
            $(e).find('#descriptionSource').css('background', background.default);
        }
        let scaleDenominator = $(e).find('#scaleDenominator').val();
        //console.log(scaleDenominator);
        let sourceVal = {sourceExtent:sourceExtent, descriptionSource:descriptionSource, scaleDenominator:scaleDenominator};
        source.push(sourceVal);
    });
    let processStep = [];
    $("#lineage").find('#inc_dec_proc_step').find('#proc_step').each(function(i,e) {
        let proc = $(e).find('#descriptionStep').val();
        //console.log(proc);
        processStep.push(proc);
    });

    lineage = {statement:statement, source:source, processStep:processStep};
    return lineage;
}