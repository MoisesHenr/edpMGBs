$(document).ready(function (e) {
    $('.uploadBoundingBox').on('click', function (event) {
        //var file_data = $('#fileBoundingBox').prop('files')[0];
        var file_data = $(event.target).parent().parent().find('#fileBoundingBox').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        $.ajax({
            url: 'proc_upBoundingBox.php', // point to server-side PHP script 
            dataType: 'text', // what to expect back from the PHP script
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
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
                        type: "post",
                        url: "importBoundingBox/" + response,
                        dataType: "xml",
                        success: function (xml) {
                            let valWest = $(xml).find('gmd\\:westBoundLongitude').find('gco\\:Decimal').text();
                            $(event.target).parent().parent().parent().find('.westBoundLongitude').val(valWest);
                            let valEast = $(xml).find('gmd\\:eastBoundLongitude').find('gco\\:Decimal').text();
                            $(event.target).parent().parent().parent().find('.eastBoundLongitude').val(valEast);
                            let valSouth = $(xml).find('gmd\\:southBoundLatitude').find('gco\\:Decimal').text();
                            $(event.target).parent().parent().parent().find('.southBoundLatitude').val(valSouth);
                            let valNorth = $(xml).find('gmd\\:northBoundLatitude').find('gco\\:Decimal').text();
                            $(event.target).parent().parent().parent().find('.northBoundLatitude').val(valNorth);
                        },
                        error: function () {
                            console.log("Ocorreu um erro inesperado durante o processamento.");
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