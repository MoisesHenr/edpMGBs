$(document).on("click", "#Submit", function(){
	let Erro = {erro:[],alert:[]};
    let background = {erro:'#E6E6FA', default:'white'};

    let identificationInfo = post_identificationInfo(Erro, background);
	let identificationInfoCDG = post_identificationInfoCDG(Erro, background);
	let dataQualityInfo = post_dataQualityInfo(Erro, background);
	let distributionInfo = post_distributionInfo(Erro, background);
    let referenceSystem = post_referenceSystem();
    let metadata = post_metadata(Erro, background);

    let url = "proc_oop.php";
    $.post(url,{identificationInfo:identificationInfo, identificationInfoCDG:identificationInfoCDG, dataQualityInfo:dataQualityInfo, distributionInfo:distributionInfo, referenceSystem:referenceSystem, metadata:metadata},function(response,status){
        if(status == "success"){            
            
            $("#viewDocument").show();
            $("#exportDocument").show();

            if (Erro.erro.length != 0 || Erro.alert.length != 0) {
                $('#errosModal').text("");
                for(let i = 0; i < Erro.erro.length; i++) {
                    $('#errosModal').append(Erro.erro[i] + "<br>");
                }
                $('#alertsModal').text("");
                for(let i = 0; i < Erro.alert.length; i++) {
                    $('#alertsModal').append(Erro.alert[i] + "<br>");
                }
                
                $('#modalErrosAlerts').modal('show');

                //atribuir nome do arquivo de forma dinamica para vizualização e download
                $.post("get_name.php", {}, function (response, status) {
                    if (status == "success") {
                        //XML
                        let xml = "export/XML" + response + ".xml";
                        $("#viewXML").attr("href", xml);
                        $("#exportXML").attr("href", xml);
                    }
                });
            }
            else {
                $('#modalValid').modal('show');
            }
        }
    });

    url = "html_gen.php";
    $.post(url,{identificationInfo:identificationInfo, identificationInfoCDG:identificationInfoCDG, dataQualityInfo:dataQualityInfo, distributionInfo:distributionInfo, referenceSystem:referenceSystem, metadata:metadata},function(response,status){
        if(status == "success"){
            //atribuir nome do arquivo de forma dinamica para vizualização e download
            $.post("get_name.php", {}, function (response, status) {
                if (status == "success") {
                    //HTML
                    let html = "export/HTML" + response + ".html";
                    $("#viewHTML").attr("href", html);
                    $("#exportHTML").attr("href", html);
                }
            });
        }
    });
});