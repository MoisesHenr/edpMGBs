$(document).ready(function (e) {
    $('#upload').on('click', function () {
        var file_data = $('#file').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        $.ajax({
            url: 'proc_up.php', // point to server-side PHP script 
            dataType: 'text', // what to expect back from the PHP script
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                //alert(response);
                if(response == '1') {
                    alert('Erro durante o upload');
                }   
                else if(response == '2') {
                    alert('Arquivo invalido');
                }
                else if(response == '3') {
                    alert('Por favor selecione um arquivo');
                }
                else {
                    $.ajax({
                        type: "POST",
                        url: "import/" + response,
                        dataType: "xml",
                        success: function (xml) {
                            autocompleteIdentificationInfo(xml);
                            autocompleteIdentificationInfoCDG(xml);
                            autocompleteDataQualityInfo(xml);
                            autocompleteDistributionInfo(xml);
                            autocompleteReferenceSystem(xml);
                            autocompleteMetadata(xml);
                        },
                        error: function () {
                            alert("Ocorreu um erro inesperado durante o processamento.");
                        }
                    });                  
                }
                
            },
            error: function (response) {
                alert(response);
            }
        });
    });   
}); 
