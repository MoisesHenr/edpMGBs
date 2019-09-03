<?php 
	class DataQualityInfo
	{
		function __construct(&$dom, &$MD_Metadata)
		{
			$dataQualityInfo = $dom->createElement('gmd:dataQualityInfo');
			$DQ_DataQuality = $dom->createElement('gmd:DQ_DataQuality');
			//////////////////////////////////////////////////////////////

			///////lineage///////
			$lineage = $dom->createElement('gmd:lineage');
			$LI_Lineage = $dom->createElement('gmd:LI_Lineage');
			///////statement///////
			$statement = $dom->createElement('gmd:statement');
			$CharacterString = $dom->createElement('gco:CharacterString');
			$auxStatement = $dom->createTextNode($_POST['dataQualityInfo']['statement']);
			$CharacterString->appendChild($auxStatement);
			$statement->appendChild($CharacterString);
			$LI_Lineage->appendChild($statement);
			///////fim statement///////
			///////source///////
			foreach ($_POST['dataQualityInfo']['source'] as $sourceValue) {
				$source = $dom->createElement('gmd:source');
				$LI_Source = $dom->createElement('LI_Source'); //???????gmd???????
				///////sourceExtent///////
				$sourceExtent = $dom->createElement('gmd:sourceExtent');
				$CharacterString = $dom->createElement('gco:CharacterString', $sourceValue['sourceExtent']);
				$sourceExtent->appendChild($CharacterString);
				$LI_Source->appendChild($sourceExtent);
				///////fim sourceExtent///////
				///////description///////
				$description = $dom->createElement('gmd:description');
				$CharacterString = $dom->createElement('gco:CharacterString', $sourceValue['descriptionSource']);
				$description->appendChild($CharacterString);
				$LI_Source->appendChild($description);
				///////fim description///////
				///////scaleDenominator///////
				$scaleDenominator = $dom->createElement('gmd:scaleDenominator');
				$CharacterString = $dom->createElement('gco:CharacterString', $sourceValue['scaleDenominator']);
				$scaleDenominator->appendChild($CharacterString);
				$LI_Source->appendChild($scaleDenominator);
				///////fim scaleDenominator///////
				$source->appendChild($LI_Source);
				$LI_Lineage->appendChild($source);
			}
			///////fim source///////
			///////processStep///////
			foreach ($_POST['dataQualityInfo']['processStep'] as $processStepValue) {
				$processStep = $dom->createElement('gmd:processStep');
				$LI_ProcessStep = $dom->createElement('gmd:LI_ProcessStep');
				$description = $dom->createElement('gmd:description');
				$CharacterString = $dom->createElement('gco:CharacterString', $processStepValue);
				$description->appendChild($CharacterString);
				$LI_ProcessStep->appendChild($description);
				$processStep->appendChild($LI_ProcessStep);
				$LI_Lineage->appendChild($processStep);
			}
			///////fim processStep///////
			$lineage->appendChild($LI_Lineage);
			$DQ_DataQuality->appendChild($lineage);
			///////fim lineage///////

			///////////////////////////////////////////////
			$dataQualityInfo->appendChild($DQ_DataQuality);
			$MD_Metadata->appendChild($dataQualityInfo);
		}
	}
?>