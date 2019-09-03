<?php 
	class ReferenceSystem
	{
		function __construct(&$dom, &$MD_Metadata)
		{
			$referenceSystemInfo = $dom->createElement('gmd:referenceSystemInfo');
			$MD_ReferenceSystem = $dom->createElement('gmd:MD_ReferenceSystem');

			///////MD_CRS///////
			$MD_CRS = $dom->createElement('gmd:MD_CRS');
			///////projection///////
			$projection = $dom->createElement('gmd:projection');
			$CharacterString = $dom->createElement('gco:CharacterString', $_POST['referenceSystem']['md_crs']['projection']);
			$projection->appendChild($CharacterString);
			$MD_CRS->appendChild($projection);
			///////fim projection///////
			///////ellipsoid///////
			$ellipsoid = $dom->createElement('gmd:ellipsoid');
			$CharacterString = $dom->createElement('gco:CharacterString', $_POST['referenceSystem']['md_crs']['ellipsoid']);
			$ellipsoid->appendChild($CharacterString);
			$MD_CRS->appendChild($ellipsoid);
			///////fim ellipsoid///////
			///////datum///////
			foreach ($_POST['referenceSystem']['md_crs']['datum'] as $datumValue) {
				$datum = $dom->createElement('gmd:datum');
				$CharacterString = $dom->createElement('gco:CharacterString', $datumValue);
				$datum->appendChild($CharacterString);
				$MD_CRS->appendChild($datum);
			}
			///////fim datum///////
			///////ellipsoidParameters///////
			foreach ($_POST['referenceSystem']['md_crs']['ellipsoidParameters'] as $ellipsoidParametersValue) {
				$ellipsoidParameters = $dom->createElement('gmd:ellipsoidParameters');
				$MD_EllipsoidParameters = $dom->createElement('gmd:MD_EllipsoidParameters');
				///////semiMajorAxis///////
				$semiMajorAxis = $dom->createElement('gmd:semiMajorAxis');
				$Real = $dom->createElement('gco:Real', $ellipsoidParametersValue['semiMajorAxis']);
				$semiMajorAxis->appendChild($Real);
				$MD_EllipsoidParameters->appendChild($semiMajorAxis);
				///////fim semiMajorAxis///////
				///////axisUnits///////
				$axisUnits = $dom->createElement('gmd:axisUnits');
				$CharacterString = $dom->createElement('gco:CharacterString', $ellipsoidParametersValue['axisUnits']);
				$axisUnits->appendChild($CharacterString);
				$MD_EllipsoidParameters->appendChild($axisUnits);
				///////fim axisUnits///////
				///////denominatorOfFlatteningRatio///////
				$denominatorOfFlatteningRatio = $dom->createElement('gmd:denominatorOfFlatteningRatio');
				$Real = $dom->createElement('gco:Real', $ellipsoidParametersValue['denominatorOfFlatteningRatio']);
				$denominatorOfFlatteningRatio->appendChild($Real);
				$MD_EllipsoidParameters->appendChild($denominatorOfFlatteningRatio);
				///////fim denominatorOfFlatteningRatio///////
				$ellipsoidParameters->appendChild($MD_EllipsoidParameters);
				$MD_CRS->appendChild($ellipsoidParameters);
			}
			///////fim ellipsoidParameters///////
			///////projectionParameters///////
			foreach ($_POST['referenceSystem']['md_crs']['projectionParameters'] as $projectionParametersValue) {
				$projectionParameters = $dom->createElement('gmd:projectionParameters');
				$CharacterString = $dom->createElement('gco:CharacterString', $projectionParametersValue);
				$projectionParameters->appendChild($CharacterString);
				$MD_CRS->appendChild($projectionParameters);
			}
			///////fim projectionParameters///////
			$MD_ReferenceSystem->appendChild($MD_CRS);
			///////fim MD_CRS///////

			/*///////referenceSystemIdentifier///////
			$referenceSystemIdentifier = $dom->createElement('gmd:referenceSystemIdentifier');
			$MD_Identifier = $dom->createElement('gmd:MD_Identifier');
			///////code///////
			$code = $dom->createElement('gmd:code');
			$CharacterString = $dom->createElement('gco:CharacterString', $_POST['referenceSystem']['identifier']['code']);
			$code->appendChild($CharacterString);
			$MD_Identifier->appendChild($code);
			///////fim code///////
			///////RS_Identifier///////
			$RS_Identifier = $dom->createElement('gmd:RS_Identifier');
			///////version///////
			$version = $dom->createElement('gmd:version');
			$CharacterString = $dom->createElement('gco:CharacterString', $_POST['referenceSystem']['identifier']['version']);
			$version->appendChild($CharacterString);
			$RS_Identifier->appendChild($version);
			///////fim version///////
			///////codeSpace///////
			$codeSpace = $dom->createElement('gmd:codeSpace');
			$CharacterString = $dom->createElement('gco:CharacterString', $_POST['referenceSystem']['identifier']['codeSpace']);
			$codeSpace->appendChild($CharacterString);
			$RS_Identifier->appendChild($codeSpace);
			///////fim codeSpace///////
			$MD_Identifier->appendChild($RS_Identifier);
			///////fim RS_Identifier///////
			$referenceSystemIdentifier->appendChild($MD_Identifier);
			$MD_ReferenceSystem->appendChild($referenceSystemIdentifier);
			///////fim referenceSystemIdentifier///////*/

			///////referenceSystemIdentifier///////
			$referenceSystemIdentifier = $dom->createElement('gmd:referenceSystemIdentifier');
			///////RS_Identifier///////
			$RS_Identifier = $dom->createElement('gmd:RS_Identifier');
			///////code///////
			$code = $dom->createElement('gmd:code');
			$CharacterString = $dom->createElement('gco:CharacterString', $_POST['referenceSystem']['identifier']['code']);
			$code->appendChild($CharacterString);
			$RS_Identifier->appendChild($code);
			///////fim code///////
			///////version///////
			$version = $dom->createElement('gmd:version');
			$CharacterString = $dom->createElement('gco:CharacterString', $_POST['referenceSystem']['identifier']['version']);
			$version->appendChild($CharacterString);
			$RS_Identifier->appendChild($version);
			///////fim version///////
			///////codeSpace///////
			$codeSpace = $dom->createElement('gmd:codeSpace');
			$CharacterString = $dom->createElement('gco:CharacterString', $_POST['referenceSystem']['identifier']['codeSpace']);
			$codeSpace->appendChild($CharacterString);
			$RS_Identifier->appendChild($codeSpace);
			///////fim codeSpace///////
			///////fim RS_Identifier///////
			$referenceSystemIdentifier->appendChild($RS_Identifier);
			$MD_ReferenceSystem->appendChild($referenceSystemIdentifier);
			///////fim referenceSystemIdentifier///////

			$referenceSystemInfo->appendChild($MD_ReferenceSystem);
			$MD_Metadata->appendChild($referenceSystemInfo);
		}
	}
?>