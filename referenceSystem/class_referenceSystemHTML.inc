<?php 
	class ReferenceSystemHTML
	{
		private $referenceSystemHTML = "";

		public function __construct()
		{
 			//initial panel
 			$this->referenceSystemHTML .= '
 			<div class="panel panel-default">
			  	<div class="panel-heading"><center>Sistema de Referência</center></div>
			</div>';

			$this->referenceSystemHTML .= Table::beginTable('Sistema de Coordenada de Referência');
			$md_crs = $_POST['referenceSystem']['md_crs'];
			//projection
			$this->referenceSystemHTML .= Table::rowTable('Projeção:', $md_crs['projection']);
			//ellipsoid
			$this->referenceSystemHTML .= Table::rowTable('Elipsóide:', $md_crs['ellipsoid']);
			//datum
			foreach ($md_crs['datum'] as $datum) {
				$this->referenceSystemHTML .= Table::rowTable('Datum:', $datum);
			}
			//ellipsoidParameters
			foreach ($md_crs['ellipsoidParameters'] as $ellipsoidParameters) {
				$this->referenceSystemHTML .= Table::beginNestedTable('Parâmetros do Elipsóide');
				$this->referenceSystemHTML .= Table::rowTable('Semi Eixo Maior:', $ellipsoidParameters['semiMajorAxis']);
				$this->referenceSystemHTML .= Table::rowTable('Unidade Semi Eixo Maior:', $ellipsoidParameters['axisUnits']);
				$this->referenceSystemHTML .= Table::rowTable('Achatamento:', $ellipsoidParameters['denominatorOfFlatteningRatio']);
				$this->referenceSystemHTML .= Table::endNestedTable();
			}
			foreach ($md_crs['projectionParameters'] as $projectionParameters) {
				$this->referenceSystemHTML .= Table::rowTable('Parâmetros de Projeção:', $projectionParameters);
			}
			$this->referenceSystemHTML .= Table::endTable();
			//referenceSystemIdentifier
			$this->referenceSystemHTML .= Table::beginTable('Identificador');
			$this->referenceSystemHTML .= Table::rowTable('Código:', $_POST['referenceSystem']['identifier']['code']);
			$this->referenceSystemHTML .= Table::rowTable('Identificador Espacial - Versão de Sistema de Referência:', $_POST['referenceSystem']['identifier']['version']);
			$this->referenceSystemHTML .= Table::rowTable('Identificador Espacial - Organização:', $_POST['referenceSystem']['identifier']['codeSpace']);
			$this->referenceSystemHTML .= Table::endTable();
		}

		public function getReferenceSystemHTML() {
			return $this->referenceSystemHTML;
		}
	}
?>