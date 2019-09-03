<?php 
	class DataQualityInfoHTML
	{
		private $dataQualityInfoHTML = "";

		public function __construct()
		{
 			//initial panel
 			$this->dataQualityInfoHTML .= '
 			<div class="panel panel-default">
			  	<div class="panel-heading"><center>Qualidade</center></div>
			</div>';

			//statement
			$this->dataQualityInfoHTML .= Table::beginTable('Linhagem');
			$this->dataQualityInfoHTML .= Table::rowTable('Declaração:', $_POST['dataQualityInfo']['statement']);
			$this->dataQualityInfoHTML .= Table::endTable();
			//source
			foreach ($_POST['dataQualityInfo']['source'] as $source) {
				$this->dataQualityInfoHTML .= Table::beginNestedTable('Fonte de Dados');
				$this->dataQualityInfoHTML .= Table::rowTable('Extensão da Fonte:', $source['sourceExtent']);
				$this->dataQualityInfoHTML .= Table::rowTable('Descrição:', $source['descriptionSource']);
				$this->dataQualityInfoHTML .= Table::rowTable('Denominador da Escala da Fonte:', $source['scaleDenominator']);
				$this->dataQualityInfoHTML .= Table::endNestedTable();
			}
			//processStep
			$this->dataQualityInfoHTML .= Table::beginNestedTable('Etapas do Processo');
			foreach ($_POST['dataQualityInfo']['processStep'] as $processStep) {
				$this->dataQualityInfoHTML .= Table::rowTable('Descrição:', $processStep);
			}
			$this->dataQualityInfoHTML .= Table::endNestedTable();
		}

		public function getDataQualityInfoHTML() {
			return $this->dataQualityInfoHTML;
		}
	}
?>