<?php 
	class IdentificationInfoHTML
	{
		private $identificationInfoHTML = "";

		public function __construct()
		{
			//page title
			$this->identificationInfoHTML .= '
			<div class="page-header"> 
     			<h1>' . $_POST['identificationInfo']['citation'][0]['title'] . '</h1> 
 			</div>';

 			//initial panel
 			$this->identificationInfoHTML .= '
 			<div class="panel panel-default">
			  	<div class="panel-heading"><center>Identificação</center></div>
			</div>';

			//citation
			foreach ($_POST['identificationInfo']['citation'] as $citation) {
				$this->identificationInfoHTML .= Table::beginTable('Citação');
				$this->identificationInfoHTML .= Table::rowTable('Título:', $citation['title']);
				//date
			    foreach ($citation['dateType'] as $dateType) {
			    	$this->identificationInfoHTML .= Table::rowTable('Data:', $dateType['date']);
			    	$this->identificationInfoHTML .= Table::rowTable('Tipo de Data:', $dateType['type']);
			    }
				$this->identificationInfoHTML .= Table::endTable();
			}

			$this->identificationInfoHTML .= Table::beginTable('');
			$this->identificationInfoHTML .= Table::rowTable('Resumo:', $_POST['identificationInfo']['abstract']);
			$this->identificationInfoHTML .= Table::rowTable('Status:', $_POST['identificationInfo']['status']);
			$this->identificationInfoHTML .= Table::endTable();
			
			//point of contact
			foreach ($_POST['identificationInfo']['pointOfContact'] as $pointOfContact) {
				$this->identificationInfoHTML .= Table::beginTable('Responsável pelo Recurso');
				$this->identificationInfoHTML .= Table::rowTable('Nome:', $pointOfContact['individualNamePoint']);
				foreach ($pointOfContact['metadataOrganisationNamePoint'] as $metadataOrganisationName) {
					$this->identificationInfoHTML .= Table::rowTable('Nome da Organização:', $metadataOrganisationName);
				}
				foreach ($pointOfContact['rolePoint'] as $role) {
					$this->identificationInfoHTML .= Table::rowTable('Função:', $role);
				}
				//pointOfContactInfo
				$pointOfContactInfo = $pointOfContact['pointOfContactInfo'];
				$this->identificationInfoHTML .= Table::rowTable('Telefone:', $pointOfContactInfo['voicePoint']);
				$this->identificationInfoHTML .= Table::rowTable('Fax:', $pointOfContactInfo['facsimilePoint']);
				$this->identificationInfoHTML .= Table::rowTable('Endereço:', $pointOfContactInfo['addressPoint']);
				$this->identificationInfoHTML .= Table::rowTable('Cidade:', $pointOfContactInfo['cityPoint']);
				$this->identificationInfoHTML .= Table::rowTable('Área Adminstrativa:', $pointOfContactInfo['administrativeAreaPoint']);
				$this->identificationInfoHTML .= Table::rowTable('CEP:', $pointOfContactInfo['postalCodePoint']);
				$this->identificationInfoHTML .= Table::rowTable('País:', $pointOfContactInfo['countryPoint']);
				$this->identificationInfoHTML .= Table::rowTable('E-mail:', $pointOfContactInfo['electronicMailAddressPoint']);
				$this->identificationInfoHTML .= Table::endTable();
			} 			
  			//descriptive keywords
			foreach ($_POST['identificationInfo']['descriptiveKeywords'] as $descriptiveKeywords) {
				$this->identificationInfoHTML .= Table::beginTable('Palavras-chave Descritivas');
			    foreach ($descriptiveKeywords['keyword'] as $keyword) {
			    	$this->identificationInfoHTML .= Table::rowTable('Palavra-chave:', $keyword);
			    }
			    $this->identificationInfoHTML .= Table::rowTable('Tipo de Palavra-chave:', $descriptiveKeywords['typeKeyword']);
				$this->identificationInfoHTML .= Table::endTable();
			}
			//graphic overview
			foreach ($_POST['identificationInfo']['graphicOverview'] as $graphicOverview) {
				$this->identificationInfoHTML .= Table::beginTable('Pré Visualização Gráfica');
			    $this->identificationInfoHTML .= Table::rowTable('Nome do Arquivo:', $graphicOverview['fileName']);
			    $this->identificationInfoHTML .= Table::rowTable('Descrição do Arquivo:', $graphicOverview['fileDescription']);
			    $this->identificationInfoHTML .= Table::rowTable('Tipo do Arquivo:', $graphicOverview['fileType']);
				$this->identificationInfoHTML .= Table::endTable();
			}
		}

		public function getIdentificationInfoHTML() {
			return $this->identificationInfoHTML;
		}
	}
?>