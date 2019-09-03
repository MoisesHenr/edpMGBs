<?php 
	class IdentificationInfoCDGHTML
	{
		private $identificationInfoCDGHTML = "";

		public function __construct()
		{
 			//initial panel
 			$this->identificationInfoCDGHTML .= '
 			<div class="panel panel-default">
			  	<div class="panel-heading"><center>Identificação do CDG</center></div>
			</div>';

			//spatialRepresentationType
			$this->identificationInfoCDGHTML .= Table::beginTable('');
			foreach ($_POST['identificationInfoCDG']['spatialRepresentationType'] as $spatialRepresentationType) {
				$this->identificationInfoCDGHTML .= Table::rowTable('Tipo de Representação Espacial:', $spatialRepresentationType);
			}
			$this->identificationInfoCDGHTML .= Table::endTable();
			//spatialResolution
			$this->identificationInfoCDGHTML .= Table::beginTable('Escala');
			foreach ($_POST['identificationInfoCDG']['spatialResolution'] as $spatialResolution) {
				$this->identificationInfoCDGHTML .= Table::rowTable('Escala Equivalente:', $spatialResolution);
			}
			$this->identificationInfoCDGHTML .= Table::endTable();
			//languageCdg
			$this->identificationInfoCDGHTML .= Table::beginTable('');
			foreach ($_POST['identificationInfoCDG']['languageCdg'] as $languageCdg) {
				$this->identificationInfoCDGHTML .= Table::rowTable('Idioma:', $languageCdg);
			}
			//$this->identificationInfoCDGHTML .= Table::endTable();
			//characterSet
			//$this->identificationInfoCDGHTML .= Table::beginTable('');
			$this->identificationInfoCDGHTML .= Table::rowTable('Norma de Codificação de Caracteres:', $languageCdg);
			//$this->identificationInfoCDGHTML .= Table::endTable();
			//topicCategory
			//$this->identificationInfoCDGHTML .= Table::beginTable('');
			foreach ($_POST['identificationInfoCDG']['topicCategory'] as $topicCategory) {
				$this->identificationInfoCDGHTML .= Table::rowTable('Categoria Temática:', $topicCategory);
			}
			$this->identificationInfoCDGHTML .= Table::endTable();
			//extent
			foreach ($_POST['identificationInfoCDG']['extent'] as $extent) {
				$this->identificationInfoCDGHTML .= Table::beginTable('Extensão');
				//geographicElement
				foreach ($extent['geographicElement'] as $geographicElement) {
					$this->identificationInfoCDGHTML .= Table::beginNestedTable('Extensão Geográfica');
					//polygon
					$this->identificationInfoCDGHTML .= Table::beginNestedTable('');
					foreach ($geographicElement['polygon'] as $polygon) {
						$this->identificationInfoCDGHTML .= Table::rowTable('Polígono Delimitador:', $polygon);
					}
					$this->identificationInfoCDGHTML .= Table::endNestedTable();
					//geographicBoundingBox
					foreach ($geographicElement['geographicBoundingBox'] as $geographicBoundingBox) {
						$this->identificationInfoCDGHTML .= Table::beginNestedTable('Retângulo Envolvente');
						$this->identificationInfoCDGHTML .= Table::rowTable('Longitude Limitrofe Oeste:', $geographicBoundingBox['westBoundLongitude']);
						$this->identificationInfoCDGHTML .= Table::rowTable('Longitude Limitrofe Leste:', $geographicBoundingBox['eastBoundLongitude']);
						$this->identificationInfoCDGHTML .= Table::rowTable('Latitude Limitrofe Sul:', $geographicBoundingBox['southBoundLatitude']);
						$this->identificationInfoCDGHTML .= Table::rowTable('Latitude Limitrofe Norte:', $geographicBoundingBox['northBoundLatitude']);
						$this->identificationInfoCDGHTML .= Table::endNestedTable();
					}
					//geographicIdentifier
					$this->identificationInfoCDGHTML .= Table::rowTable('Identificadores Geográficos:', $geographicElement['geographicIdentifier']);
					//endNestedTable
					$this->identificationInfoCDGHTML .= Table::endNestedTable();
				}
				//temporalExtent
				$this->identificationInfoCDGHTML .= Table::beginNestedTable('Extensão Temporal');
				$this->identificationInfoCDGHTML .= Table::rowTable('Data Inicial:', $extent['temporalElement']['temporalElementInitial']);
				$this->identificationInfoCDGHTML .= Table::rowTable('Data Final:', $extent['temporalElement']['temporalElementLast']);
				$this->identificationInfoCDGHTML .= Table::endNestedTable();
				//verticalExtent
				$this->identificationInfoCDGHTML .= Table::beginNestedTable('Extensão Altimétrica-batimétrica');
				$this->identificationInfoCDGHTML .= Table::rowTable('Valor Mínimo:', $extent['VerticalExtent']['minimumValue']);
				$this->identificationInfoCDGHTML .= Table::rowTable('Valor Máximo:', $extent['VerticalExtent']['maximumValue']);
				$this->identificationInfoCDGHTML .= Table::rowTable('Unidade de Medida:', $extent['VerticalExtent']['unitOfMeasure']);
				$this->identificationInfoCDGHTML .= Table::rowTable('Datum Altimétrico:', $extent['VerticalExtent']['verticalDatum']);
				$this->identificationInfoCDGHTML .= Table::endNestedTable();
				$this->identificationInfoCDGHTML .= Table::endTable();
			}
		}

		public function getIdentificationInfoCDGHTML() {
			return $this->identificationInfoCDGHTML;
		}
	}
?>