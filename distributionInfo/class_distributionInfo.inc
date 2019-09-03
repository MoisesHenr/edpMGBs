<?php 
	class DistributionInfo
	{
		function __construct(&$dom, &$MD_Metadata)
		{
			$distributionInfo = $dom->createElement('gmd:distributionInfo');
			$MD_Distribution = $dom->createElement('gmd:MD_Distribution');
			//////////////////////////////////////////////////////////////

			foreach ($_POST['distributionInfo']['distribution'] as $distInfo) {
				$distributionFormat = $dom->createElement('gmd:distributionFormat');
				$MD_Format = $dom->createElement('gmd:MD_Format');

				foreach ($distInfo['nameFormat'] as $nameFormatValue) {
					$nameFormat = $dom->createElement('gmd:name');
					$CharacterString = $dom->createElement('gco:CharacterString', $nameFormatValue);
					$nameFormat->appendChild($CharacterString);
					$MD_Format->appendChild($nameFormat);
				}

				foreach ($distInfo['versionFormat'] as $versionFormatValue) {
					$versionFormat = $dom->createElement('gmd:version');
					$CharacterString = $dom->createElement('gco:CharacterString', $versionFormatValue);
					$versionFormat->appendChild($CharacterString);
					$MD_Format->appendChild($versionFormat);
				}

				$distributionFormat->appendChild($MD_Format);
				$MD_Distribution->appendChild($distributionFormat);
			}

			foreach ($_POST['distributionInfo']['transferOptions'] as $link) {
				$transferOptions = $dom->createElement('gmd:transferOptions');
				$MD_DigitalTransferOptions = $dom->createElement('gmd:MD_DigitalTransferOptions');
				$onLine = $dom->createElement('gmd:onLine');
				$CI_OnlineResource = $dom->createElement('gmd:CI_OnlineResource');
				$linkage = $dom->createElement('gmd:linkage');

				//$link = str_replace("&", '&amp', $link, $count);
				//echo $link;
				//$URL = $dom->createElement('gmd:URL', $link);
				//$URL = $dom->createTextNode('gmd:URL', $link);
				$URL = $dom->createElement('gmd:URL');
				$auxURL = $dom->createTextNode($link['linkage']); //permite caracteres especiais
				$URL->appendChild($auxURL);
				$linkage->appendChild($URL);
				$CI_OnlineResource->appendChild($linkage);

				$protocol = $dom->createElement('gmd:protocol');
				$CharacterString = $dom->createElement('gco:CharacterString', $link['protocol']);
				$protocol->appendChild($CharacterString);
				$CI_OnlineResource->appendChild($protocol);

				$onLine->appendChild($CI_OnlineResource);
				$MD_DigitalTransferOptions->appendChild($onLine);
				$transferOptions->appendChild($MD_DigitalTransferOptions);
				$MD_Distribution->appendChild($transferOptions);
			}

			///////////////////////////////////////////////
			$distributionInfo->appendChild($MD_Distribution);
			$MD_Metadata->appendChild($distributionInfo);
		}
	}
?>