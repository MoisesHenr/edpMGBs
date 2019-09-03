<?php
class Extent 
{
	function __construct(&$dom, &$MD_Identification)
	{
		$extent = $dom->createElement('gmd:extent');

		$extentArray = $_POST['identificationInfoCDG']['extent'];
		foreach ($extentArray as $extentElem) {
			$EX_Extent = $dom->createElement('gmd:EX_Extent');

			///////geographicElement///////
			$geographicElementArray = $extentElem['geographicElement'];
			foreach ($geographicElementArray as $geographicElem) {
				$geographicElement = $dom->createElement('gmd:geographicElement');

				///////polygon///////
				$polygonArray = $geographicElem['polygon'];
				foreach ($polygonArray as $polygonElem) {
					$EX_BoundingPolygon = $dom->createElement('gmd:EX_BoundingPolygon');
					$polygon = $dom->createElement('gmd:polygon');
					$CharacterString = $dom->createElement('gco:CharacterString', $polygonElem);
					$polygon->appendChild($CharacterString);
					$EX_BoundingPolygon->appendChild($polygon);
					$geographicElement->appendChild($EX_BoundingPolygon);
				}
				///////polygon///////
				///////GeographicBoundingBox///////
				$geographicBoundingBoxArray = $geographicElem['geographicBoundingBox'];
				foreach ($geographicBoundingBoxArray as $geographicBoundingBoxElem) {
					$EX_GeographicBoundingBox = $dom->createElement('gmd:EX_GeographicBoundingBox');

					$westBoundLongitude = $dom->createElement('gmd:westBoundLongitude');
					$Decimal = $dom->createElement('gco:Decimal', $geographicBoundingBoxElem['westBoundLongitude']);
					$westBoundLongitude->appendChild($Decimal);
					$EX_GeographicBoundingBox->appendChild($westBoundLongitude);

					$eastBoundLongitude = $dom->createElement('gmd:eastBoundLongitude');
					$Decimal = $dom->createElement('gco:Decimal', $geographicBoundingBoxElem['eastBoundLongitude']);
					$eastBoundLongitude->appendChild($Decimal);
					$EX_GeographicBoundingBox->appendChild($eastBoundLongitude);

					$southBoundLatitude = $dom->createElement('gmd:southBoundLatitude');
					$Decimal = $dom->createElement('gco:Decimal', $geographicBoundingBoxElem['southBoundLatitude']);
					$southBoundLatitude->appendChild($Decimal);
					$EX_GeographicBoundingBox->appendChild($southBoundLatitude);

					$northBoundLatitude = $dom->createElement('gmd:northBoundLatitude');
					$Decimal = $dom->createElement('gco:Decimal', $geographicBoundingBoxElem['northBoundLatitude']);
					$northBoundLatitude->appendChild($Decimal);
					$EX_GeographicBoundingBox->appendChild($northBoundLatitude);

					$geographicElement->appendChild($EX_GeographicBoundingBox);
				}
				///////GeographicBoundingBox///////
				///////GeographicDescription///////
				$EX_GeographicDescription = $dom->createElement('gmd:EX_GeographicDescription');
				$geographicIdentifier = $dom->createElement('gmd:geographicIdentifier');
				$CharacterString = $dom->createElement('gco:CharacterString', $geographicElem['geographicIdentifier']);
				$geographicIdentifier->appendChild($CharacterString);
				$EX_GeographicDescription->appendChild($geographicIdentifier);
				$geographicElement->appendChild($EX_GeographicDescription);
				///////GeographicDescription///////

				$EX_Extent->appendChild($geographicElement);
			}
			///////geographicElement///////

			///////temporalElement///////
			$temporalElement = $dom->createElement('gmd:temporalElement');
			$EX_TemporalExtent = $dom->createElement('gmd:EX_TemporalExtent');
			$extentTemporal = $dom->createElement('gmd:extent');

			$temporalElementInitial = $extentElem['temporalElement']['temporalElementInitial'];
			$temporalElementLast = $extentElem['temporalElement']['temporalElementLast'];
			$space = '';
			if ($temporalElementInitial != '') {
				$space = ' ';
			}

			/*$CharacterString = $dom->createElement('gco:CharacterString', $temporalElementInitial . ' ' . $temporalElementLast);
			$extentTemporal->appendChild($CharacterString);*/

			//timePeriod
			/*$TimePeriod = $dom->createElement('gml:TimePeriod');
			$beginPosition = $dom->createElement('gml:beginPosition', $temporalElementInitial);
			$TimePeriod->appendChild($beginPosition);
			$endPosition = $dom->createElement('gml:endPosition', $temporalElementLast);
			$TimePeriod->appendChild($endPosition);
			$extentTemporal->appendChild($TimePeriod);*/
			$TimeInstant = $dom->createElement('gml:TimeInstant');
			$timePosition = $dom->createElement('gml:timePosition', $temporalElementInitial . $space . $temporalElementLast);
			$TimeInstant->appendChild($timePosition);
			$extentTemporal->appendChild($TimeInstant);
			//fim timePeriod

			$EX_TemporalExtent->appendChild($extentTemporal);
			$temporalElement->appendChild($EX_TemporalExtent);
			$EX_Extent->appendChild($temporalElement);
			///////temporalElement///////

			///////verticalExtent///////
			$EX_VerticalExtent = $dom->createElement('gmd:EX_VerticalExtent');

			$minimumValue = $dom->createElement('gmd:minimumValue');
			$Real = $dom->createElement('gco:Real', $extentElem['VerticalExtent']['minimumValue']);
			$minimumValue->appendChild($Real);
			$EX_VerticalExtent->appendChild($minimumValue);

			$maximumValue = $dom->createElement('gmd:maximumValue');
			$Real = $dom->createElement('gco:Real', $extentElem['VerticalExtent']['maximumValue']);
			$maximumValue->appendChild($Real);
			$EX_VerticalExtent->appendChild($maximumValue);

			$unitOfMeasure = $dom->createElement('gmd:unitOfMeasure');
			$CharacterString = $dom->createElement('gco:CharacterString', $extentElem['VerticalExtent']['unitOfMeasure']);
			$unitOfMeasure->appendChild($CharacterString);
			$EX_VerticalExtent->appendChild($unitOfMeasure);

			$verticalDatum = $dom->createElement('gmd:verticalDatum');
			$CharacterString = $dom->createElement('gco:CharacterString', $extentElem['VerticalExtent']['verticalDatum']);
			$verticalDatum->appendChild($CharacterString);
			$EX_VerticalExtent->appendChild($verticalDatum);

			$EX_Extent->appendChild($EX_VerticalExtent);
			///////verticalExtent///////

			$extent->appendChild($EX_Extent);
		}

		$MD_Identification->appendChild($extent);
	}
}
?>