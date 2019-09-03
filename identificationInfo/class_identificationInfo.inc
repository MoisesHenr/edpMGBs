<?php 
	class IdentificationInfo
	{
		//function __construct(&$dom, &$MD_Identification)
		function __construct(&$dom, &$MD_Metadata, &$identificationInfo, &$MD_Identification)
		{
			$identificationInfo = $dom->createElement("gmd:identificationInfo");
			$MD_Identification = $dom->createElement("gmd:MD_DataIdentification"); //ajuste GeoNetwork

			foreach ($_POST['identificationInfo']['citation'] as $citationValue) {
				$citation = $dom->createElement("gmd:citation");
				$CI_Citation = $dom->createElement("gmd:CI_Citation");
				
				$title = $dom->createElement('gmd:title');
				$CharacterString = $dom->createElement("gco:CharacterString",$citationValue['title']);
				$title->appendChild($CharacterString);
				$CI_Citation->appendChild($title); 

				foreach ($citationValue['dateType'] as $dateTypeValue) {
					$date = $dom->createElement('gmd:date');
					$CI_Date = $dom->createElement('gmd:CI_Date');
					
					$dt = $dom->createElement('gmd:date');
					//date
					$Date = $dom->createElement('gco:Date',$dateTypeValue['date']);
					$dt->appendChild($Date);
					//fim date
					$CI_Date->appendChild($dt);

					$dateType = $dom->createElement('gmd:dateType');
					$CI_DateTypeCode = $dom->createElement("gmd:CI_DateTypeCode");
					$codeList = $dom->createAttribute("codeList");
					$codeList->appendChild($dom->createTextNode('http://www.isotc211.org/2005/resources/codeList.xml#CI_DateTypeCode'));
					$CI_DateTypeCode->appendChild($codeList);
					$codeListValue = $dom->createAttribute("codeListValue");
					$codeListValue->appendChild($dom->createTextNode($dateTypeValue['type']));
					$CI_DateTypeCode->appendChild($codeListValue);
					$dateType->appendChild($CI_DateTypeCode);
					$CI_Date->appendChild($dateType);

					$date->appendChild($CI_Date);
					$CI_Citation->appendChild($date);
				}

				$citation->appendChild($CI_Citation);
				$MD_Identification->appendChild($citation);
			}

			$abstract = $dom->createElement('gmd:abstract');
			$CharacterString = $dom->createElement("gco:CharacterString", $_POST['identificationInfo']['abstract']);
			$abstract->appendChild($CharacterString);
			$MD_Identification->appendChild($abstract);

			$status = $dom->createElement('gmd:status');
			$MD_ProgressCode = $dom->createElement("gmd:MD_ProgressCode");
			$codeList = $dom->createAttribute('codeList');
			$codeList->appendChild($dom->createTextNode('http://www.isotc211.org/2005/resources/codeList.xml#MD_ProgressCode'));
			$MD_ProgressCode->appendChild($codeList);
			$codeListValue = $dom->createAttribute('codeListValue');
			$codeListValue->appendChild($dom->createTextNode($_POST['identificationInfo']['status']));
			$MD_ProgressCode->appendChild($codeListValue);
			$status->appendChild($MD_ProgressCode);
			$MD_Identification->appendChild($status);

			foreach ($_POST['identificationInfo']['pointOfContact'] as $responsavelPoint) {
				//print_r($responsavelPoint);
				$pointOfContact = $dom->createElement('gmd:pointOfContact');
				$CI_ResponsibleParty = $dom->createElement('gmd:CI_ResponsibleParty');
				foreach ($responsavelPoint as $key => $value) {
					if($key == 'individualNamePoint') {
						$individualNamePoint = $dom->createElement('gmd:individualName');
						$CharacterString = $dom->createElement("gco:CharacterString", $value);
						$individualNamePoint->appendChild($CharacterString);
						$CI_ResponsibleParty->appendChild($individualNamePoint);
					}
					else if($key == 'metadataOrganisationNamePoint') {
						foreach ($value as $orgValue) {
							$organisationNamePoint = $dom->createElement('gmd:organisationName');
							$CharacterString = $dom->createElement("gco:CharacterString", $orgValue);
							$organisationNamePoint->appendChild($CharacterString);
							$CI_ResponsibleParty->appendChild($organisationNamePoint);
						}
					}
					else if($key == 'rolePoint') {
						foreach ($value as $rolValue) {
							$rolePoint = $dom->createElement('gmd:role');
							$CI_RoleCode = $dom->createElement('gmd:CI_RoleCode');
							$codeList = $dom->createAttribute('codeList');
							$codeList->appendChild($dom->createTextNode('http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode'));
							$CI_RoleCode->appendChild($codeList);
							$codeListValue = $dom->createAttribute('codeListValue');
							$codeListValue->appendChild($dom->createTextNode($rolValue));
							$CI_RoleCode->appendChild($codeListValue);
							$rolePoint->appendChild($CI_RoleCode);
							$CI_ResponsibleParty->appendChild($rolePoint);
						}
					}
					else if($key == 'pointOfContactInfo') {
						//$contInfo = new ContactInfo($dom, $CI_ResponsibleParty, $valeu); //pointOfContactInfo
						$pointOfContactInfo = $dom->createElement('gmd:contactInfo');
						$CI_Contact = $dom->createElement('gmd:CI_Contact');
						
						$phone = $dom->createElement('gmd:phone');
						$CI_Telephone = $dom->createElement('gmd:CI_Telephone');

						$voicePoint = $dom->createElement('gmd:voice');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['voicePoint']);
						$voicePoint->appendChild($CharacterString);
						$CI_Telephone->appendChild($voicePoint);

						$facsimilePoint = $dom->createElement('gmd:facsimile');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['facsimilePoint']);
						$facsimilePoint->appendChild($CharacterString);
						$CI_Telephone->appendChild($facsimilePoint);

						$phone->appendChild($CI_Telephone);
						$CI_Contact->appendChild($phone);
						/////////////////////////////////
						$add = $dom->createElement('gmd:address');
						$CI_Address = $dom->createElement('gmd:CI_Address');

						$addressPoint = $dom->createElement('gmd:address');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['addressPoint']);
						$addressPoint->appendChild($CharacterString);
						$CI_Address->appendChild($addressPoint);

						$cityPoint = $dom->createElement('gmd:city');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['cityPoint']);
						$cityPoint->appendChild($CharacterString);
						$CI_Address->appendChild($cityPoint);

						$administrativeAreaPoint = $dom->createElement('gmd:administrativeArea');
						$UF_TypeCode = $dom->createElement('gmd:UF_TypeCode');
						$codeList = $dom->createAttribute('codeList');
						$codeList->appendChild($dom->createTextNode('http://www.isotc211.org/2005/resources/codeList.xml#UF_TypeCode'));
						$UF_TypeCode->appendChild($codeList);
						$codeListValue = $dom->createAttribute('codeListValue');
						$codeListValue->appendChild($dom->createTextNode($value['administrativeAreaPoint']));
						$UF_TypeCode->appendChild($codeListValue);
						$administrativeAreaPoint->appendChild($UF_TypeCode);
						$CI_Address->appendChild($administrativeAreaPoint); 

						$postalCodePoint = $dom->createElement('gmd:postalCode');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['postalCodePoint']);
						$postalCodePoint->appendChild($CharacterString);
						$CI_Address->appendChild($postalCodePoint);

						$countryPoint = $dom->createElement('gmd:country');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['countryPoint']);
						$countryPoint->appendChild($CharacterString);
						$CI_Address->appendChild($countryPoint);

						$electronicMailAddressPoint = $dom->createElement('gmd:electronicMailAddress');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['electronicMailAddressPoint']);
						$electronicMailAddressPoint->appendChild($CharacterString);
						$CI_Address->appendChild($electronicMailAddressPoint);

						
						$add->appendChild($CI_Address);
						$CI_Contact->appendChild($add);

						$pointOfContactInfo->appendChild($CI_Contact);
						$CI_ResponsibleParty->appendChild($pointOfContactInfo);
					}
				}
				$pointOfContact->appendChild($CI_ResponsibleParty);
				$MD_Identification->appendChild($pointOfContact);
			}


			///////descriptiveKeywords///////
			foreach ($_POST['identificationInfo']['descriptiveKeywords'] as $descKey) {
				$descriptiveKeywords = $dom->createElement('gmd:descriptiveKeywords');
				$MD_Keywords = $dom->createElement('gmd:MD_Keywords');
				foreach ($descKey['keyword'] as $key) {
					$keyword = $dom->createElement('gmd:keyword');
					$CharacterString = $dom->createElement('gco:CharacterString', $key);
					$keyword->appendChild($CharacterString);
					$MD_Keywords->appendChild($keyword);
				}
				$typeKeyword = $dom->createElement('gmd:type');
				$MD_KeywordTypeCode = $dom->createElement('gmd:MD_KeywordTypeCode');

				$codeList = $dom->createAttribute('codeList');
				$codeList->appendChild($dom->createTextNode('http://www.isotc211.org/2005/resources/codeList.xml#MD_KeywordTypeCode'));
				$MD_KeywordTypeCode->appendChild($codeList);

				$codeListValue = $dom->createAttribute('codeListValue');
				$codeListValue->appendChild($dom->createTextNode($descKey['typeKeyword']));
				$MD_KeywordTypeCode->appendChild($codeListValue);

				$typeKeyword->appendChild($MD_KeywordTypeCode);
				$MD_Keywords->appendChild($typeKeyword);

				$descriptiveKeywords->appendChild($MD_Keywords);
				$MD_Identification->appendChild($descriptiveKeywords);
			}
			///////fim descriptiveKeywords///////


			///////graphicOverview///////
			foreach ($_POST['identificationInfo']['graphicOverview'] as $graphO) {
				$graphicOverview = $dom->createElement('gmd:graphicOverview');
				$MD_BrowseGraphic = $dom->createElement('gmd:MD_BrowseGraphic');

				$fileName = $dom->createElement('gmd:fileName');
				$CharacterString = $dom->createElement('gco:CharacterString');
				$auxCharacterString = $dom->createTextNode($graphO['fileName']);
				$CharacterString->appendChild($auxCharacterString);
				$fileName->appendChild($CharacterString);
				$MD_BrowseGraphic->appendChild($fileName);

				$fileDescription = $dom->createElement('gmd:fileDescription');
				$CharacterString = $dom->createElement('gco:CharacterString', $graphO['fileDescription']);
				$fileDescription->appendChild($CharacterString);
				$MD_BrowseGraphic->appendChild($fileDescription);

				$fileType = $dom->createElement('gmd:fileType');
				$CharacterString = $dom->createElement('gco:CharacterString', $graphO['fileType']);
				$fileType->appendChild($CharacterString);
				$MD_BrowseGraphic->appendChild($fileType);

				$graphicOverview->appendChild($MD_BrowseGraphic);
				$MD_Identification->appendChild($graphicOverview);
			}
			///////fim graphicOverview///////

			/////////////////////////////////////////////////////
			$identificationInfo->appendChild($MD_Identification);
			$MD_Metadata->appendChild($identificationInfo);
		}
	}
?>