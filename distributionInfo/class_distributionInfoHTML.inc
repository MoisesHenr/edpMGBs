<?php 
	class DistributionInfoHTML
	{
		private $distributionInfoHTML = "";

		public function __construct()
		{
 			//initial panel
 			$this->distributionInfoHTML .= '
 			<div class="panel panel-default">
			  	<div class="panel-heading"><center>Distribuição</center></div>
			</div>';

			foreach ($_POST['distributionInfo']['distribution'] as $distribution) {
				$this->distributionInfoHTML .= Table::beginTable('Formato de Distribuição');
				//nameFormat
				$this->distributionInfoHTML .= Table::beginNestedTable('');
				foreach ($distribution['nameFormat'] as $nameFormat) {
					$this->distributionInfoHTML .= Table::rowTable('Nome do Formato:', $nameFormat);
				}
				//versionFormat
				foreach ($distribution['versionFormat'] as $versionFormat) {
					$this->distributionInfoHTML .= Table::rowTable('Versão do Formato:', $versionFormat);
				}
				$this->distributionInfoHTML .= Table::endNestedTable();
				$this->distributionInfoHTML .= Table::endTable();
			}
			foreach ($_POST['distributionInfo']['transferOptions'] as $transferOptions) {
				$this->distributionInfoHTML .= Table::beginTable('Opções de Transferência Digital - Acesso Online');
				$this->distributionInfoHTML .= Table::rowTable('Endereço URL:', $transferOptions['linkage']);
				$this->distributionInfoHTML .= Table::rowTable('Protocolo:', $transferOptions['protocol']);
				$this->distributionInfoHTML .= Table::endTable();
			}
		}

		public function getDistributionInfoHTML() {
			return $this->distributionInfoHTML;
		}
	}
?>