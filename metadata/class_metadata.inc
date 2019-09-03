<?php 
	class Metadata
	{
		function __construct(&$dom, &$MD_Metadata)
		{
			foreach ($_POST['metadata']['language'] as $langValue) {
				$language = $dom->createElement('gmd:language');
				/*$CharacterString = $dom->createElement('gco:CharacterString', $langValue);
				$language->appendChild($CharacterString);*/
				$LanguageCode = $dom->createElement('gmd:LanguageCode');

				$codeList = $dom->createAttribute('codeList');
				$codeList->appendChild($dom->createTextNode("http://www.isotc211.org/2005/resources/codeList.xml#LanguageCode"));
				$LanguageCode->appendChild($codeList);

				$codeListValue = $dom->createAttribute('codeListValue');
				$codeListValue->appendChild($dom->createTextNode($langValue));
				$LanguageCode->appendChild($codeListValue);

				$language->appendChild($LanguageCode);
				$MD_Metadata->appendChild($language);
			}

			foreach ($_POST['metadata']['characterSetCode'] as $characterValue) {
				$characterSet = $dom->createElement('gmd:characterSet');

				$MD_CharacterSetCode = $dom->createElement('gmd:MD_CharacterSetCode');
				$codeList = $dom->createAttribute('codeList');
				$codeList->appendChild($dom->createTextNode("http://www.isotc211.org/2005/resources/codeList.xml#MD_CharacterSetCode"));
				$MD_CharacterSetCode->appendChild($codeList);
				$codeListValue = $dom->createAttribute('codeListValue');
				$codeListValue->appendChild($dom->createTextNode($characterValue));
				$MD_CharacterSetCode->appendChild($codeListValue);

				$characterSet->appendChild($MD_CharacterSetCode);
				$MD_Metadata->appendChild($characterSet);
			}

			foreach ($_POST['metadata']['contact'] as $responsavel) {
				$contact = $dom->createElement('gmd:contact');
				$CI_ResponsibleParty = $dom->createElement('gmd:CI_ResponsibleParty');
				foreach ($responsavel as $key => $value) {
					if($key == 'individualName') {
						$individualName = $dom->createElement('gmd:' . $key);
						$CharacterString = $dom->createElement("gco:CharacterString", $value);
						$individualName->appendChild($CharacterString);
						$CI_ResponsibleParty->appendChild($individualName);
					}
					else if($key == 'metadataOrganisationName') {
						foreach ($value as $orgValue) {
							$organisationName = $dom->createElement('gmd:organisationName');
							$CharacterString = $dom->createElement("gco:CharacterString", $orgValue);
							$organisationName->appendChild($CharacterString);
							$CI_ResponsibleParty->appendChild($organisationName);
						}
					}
					else if($key == 'role') {
						foreach ($value as $rolValue) {
							$role = $dom->createElement('gmd:' . $key);
							$CI_RoleCode = $dom->createElement('gmd:CI_RoleCode');
							$codeList = $dom->createAttribute('codeList');
							$codeList->appendChild($dom->createTextNode('http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode'));
							$CI_RoleCode->appendChild($codeList);
							$codeListValue = $dom->createAttribute('codeListValue');
							$codeListValue->appendChild($dom->createTextNode($rolValue));
							$CI_RoleCode->appendChild($codeListValue);
							$role->appendChild($CI_RoleCode);
							$CI_ResponsibleParty->appendChild($role);
						}
					}
					else if($key == 'contactInfo') {
						//$contInfo = new ContactInfo($dom, $CI_ResponsibleParty, $valeu); //contactInfo
						$contactInfo = $dom->createElement('gmd:contactInfo');
						$CI_Contact = $dom->createElement('gmd:CI_Contact');
						
						$phone = $dom->createElement('gmd:phone');
						$CI_Telephone = $dom->createElement('gmd:CI_Telephone');

						$voice = $dom->createElement('gmd:voice');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['voice']);
						$voice->appendChild($CharacterString);
						$CI_Telephone->appendChild($voice);

						$facsimile = $dom->createElement('gmd:facsimile');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['facsimile']);
						$facsimile->appendChild($CharacterString);
						$CI_Telephone->appendChild($facsimile);

						$phone->appendChild($CI_Telephone);
						$CI_Contact->appendChild($phone);
						/////////////////////////////////
						$add = $dom->createElement('gmd:address');
						$CI_Address = $dom->createElement('gmd:CI_Address');

						$address = $dom->createElement('gmd:address');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['address']);
						$address->appendChild($CharacterString);
						$CI_Address->appendChild($address);

						$city = $dom->createElement('gmd:city');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['city']);
						$city->appendChild($CharacterString);
						$CI_Address->appendChild($city);

						$administrativeArea = $dom->createElement('gmd:administrativeArea');
						$UF_TypeCode = $dom->createElement('gmd:UF_TypeCode');
						$codeList = $dom->createAttribute('codeList');
						$codeList->appendChild($dom->createTextNode('http://www.isotc211.org/2005/resources/codeList.xml#UF_TypeCode'));
						$UF_TypeCode->appendChild($codeList);
						$codeListValue = $dom->createAttribute('codeListValue');
						$codeListValue->appendChild($dom->createTextNode($value['administrativeArea']));
						$UF_TypeCode->appendChild($codeListValue);
						$administrativeArea->appendChild($UF_TypeCode);
						$CI_Address->appendChild($administrativeArea); 

						$postalCode = $dom->createElement('gmd:postalCode');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['postalCode']);
						$postalCode->appendChild($CharacterString);
						$CI_Address->appendChild($postalCode);

						$country = $dom->createElement('gmd:country');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['country']);
						$country->appendChild($CharacterString);
						$CI_Address->appendChild($country);

						$electronicMailAddress = $dom->createElement('gmd:electronicMailAddress');
						$CharacterString = $dom->createElement('gco:CharacterString', $value['electronicMailAddress']);
						$electronicMailAddress->appendChild($CharacterString);
						$CI_Address->appendChild($electronicMailAddress);

						
						$add->appendChild($CI_Address);
						$CI_Contact->appendChild($add);

						$contactInfo->appendChild($CI_Contact);
						$CI_ResponsibleParty->appendChild($contactInfo);
					}
				}
				$contact->appendChild($CI_ResponsibleParty);
				$MD_Metadata->appendChild($contact);
			}

			$metadataStandardName = $dom->createElement('gmd:metadataStandardName');
			$CharacterString = $dom->createElement('gco:CharacterString', $_POST['metadata']['metadataStandardName']);
			$xmlns = $dom->createAttribute('xmlns:srv');
			$xmlns->appendChild($dom->createTextNode("http://www.isotc211.org/2005/srv"));
			$CharacterString->appendChild($xmlns);
			$metadataStandardName->appendChild($CharacterString);
			$MD_Metadata->appendChild($metadataStandardName);

			$metadataStandardVersion = $dom->createElement('gmd:metadataStandardVersion');
			$CharacterString = $dom->createElement('gco:CharacterString', $_POST['metadata']['metadataStandardVersion']);
			$xmlns = $dom->createAttribute('xmlns:srv');
			$xmlns->appendChild($dom->createTextNode("http://www.isotc211.org/2005/srv"));
			$CharacterString->appendChild($xmlns);
			$metadataStandardVersion->appendChild($CharacterString);
			$MD_Metadata->appendChild($metadataStandardVersion);

			$dateStamp = $dom->createElement('gmd:dateStamp');
			/*$CharacterString = $dom->createElement('gco:CharacterString', $_POST['metadata']['dateStamp']);
			$xmlns = $dom->createAttribute('xmlns:srv');
			$xmlns->appendChild($dom->createTextNode("http://www.isotc211.org/2005/srv"));
			$CharacterString->appendChild($xmlns);
			$dateStamp->appendChild($CharacterString);*/
			$DateTime = $dom->createElement('gco:DateTime', $_POST['metadata']['dateStamp']);
			$dateStamp->appendChild($DateTime);
			$MD_Metadata->appendChild($dateStamp);
			


			$fileIdentifier = $dom->createElement('gmd:fileIdentifier');
			$CharacterString = $dom->createElement('gco:CharacterString', $_POST['metadata']['fileIdentifier']);
			$xmlns = $dom->createAttribute('xmlns:srv');
			$xmlns->appendChild($dom->createTextNode("http://www.isotc211.org/2005/srv"));
			$CharacterString->appendChild($xmlns);
			$fileIdentifier->appendChild($CharacterString);
			$MD_Metadata->appendChild($fileIdentifier);
		}
	}
?>