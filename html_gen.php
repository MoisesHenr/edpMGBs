<?php
include 'class_table.inc';

include 'identificationInfo/class_identificationInfoHTML.inc';
include 'identificationInfoCDG/class_identificationInfoCDGHTML.inc';
include 'dataQualityInfo/class_dataQualityInfoHTML.inc';
include 'distributionInfo/class_distributionInfoHTML.inc';
include 'referenceSystem/class_referenceSystemHTML.inc';
include 'metadata/class_metadataHTML.inc';

# Nome do arquivo html
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

$name = "export/HTML" . str_replace(':', '_', $ip);

$pagename = $name . ".html";

# Texto a ser salvo no arquivo
$cabecalhoHtml = '<!DOCTYPE html>
<html lang="en">
<head>
  	<title>edpMGBs Visualização HTML</title>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
	<div class="container">';

$identificationInfoHTML = new IdentificationInfoHTML();
$identificationInfoHTMLString = $identificationInfoHTML->getIdentificationInfoHTML();
$identificationInfoCDGHTML = new IdentificationInfoCDGHTML();
$identificationInfoCDGHTMLString = $identificationInfoCDGHTML->getIdentificationInfoCDGHTML();
$dataQualityInfoHTML = new DataQualityInfoHTML();
$dataQualityInfoHTMLString = $dataQualityInfoHTML->getDataQualityInfoHTML();
$distributionInfoHTML = new DistributionInfoHTML();
$distributionInfoHTMLString = $distributionInfoHTML->getDistributionInfoHTML();
$referenceSystemHTML = new ReferenceSystemHTML();
$referenceSystemHTMLString = $referenceSystemHTML->getReferenceSystemHTML();
$metadataHTML = new MetadataHTML();
$metadataHTMLString = $metadataHTML->getMetadataHTML();

$rodapeHtml = '
        </div>
	</body>
</html>';

$html = $cabecalhoHtml . $identificationInfoHTMLString . $identificationInfoCDGHTMLString . $dataQualityInfoHTMLString . $distributionInfoHTMLString . $referenceSystemHTMLString . $metadataHTMLString . $rodapeHtml;

#Criar o arquivo
$fp = fopen($pagename , "w");
$fw = fwrite($fp, $html);

#Verificar se o arquivo foi salvo.
if($fw == strlen($html)) {
   echo 'Arquivo criado com sucesso!!';
}else{
   echo 'falha ao criar arquivo';
}
?>