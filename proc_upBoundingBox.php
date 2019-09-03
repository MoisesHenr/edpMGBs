<?php

if (isset($_FILES['file']['name'])) {
    $dir = './importBoundingBox/';
    
    date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
    $ip;
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $new_name = "BOUNDING_BOX_UPLOAD" . str_replace(':', '_', $ip) . ".xml";

    $arqType = $_FILES['file']['type'];

    if (0 < $_FILES['file']['error']) {
        //echo 'Erro durante o upload' . $_FILES['file']['error'];
        echo '1';
    } elseif ($arqType != 'text/xml') {
        //echo 'Erro durante o upload: arquivo invalido';
        echo '2';
    } else {
        move_uploaded_file($_FILES['file']['tmp_name'], $dir . $new_name);
        //echo 'Arquivo recebido com sucesso : ' . $dir . $new_name;
        echo $new_name;
    }
} else {
    //echo 'Por favor selecione um arquivo';
    echo '3';
}

?>