<?php 
	class MetadataHTML
	{
		private $metadataHTML = "";

		public function __construct()
		{
 			//initial panel
 			$this->metadataHTML .= '
 			<div class="panel panel-default">
			  	<div class="panel-heading"><center>Metametadados</center></div>
			</div>';

			//language
			$this->metadataHTML .= Table::beginTable('');
			foreach ($_POST['metadata']['language'] as $language) {
				$this->metadataHTML .= Table::rowTable('Idioma:', $language);
			}
			//characterSetCode
			foreach ($_POST['metadata']['characterSetCode'] as $characterSetCode) {
				$this->metadataHTML .= Table::rowTable('Norma de Codificação de Caracteres:', $characterSetCode);
			}
			$this->metadataHTML .= Table::endTable();
			//point of contact
			foreach ($_POST['metadata']['contact'] as $contact) {
				$this->metadataHTML .= Table::beginTable('Responsável pelo Metadado');
				$this->metadataHTML .= Table::rowTable('Nome:', $contact['individualName']);
				foreach ($contact['metadataOrganisationName'] as $metadataOrganisationName) {
					$this->metadataHTML .= Table::rowTable('Nome da Organização:', $metadataOrganisationName);
				}
				foreach ($contact['role'] as $role) {
					$this->metadataHTML .= Table::rowTable('Função:', $role);
				}
				//contactInfo
				$contactInfo = $contact['contactInfo'];
				$this->metadataHTML .= Table::rowTable('Telefone:', $contactInfo['voice']);
				$this->metadataHTML .= Table::rowTable('Fax:', $contactInfo['facsimile']);
				$this->metadataHTML .= Table::rowTable('Endereço:', $contactInfo['address']);
				$this->metadataHTML .= Table::rowTable('Cidade:', $contactInfo['city']);
				$this->metadataHTML .= Table::rowTable('Área Adminstrativa:', $contactInfo['administrativeArea']);
				$this->metadataHTML .= Table::rowTable('CEP:', $contactInfo['postalCode']);
				$this->metadataHTML .= Table::rowTable('País:', $contactInfo['country']);
				$this->metadataHTML .= Table::rowTable('E-mail:', $contactInfo['electronicMailAddress']);
				$this->metadataHTML .= Table::endTable();
			}
			$this->metadataHTML .= Table::beginTable('');
			//metadataStandardName
			$this->metadataHTML .= Table::rowTable('Designação da Norma e Perfil de Metadados:', $_POST['metadata']['metadataStandardName']);
			//metadataStandardVersion
			$this->metadataHTML .= Table::rowTable('Versão da Norma dos Metadados:', $_POST['metadata']['metadataStandardVersion']);
			//dateStamp
			$this->metadataHTML .= Table::rowTable('Data dos Metadados:', $_POST['metadata']['dateStamp']);
			//fileIdentifier
			$this->metadataHTML .= Table::rowTable('Identificador dos Metadados:', $_POST['metadata']['fileIdentifier']);
			$this->metadataHTML .= Table::endTable();
		}

		public function getMetadataHTML() {
			return $this->metadataHTML;
		}
	}
?>