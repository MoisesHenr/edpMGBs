<!--title-->
<div class="modal fade" id="modalTitle" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Título</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
						<th>Seção</th>
						<td>Citação/ Citation</td>
					</tr>
					<tr>
						<th>Nome</th>
						<td>Título/ Title</td>
					</tr>
					<tr>
						<th>Obrigatoriedade</th>
						<td>Obrigatório</td>
					</tr>
					<tr>
						<th>Definição/Comentários</th>
						<td>
							Designação pela qual são conhecidos os CDG O título deve permitir identificar o CDG com o maior rigor possível,
							indicando, se possível, a série a que pertence, o tema, área geográfica,
							índice de nomenclatura da folha, escala, etc. Se o CDG contempla um produto do SCN, recomenda-se que o título
							contenha: escala, nome da folha e índice de nomenclatura.
							A ocorrência deste elemento é única.
						</td>
					</tr>
						<th>Exemplos</th>
						<td>
							5.6.1) Carta Topográfica 1:25.000 SD24-X-A-VI-1-NO</br>
							5.6.2) Atlas Geográfico Escolar
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim title-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--dateTipe-->
<div class="modal fade" id="modalDateTipe" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Data</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
					    <th>Seção</th>
					    <td>Citação/ Citation</td>
				  	</tr>
				  	<tr>
					    <th>Nome</th>
					    <td>Data/ Date</td>
				  	</tr>
				  	<tr>
					    <th>Obrigatoriedade</th>
					    <td>Obrigatório</td>
				  	</tr>
				  	<tr>
					    <th>Elementos</th>
					    <td>Data</br> Tipo de Data</td>
				  	</tr>
				  	<tr>
					    <th>Definição/Comentários</th>
					    <td>
						    Data dos CDG citados.</br> O formato para a data é quatro dígitos para o ano, dois dígitos para o mês e dois dígitos para o dia <b>(AAAA-MM-DD)</b>. Caso não se identifique o dia ou mês, indicar segundo normas ISO-8601 e ISO-19103. A data está sempre associada a um tipo de data: o elemento "Tipo de Data". Este elemento só pode ter os tipos definidos na lista controlada ISO: "<b>CI_DateTypeCode</b>", veja Anexo 5.2 . No caso da data de criação de um recurso, a data deve sempre refletir a realidade temporal dos dados adquiridos. Por exemplo:</br> Para cartas topográficas do SCN oriundas de:</br></br> - modelos fotogramétricos : data de restituição.</br> - cartas compiladas: data de compilação.</br> - cartas-imagem e ortoimagens: data da geração do produto.</br></br> As datas dos insumos dos processos fotogramétricos, de imageamento e de compilação serão informadas no elemento linhagem. Um recurso pode ter várias datas associadas, porque podem ser efetuadas várias atualizações e publicações de um mesmo recurso.
						</td>
				  	</tr>
				  	<tr>
					   	<th>Exemplos</th>
					   	<td>
						   	5.6.1) 1996-12-01, criação; 1998-01-01, publicação</br> 5.6.2) 2002-08-12, criação, 2003-12-01, publicação
					   	</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim dateTipe-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--resume-->
<div class="modal fade" id="modalResume" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Resumo</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
				    	<td>Identificação/ Identification</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Resumo/ Abstract</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Obrigatório</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
				    	<td>Breve resumo sobre o conteúdo do CDG.
						</br>O resumo deve sintetizar os aspectos fundamentais do recurso em
						termos de conteúdo, extensão geográfica, data, escala, nome da série,
						produtor ou entidade responsável, fontes utilizadas, etc.
						</br>Recomenda-se que o resumo situe o CDG dentro do contexto do projeto
						que o abrange (global, nacional, regional).
						</br>Deve-se evitar detalhamentos sobre os insumos. Esse procedimento
						deverá ser feito na entidade Linhagem da seção Qualidade.
						</td>
				  	</tr>
				  	<tr>
				   		<th>Exemplos</th>
					   	<td>5.6.1) A série de carta topográfica na escala 1: 25 000 representa parte do território nacional, de forma articulada, por folhas (segundo a convenção internacional da Carta CIM), e que abrange um quadrilátero geográfico de 7,5' de latitude por 7,5' de longitude. O IBGE desenvolve a produção dessa série, em conjunto com a DSG - Diretoria de Serviço Geográfico do Comando do Exército.
						</br>Esta base vetorial está estruturada em categorias de informação:
						</br>Hidrografia, Hipsografia, Localidades, Limites, Sistemas de Transporte, Pontos de Referência, Vegetação e Obras e Edificações, segundo modelagem da Mapoteca Topográfica Digital do IBGE.
						</br></br>5.6.2) O Atlas Geográfico Escolar é um conjunto de dados sobre diversos temas, sistematicamente organizados e servindo de referência para a construção de informações de acordo com a necessidade do usuário. O Atlas escolar funciona como o apoio para pesquisas na área
						</br>de educação. A 3ª edição impressa tem a seguinte estruturação:
						</br>Introdução à Cartografia;
						</br>O Mundo:
						</br>- Divisões Políticas e Regionais;
						</br>- Continentes e Regiões do Mundo;
						</br>A Terra:
						</br>- Dinâmica da Litosfera;
						</br>- Dinâmica dos Climas;
						</br>- A Terra e o Uso de Seus Recursos;
						</br>- Estrutura e Dinâmica da População;
						</br>- Indicadores Sociais;
						</br>- Espaço Econômico;
						</br>- Espaço das Redes.
						</br>Brasil:
						</br>- Federação e Território;
						</br>- Diversidade Ambiental;
						</br>- Características Demográficas;
						</br>- Diversidade Cultural;
						</br>- Desigualdade Socioeconômica;
						</br>- Espaço Econômico;
						</br>- Espaço das Redes;
						</br>- Urbanização e Gestão Ambiental;
						</br>- Regionalização;
						</br>- Grandes Regiões Geográficas
						</br>Bandeira dos Países e Bandeira dos Estados do Brasil
						</br>Cada um dos capítulos se decompõe em subtópicos conforme o assunto
						</br>abordado, que compreende mapas e gráficos que representam as
						</br>principais características e variáveis dos assuntos enfocados.
					   	</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim resume-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--status-->
<div class="modal fade" id="modalStatus" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Status</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
				    	<td>Identificação/ Identification</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Status/ Status</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Obrigatório</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
				    	<td>Lista controlada ISO 19115: "<b>MD_ProgressCode</b>", veja Anexo 5.2 .</td>
				  	</tr>
				  	<tr>
				   		<th>Exemplos</th>
				   		<td>5.6.1) concluido</br>5.6.2) concluido</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim status-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--responsible-->
<!--<div class="modal fade" id="modalResponsible" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Responsável pelo Recurso</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
				    	<td>1) Identificação/ Identification</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>1) Ponto de Contato / Point of Contact</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Obrigatório</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
						<td>Nome da Organização	</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
				    	<td>Identificação e forma de contato com a(s) pessoa(s) ou organização(ões) responsável(is) pelo CDG e metadados. Estes elementos são documentados em vários contextos diferentes. Em qualquer contexto é sempre obrigatório o preenchimento do "Nome da Organização".
						</br>De uma forma geral é sempre obrigatório documentar pelo menos a identificação e/ou contato de um responsável ou ponto de contato. O responsável ou autor dos metadados não é documentado no contexto da identificação do recurso como os anteriores, mas sim no contexto dos metametadados.
						</td>
				  	</tr>
				  	<tr>
				   		<th>Exemplos</th>
				   		<td>5.6.1) Fundação Instituto Brasileiro de Geografia e Estatística – IBGE/
						</br>Diretoria de Geociências – DGC/ Coordenação de Cartografia – CCAR;
						</br>Fundação Instituto Brasileiro de Geografia e Estatística – IBGE/ Centro
						</br>de Documentação e Disseminação de Informações – CDDI.
						</br></br>5.6.2) Fundação Instituto Brasileiro de Geografia e Estatística – IBGE/
						</br>Diretoria de Geociências – DGC/ Coordenação de Geodésia – CGED
						</br>Coordenação de Cartografia – CCAR,/ Coordenação de Geografia –
						</br>CGEO / Coordenação de Estruturas Territoriais – CETE / Coordenação
						</br>de Recursos Naturais e Estudos Ambientais – CREN e Centro de
						</br>Documentação e Disseminação de Informações – CDDI;
						</br>Fundação Instituto Brasileiro de Geografia e Estatística – IBGE/ Centro
						</br>de Documentação e Disseminação de Informações – CDDI.
				   		</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>-->
<!--fim responsible-->

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Metadata Contact
<div class="modal fade" id="modalPointOfContact" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Responsável</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
						<td>1) Identificação/ Identification </td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>1) Contato do Responsável pelos Metadados / Point of Contact 
						</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Obrigatório</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
						<td>Nome da Organização</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Identificação e forma de contato com a(s) pessoa(s) ou organização(ões) responsáveis pelo recurso e metadados.
						</br>Estes elementos são documentados em vários contextos diferentes. Em qualquer contexto é sempre obrigatório o preenchimento do <b>"Nome da Organização"</b>, relativamente ao recurso que está sendo documentado. Se existir uma pessoa responsável pelo recurso ou um ponto de contato para informações sobre o recurso, essa pessoa deve ser designada em "Nome". Todos os elementos existentes para efetuar o contato devem ser documentados pelos elementos apropriados:
						</br>"Telefone", "Correio Eletrônico".
						</br>Este elementos são utilizados em diversos contextos, sendo obrigatório a documentação da identificação e/ou contato do <b>"produtor"</b> e <b>"distribuidor"</b>. De uma forma geral é sempre obrigatório documentar pelo menos a identificação e/ou contato de um responsável ou ponto de contato. Também é obrigatória a indicação do responsável ou autor dos metadados, sendo neste caso atribuída a função <b>"autor"</b>. O responsável ou autor dos metadados não é documentado no contexto da identificação do recurso como os anteriores, mas sim no contexto dos metametadados.
						</td>
				  	</tr>
				  	<tr>
				    	<th>Exemplos</th>
						<td>5.6.1) <b>Nome:</b> Instituto Brasileiro de Geografia e Estatística – IBGE,
						</br>Diretoria de Geociências – DGC, Coordenação de Cartografia – CCAR
						</br><b>Telefone:</b> (21) 2142-4988
						</br><b>e-mail:</b> anna.freitas@ibge.gov.br
						</br></br>5.6.2) <b>Nome:</b> Instituto Brasileiro de Geografia e Estatística – IBGE, Diretoria de Geociências – DGC, Centro de Documentação e Disseminação - CDDI
						</br><b>Telefone:</b> (21) 2142-4988
						</br><b>e-mail:</b> atendimento@ibge.gov.br
						</td>
				  	</tr>	
				</table>
			</div>
		</div>
	</div>
</div>
fim Metadata Contact-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Metadata Contact-->
<div class="modal fade" id="modalPointOfContact" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Responsável</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
						<td>1) Identificação/ Identification 
						<br>2) Metametadados/ Metametadata</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>1) Ponto de Contato / Point of Contact 
						<br>2) Contato do Responsável pelos Metadados / Metadata Contact</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Obrigatório</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
						<td>Nome da Organização
						</br>Função</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Identificação e forma de contato com a(s) pessoa(s) ou organização(ões) responsáveis pelo recurso e metadados.
						</br>Estes elementos são documentados em vários contextos diferentes. Em qualquer contexto é sempre obrigatório o preenchimento do <b>"Nome da Organização"</b> e <b>"Função"</b> desempenhada pela organização ou entidade referida, relativamente ao recurso que está sendo documentado. Se existir uma pessoa responsável pelo recurso ou um ponto de contato para informações sobre o recurso, essa pessoa deve ser designada em "Nome". Todos os elementos existentes para efetuar o contato devem ser documentados pelos elementos apropriados:
						</br>"Telefone", "Fax", "Morada", "Correio Eletrônico", etc.
						</br>O objetivo da utilização do elemento "Função" é, principalmente, distinguir os vários responsáveis ou contatos que possam existir no documento de metadados, atribuindo um papel ou função predeterminados a cada contato. Os papéis ou funções possíveis são os da lista controlada ISO 19115 <b>"CI_RoleCode"</b> , veja Anexo 5.2 .
						</br>Este elementos são utilizados em diversos contextos, sendo obrigatório a documentação da identificação e/ou contato do <b>"produtor"</b> e <b>"distribuidor"</b>. De uma forma geral é sempre obrigatório documentar pelo menos a identificação e/ou contato de um responsável ou ponto de contato. Também é obrigatória a indicação do responsável ou autor dos metadados, sendo neste caso atribuída a função <b>"autor"</b>. O responsável ou autor dos metadados não é documentado no contexto da identificação do recurso como os anteriores, mas sim no contexto dos metametadados.
						</td>
				  	</tr>
				  	<tr>
				    	<th>Exemplos</th>
						<td>5.6.1) <b>Nome:</b> Instituto Brasileiro de Geografia e Estatística – IBGE,
						</br>Diretoria de Geociências – DGC, Coordenação de Cartografia – CCAR
						</br><b>Função: produtor</b>
						</br><b>Telefone:</b> (21) 2142-4988
						</br><b>fax:</b> (21) 2142-4973
						</br><b>endereço:</b> Av. Brasil 15671 – Parada de Lucas
						</br><b>cidade:</b> Rio de Janeiro
						</br><b>UF:</b> Rio de Janeiro
						</br><b>CEP:</b> 21241-051
						</br><b>País:</b> br
						</br><b>e-mail:</b> anna.freitas@ibge.gov.br
						</br></br>5.6.2) <b>Nome:</b> Instituto Brasileiro de Geografia e Estatística – IBGE, Diretoria de Geociências – DGC, Centro de Documentação e Disseminação - CDDI
						</br><b>Função: produtor</b>
						</br><b>Telefone:</b> (21) 2142-4988
						</br><b>fax:</b> (21) 2142-4973
						</br><b>endereço:</b> Av. Brasil 15671 – Parada de Lucas
						</br><b>cidade:</b> Rio de Janeiro
						</br><b>UF:</b> Rio de Janeiro
						</br><b>CEP:</b> 21241-051
						</br><b>País:</b> br
						</br><b>e-mail:</b> atendimento@ibge.gov.br
						</td>
				  	</tr>	
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Metadata Contact-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--descriptiveKeywords-->
<div class="modal fade" id="modalDescriptiveKeywords" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Palavras-chave Descritivas</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
						<td>Identificação/ Identification</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Palavras-chave Descritivas/ Descriptive Keywords</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Opcional</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
						<td>Palavras-chave
						<br>Tipo de Palavra-chave</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Fornece palavras-chave de classificação, bem como o seu tipo.
						</br>O elemento <b>"Palavras-chave"</b> é a designação utilizada para descrever um determinado aspecto do recurso. A referida designação poderá ser uma palavra de uso comum ou designação formal pertencente a um dado léxico ou thesaurus.
						<br>
						<br>O elemento <b>"Tipo de Palavra-chave"</b> é o assunto utilizado para agrupar as palavras-chave. O domínio deste elemento é o da lista controlada ISO <b>"MD_ KeywordTypeCode"</b> descrita no Anexo 5.2 .
						<br>Considerando que as palavras-chave são elementos importantes na consulta de metadados e que a norma ISO 19115 define este elemento como Opcional, recomenda-se que para os produtos do SCN, as palavras-chaves do tipo disciplinar, toponímica e temática sejam preenchidas.</td>
				  	</tr>
				  	<tr>
				    	<th>Exemplos</th>
						<td>5.6.1) disciplinar: cartografia; 
						<br>temática: carta topográfica 1: 25000; 
						<br>temática: carta topográfica vetorial; 
						<br>temática: carta vetorial Praia do Forte; 
						<br>toponímica: Praia do Forte/BA; 
						<br>
						<br>5.6.2) disciplinar: geociências; 
						<br>temática: Atlas Geográfico Escolar; 
						<br>temática: Atlas Escolar;</td>
				  	</tr>	
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim descriptiveKeywords-->