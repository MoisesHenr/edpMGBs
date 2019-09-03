<?php
	include 'identificationInfo/class_identificationInfo.inc';
	include 'identificationInfoCDG/class_identificationInfoCDG.inc';
	include 'dataQualityInfo/class_dataQualityInfo.inc';
	include 'distributionInfo/class_distributionInfo.inc';
	include 'referenceSystem/class_referenceSystem.inc';
	include 'metadata/class_metadata.inc';

	class Formulario 
	{
		public function __construct(&$dom, &$MD_Metadata)
		{
			$dom = new DOMDocument("1.0", "UTF-8");
			$dom->preserveWhiteSpace = false;
			$dom->formatOutput = true;
			$MD_Metadata = $dom->createElement("gmd:MD_Metadata");
			$gmd = $dom->createAttribute('xmlns:gmd');
			$gmd->appendChild($dom->createTextNode('http://www.isotc211.org/2005/gmd'));
			$MD_Metadata->appendChild($gmd);
			$gco = $dom->createAttribute('xmlns:gco');
			$gco->appendChild($dom->createTextNode('http://www.isotc211.org/2005/gco'));
			$MD_Metadata->appendChild($gco);
			$geonet = $dom->createAttribute('xmlns:geonet');
			$geonet->appendChild($dom->createTextNode('http://www.fao.org/geonetwork'));
			$MD_Metadata->appendChild($geonet);
			$gml = $dom->createAttribute('xmlns:gml');
			$gml->appendChild($dom->createTextNode('http://www.opengis.net/gml'));
			$MD_Metadata->appendChild($gml);
			$gts = $dom->createAttribute('xmlns:gts');
			$gts->appendChild($dom->createTextNode('http://www.isotc211.org/2005/gts'));
			$MD_Metadata->appendChild($gts);
			$xsi = $dom->createAttribute('xmlns:xsi');
			$xsi->appendChild($dom->createTextNode('http://www.w3.org/2001/XMLSchema-instance'));
			$MD_Metadata->appendChild($xsi);

			new IdentificationInfo($dom, $MD_Metadata, $identificationInfo, $MD_Identification);
			new IdentificationInfoCDG($dom, $MD_Metadata, $identificationInfo, $MD_Identification);
			new DataQualityInfo($dom, $MD_Metadata);
			new DistributionInfo($dom, $MD_Metadata);
			new ReferenceSystem($dom, $MD_Metadata);
			new Metadata($dom, $MD_Metadata);
			
			///////////////////////////////////////////////////////////////////
			//usar ip para gerar o nome e evitar colisao
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
		    $name = "export/XML" . str_replace(':', '_', $ip) . ".xml";
			///////////////////////////////////////////////////////////////////
			
			$dom->appendChild($MD_Metadata);
			$dom->save($name);
		}
	}
?>