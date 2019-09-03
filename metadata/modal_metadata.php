<!--Language-->
<div class="modal fade" id="modalLanguage" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Idioma</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
						<td>1) Metametadados / Metametadata
						</br>2) Identificação do CDG/ Data Identification</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Idioma/ Language</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>1) Obrigatório
				    	<br>2) Condicional</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Idioma utilizado.
						</br>Aplica-se em dois contextos diferentes:
						</br>1) <b>Metametadados</b>. Idioma utilizado nos metadados. Documentação obrigatória. Corresponde ao idioma principal utilizado nos metadados.
						</br>Outros idiomas podem ser utilizados no mesmo documento de metadados.
						<br>2) <b>Identificação do Conjunto de Dados Geográficos (CDG)</b>. Idioma utilizado no CDG. Documentação condicional, dependendo da existência de texto no CDG.
						<br> A Cardinalidade é múltipla em ambos os casos. Os metadados podem estar em vários idiomas, por exemplo, português e inglês, assim como o texto de um CDG.
						<br> O idioma deve ser definido segundo os códigos existentes na lista ISO 639-2. 
						<br> O código para o português é "por". Para outros códigos ver em: http://pt.wikipedia.org/wiki/ISO_639_2
						</td>
				  	</tr>
				  	<tr>
				    	<th>Exemplos</th>
						<td>5.6.1) <b>idioma:</b> pt
						</br>5.6.2) <b>idioma:</b> pt
						</td>
				  	</tr>  
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Language-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Data Identification-->
<div class="modal fade" id="modalDataIdentification" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Norma de Codificação de Caracteres</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
						<td>1) Metametadados/ Metadata on Metadata
						</br>2) Identificação do CDG/ Data Identification</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Norma de Codificação de Caracteres/ Character Set</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>1) Obrigatório
						</br>2) Condicional</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Norma de codificação informática de caracteres.
						</br></br>Este elemento aplica-se em dois contextos diferentes:
						</br>1) <b>Metametadados</b>. Norma de codificação de caracteres utilizada para o documento de metadados. Documentação obrigatória. Recomenda-se a utilização do "UTF-8". Este conjunto de caracteres ou norma de codificação de caracteres, para além de incluir os caracteres especiais portugueses, é o conjunto de caracteres predefinido para os documentos XML.
						</br>2) <b>Identificação do Conjunto de Dados Geográficos (CDG)</b>. Norma de codificação de caracteres utilizada no CDG. A documentação é condicional, dependendo da existência de texto no CDG.
						</br></br>Este elemento só aceita termos da lista controlada ISO 19115 <b>“MD_CharacterSetCode”</b>, veja Anexo 5.2.
						</td>
				  	</tr>
				  	<tr>
				    	<th>Exemplos</th>
						<td>5.6.1) <b>norma de codificação:</b> utf8
						</br>5.6.2) <b>norma de codificação:</b> utf8
						</td>
				  	</tr>  
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Data Identification-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Metadata Contact-->
<div class="modal fade" id="modalMetadataContact" role="dialog">
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
<!--metadataStandardName-->
<div class="modal fade" id="modalMetadataStandardName" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Designação da Norma e Perfil de Metadados</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
  					<tr>
    					<th>Seção</th>
						<td>Metametadados/ Metadata on Metadata</td>
  					</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Designação da Norma e Perfil de Metadados/ metadata Standard Name</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Obrigatório</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Nome da norma de metadados utilizada (incluindo o nome do perfil, se aplicável)
						</td>
				  	</tr>
				  	<tr>
				    	<th>Exemplos</th>
						<td>5.6.1) <b>norma e perfil de metadados:</b> ISO 19115/ CONCAR
						</br>5.6.2) <b>norma e perfil de metadados:</b> ISO 19115/ CONCAR
						</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim metadataStandardName-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Metadata Standard Version-->
<div class="modal fade" id="modalMetadataStandardVersion" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Versão da Norma de Metadados</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
						<td>Metametadados/ Metadata on Metadata</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Versão da Norma de Metadados/ Metadata Standard Version</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Condicional</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Versão da norma de metadados (e do perfil de metadados, se aplicável)</td>
				  	</tr>
				  	<tr>
				    	<th>Exemplos</th>
						<td>5.6.1) <b>versão da norma de metadados:</b> 2003
						</br>5.6.2) <b>versão da norma de metadados:</b> 2003
						</td>
				  	</tr> 
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Metadata Standard Version-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Date Stamp-->
<div class="modal fade" id="modalDateStamp" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Data dos Metadados</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
						<td>Metametadados/ Metadata on Metadata</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Data dos Metadados/ Date Stamp</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Obrigatório</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Data de criação dos metadados ou da última atualização.
						</br>O formato da data é quatro dígitos para o ano, dois dígitos para o mês e
						</br>dois dígitos para o dia <b>(AAAA-MM-DD)</b>.
						</td>
				  	</tr>
				  	<tr>
				    	<th>Exemplos</th>
						<td>5.6.1) <b>data dos metadados:</b> 2004-12-10
						</br>5.6.2) <b>data dos metadados:</b> 2004-08-02
						</td>
				  	</tr>  
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Date Stamp-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--File Identifier-->
<div class="modal fade" id="modalFileIdentifier" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Identificador Metadados</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
						<td>Metametadados/ Metadata on Metadata</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Identificador Metadados/ File Identifier</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Obrigatório</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Identificador único do documento de metadados.
						</br>Utilização do UUID (Universally Unique Identifier). Este identificador universal é utilizado no desenvolvimento de aplicações informáticas, normalizado pela Open Software Foundation (OSF) como parte da Distributed Computing Environment (DCE). O objetivo dos UUID é permitir identificar informação de forma única em sistemas distribuídos, sem grande coordenação central. Este conceito aplica-se especialmente aos metadados produzidos pelas várias entidades produtoras de dados geoespaciais posteriormente utilizados em contextos mais globais.
						</br>A probabilidade de duas entidades diferentes utilizarem o mesmo identificador é muito pequena, podendo ser utilizados com confiança.
						</br>Para a geração de UUID, utilizar por exemplo http://www.famkruithof.net/uuid/uuidgen.(verificar se gera identificador para o Brasil)
						</br>Este identificador serve para referenciar o documento de metadados univocamente, permitindo vários documentos de metadados relacionarem-se entre si.
						</td>
				  	</tr>
				  	<tr>
				    	<th>Exemplos</th>
						<td>5.6.1) <b>identificação dos metadados</b>
						</br>5.6.2) <b>identificação dos metadados</b>
						</td>
				  	</tr>  
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim File Identifier-->