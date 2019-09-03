///////troca de glyph dos botoes
$(document).ready(function(){
    $("#menu").find("button, span").click(function(){
        if($(this).find('span').attr("class") == "glyphicon glyphicon-menu-down") {
            $(this).find("span").attr("class", "glyphicon glyphicon-menu-up"); 
        }
        else {
            $(this).find('span').attr("class", "glyphicon glyphicon-menu-down");
        }
    });
});

function reset() {
    $('#form').each (function(){
        this.reset();
    });
}

//uuid online
/*$(document).ready(function(){
    $('#uuid').load('captura.php?url=https://www.uuidgenerator.net .uuid');
    $('#Submit').click(function(){
        $('#fileIdentifier').val($('#uuid').text());
    });
});*/
//uuid local
function uuid() {
    var uuid = "", i, random;
    for (i = 0; i < 32; i++) {
        random = Math.random() * 16 | 0;

        if (i == 8 || i == 12 || i == 16 || i == 20) {
        uuid += "-"
        }
        uuid += (i == 12 ? 4 : (i == 16 ? (random & 3 | 8) : random)).toString(16);
    }
    return uuid;
}
