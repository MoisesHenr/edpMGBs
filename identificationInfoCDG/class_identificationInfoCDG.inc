<?php 
	include 'class_extent.inc';

	class IdentificationInfoCDG
	{
		function __construct(&$dom, &$MD_Metadata, &$identificationInfo, &$MD_Identification)
		{
			$spatialRep = $_POST['identificationInfoCDG']['spatialRepresentationType'];
			foreach ($spatialRep as $value) {
				$spatialRepresentationType = $dom->createElement('gmd:spatialRepresentationType');
				$MD_SpatialRepresentationTypeCode = $dom->createElement('gmd:MD_SpatialRepresentationTypeCode');

				$codeList = $dom->createAttribute('codeList');
				$codeList->appendChild($dom->createTextNode('http://www.isotc211.org/2005/resources/codeList.xml#MD_SpatialRepresentationTypeCode'));
				$MD_SpatialRepresentationTypeCode->appendChild($codeList);
				$codeListValue = $dom->createAttribute('codeListValue');
				$codeListValue->appendChild($dom->createTextNode($value));
				$MD_SpatialRepresentationTypeCode->appendChild($codeListValue);

				$spatialRepresentationType->appendChild($MD_SpatialRepresentationTypeCode);
				$MD_Identification->appendChild($spatialRepresentationType);
			}

			$spatialRes = $_POST['identificationInfoCDG']['spatialResolution'];
			$spatialResolution = $dom->createElement('gmd:spatialResolution');
			foreach ($spatialRes as $value) {
				$MD_Resolution = $dom->createElement('gmd:MD_Resolution');
				$equivalentScale = $dom->createElement('gmd:equivalentScale');
				$MD_RepresentativeFraction = $dom->createElement('gmd:MD_RepresentativeFraction');
				$denominator = $dom->createElement('gmd:denominator');
				$Integer = $dom->createElement('gco:Integer', $value);

				$denominator->appendChild($Integer);
				$MD_RepresentativeFraction->appendChild($denominator);
				$equivalentScale->appendChild($MD_RepresentativeFraction);
				$MD_Resolution->appendChild($equivalentScale);
				$spatialResolution->appendChild($MD_Resolution);
			}
			$MD_Identification->appendChild($spatialResolution);


			foreach ($_POST['identificationInfoCDG']['languageCdg'] as $langValue) {
				$language = $dom->createElement('gmd:language');
				$LanguageCode = $dom->createElement('gmd:LanguageCode');

				$codeList = $dom->createAttribute('codeList');
				$codeList->appendChild($dom->createTextNode("http://www.isotc211.org/2005/resources/codeList.xml#LanguageCode"));
				$LanguageCode->appendChild($codeList);

				$codeListValue = $dom->createAttribute('codeListValue');
				$codeListValue->appendChild($dom->createTextNode($langValue));
				$LanguageCode->appendChild($codeListValue);

				$language->appendChild($LanguageCode);
				$MD_Identification->appendChild($language);
			}



			$characterSet = $dom->createElement('gmd:characterSet');
			$MD_CharacterSetCode = $dom->createElement('gmd:MD_CharacterSetCode');
			$codeList = $dom->createAttribute('codeList');
			$codeList->appendChild($dom->createTextNode('http://www.isotc211.org/2005/resources/codeList.xml#MD_CharacterSetCode'));
			$MD_CharacterSetCode->appendChild($codeList);
			$codeListValue = $dom->createAttribute('codeListValue');
			$codeListValue->appendChild($dom->createTextNode($_POST['identificationInfoCDG']['characterSet']));
			$MD_CharacterSetCode->appendChild($codeListValue);
			$characterSet->appendChild($MD_CharacterSetCode);
			$MD_Identification->appendChild($characterSet);


			$topic_cat = $_POST['identificationInfoCDG']['topicCategory'];
			foreach ($topic_cat as $value) {
				$topicCategory = $dom->createElement('gmd:topicCategory');
				$MD_TopicCategoryCode = $dom->createElement('gmd:MD_TopicCategoryCode');
				$codeList = $dom->createAttribute('codeList');
				$codeList->appendChild($dom->createTextNode('http://www.isotc211.org/2005/resources/codeList.xml#MD_TopicCategoryCode'));
				$MD_TopicCategoryCode->appendChild($codeList);
				$codeListValue = $dom->createAttribute('codeListValue');
				$codeListValue->appendChild($dom->createTextNode($value));
				$MD_TopicCategoryCode->appendChild($codeListValue);
				$topicCategory->appendChild($MD_TopicCategoryCode);
				$MD_Identification->appendChild($topicCategory);
			}


			$extent = new Extent($dom, $MD_Identification);

			/////////////////////////////////////////////////////
			$identificationInfo->appendChild($MD_Identification);
			$MD_Metadata->appendChild($identificationInfo);
		}
	}
?>