<!--Data Identification-->
<div class="modal fade" id="modalDataIdentification" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tipo de Representação Espacial</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
				    	<th>Seção</th>
				    	<td>Identificação do CDG/ Data Identification</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Tipo de Representação Espacial/ Spatial Representation Type</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Condicional (obrigatório no caso do recurso ser um CDG ou Série)</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
				    	<td>Forma de representação da informação geográfica.
						</br></br>Este elemento pode tomar os termos da lista controlada ISO 19115
						<b>"MD_SpatialRepresentationTypeCode"</b>, veja Anexo 5.2 .
						</br>Este elemento suporta múltiplas ocorrências. Por exemplo, no caso de
						um tema SIG, existe informação vetorial (o mapa) e informação tabular (atributos associados aos vetores). Também certos casos de cartografia, como a ortofotocartografia combinam imagem e informação vetorial como a altimetria.
						</br></br><b>NOTA :</b> a CONCAR deverá definir os tipos de representação espacial nos quais estarão englobados os conjuntos de dados geoespaciais a serem catalogados pela norma ISO, criando assim uma lista controlada brasileira <b>"MD_SpatialRepresentationTypeCode"</b> para este elemento.
						</td>
				  	</tr>
				  	<tr>
				   		<th>Exemplos</th>
				   		<td>5.6.1) <b>tipo de representação espacial:</b> vetorial
						</br>5.6.2) <b>tipo de representação espacial:</b> textotabular
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
<!--Resolution-->
<div class="modal fade" id="modalResolutionIdentificationCDG" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Escala</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
				    	<th>Seção</th>
				    	<td>Identificação do CDG/ Data Identification</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Escala/ Resolution</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Condicional (obrigatório no caso do recurso ser um CDG ou Série do
						</br>SCN; opcional nos outros casos)</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
						<td>Escala Equivalente ou Distância no Terreno</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
				    	<td>Nível de detalhe de um CDG, expresso como um fator de escala ou como uma distância no terreno.
						</br>Para os dados vetoriais utiliza-se normalmente a escala (denominador), enquanto para os dados matriciais utiliza-se a distância no terreno, expressa em metros. No caso de casas decimais, utilizar o ponto como separador.
						</br>Apenas um destes dois elementos, <b>"Escala Equivalente"</b> e <b>"Distância no Terreno"</b>, deve ser documentado. Optou-se por utilizar “Escala Equivalente”.
						</br>No contexto da Qualidade, especificamente na identificação das fontes que deram origem ao CDG, a escala da fonte pode ser discriminada.
						</td>
				  	</tr>
				  	<tr>
				   		<th>Exemplos</th>
				   		<td>5.6.1) 25000</br>5.6.2) variadas
				   		</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Resolution-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Language-->
<div class="modal fade" id="modalLanguageCdg" role="dialog">
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
<!--Character Set-->
<div class="modal fade" id="modalCharacterSet" role="dialog">
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
						</br>Este elemento aplica-se em dois contextos diferentes:
						</br>1) <b>Metametadados.</b> Norma de codificação de caracteres utilizada para o documento de metadados. Documentação obrigatória. Recomenda-se a utilização do "UTF-8". Este conjunto de caracteres ou norma de codificação de caracteres, além de incluir os caracteres especiais portugueses, é o conjunto de caracteres predefinido para os documentos XML.
						</br>2) <b>Identificação do Conjunto de Dados Geográficos (CDG)</b>. Norma de codificação de caracteres utilizada no CDG. A documentação é condicional, dependendo da existência de texto no CDG. Este elemento só aceita termos da lista controlada ISO 19115 <b>“MD_CharacterSetCode”</b>, veja anexo 5.2 .
						</td>
					</tr>
					<tr>
					   	<th>Exemplos</th>
					   	<td>5.6.1) <b>utf8</b>
						</br>5.6.2) <b>utf8</b>
					   	</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Character Set-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Topic Category-->
<div class="modal fade" id="modalTopicCategory" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Categoria Temática</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
				    	<th>Seção</th>
				    	<td>Identificação do CDG/ Data Identification</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Categoria Temática/ Topic Category</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Condicional (obrigatório no caso do recurso ser um CDG ou Série)</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
				    	<td>Tema principal do CDG.
						</br>Classificação temática geral utilizada para auxiliar o agrupamento e pesquisa dos CDG disponíveis.
						</br>Este elemento só pode tomar os termos da lista controlada ISO <b>"MD_TopicCategoryCode"</b>, veja Anexo 5.2 .
						</br>Um CDG pode ter várias categorias temáticas associadas. Por exemplo, uma cartografia topográfica pode ter vários tipos de informação como altimetria, rede viária e ferroviária, patrimônio edificado, etc.
						</br></br><b>NOTA</b> : O CEMG, após estudos da aplicação do padrão ISO por diversos países e continentes, propõe as categorias temáticas, nas quais estarão englobados os conjuntos de dados geoespaciais a serem catalogados pela referida norma ISO, criando assim uma lista controlada brasileira <b>MD_TopicCategoryCode.</b>
						</td>
				  	</tr>
				  	<tr>
				   		<th>Exemplos</th>
				   		<td>5.6.1) <b>mapeamentoBasicoTopografico</b>
						</br>5.6.2) <b>geografia/educacao</b>
				   		</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Topic Category-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Extent-->
<div class="modal fade" id="modalExtent" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Extensão</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
			    		<th>Seção</th>
			    		<td>Identificação do CDG/ Data Identification</td>
			  		</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Extensão/ Extent</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Condicional</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
				    	<td>Informação sobre a extensão espacial (retângulo envolvente, etc), vertical e temporal.
						</td>
				  	</tr>
				  	<tr>
				   		<th>Exemplos</th>
				   		<td>Extensão Geográfica
						</br>Extensão Temporal
						</br>Extensão Altimétrica
				   		</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Extent-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Geographic Extent-->
<div class="modal fade" id="modalGeographicExtent" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Extensão Geográfica</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
				    	<th>Seção</th>
				    	<td>Extensão / Extent</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Extensão Geográfica/ Geographic Extent</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Obrigatório</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
						<td>Polígono Delimitador
						</br>Retângulo Envolvente
						</br>Identificador Geográfico</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
				    	<td>Extensão geográfica do conjunto de dados geoespaciais.
						</br>Esta extensão pode ser documentada pelo <b>"Polígono Delimitador"</b>, <b>"Retângulo Envolvente"</b> ou <b>"Identificador Geográfico"</b>.
						</br>O elemento <b>" Polígono Delimitador"</b> é o conjunto de pontos que formam >o referido polígono.
						</br>O elemento <b>"Retângulo Envolvente"</b> é composto por 4 coordenadas >geográficas:
						</br><b>· Longitude Limítrofe Oeste:</b> Coordenada ocidental do limite da extensão do conjunto de dados geoespaciais, expressa em longitude utilizando graus decimais (e valores positivos a oriente).
						</br><b>· Longitude Limítrofe Este:</b> Coordenada oriental do limite da extensão do conjunto de dados geoespaciais, expressa em longitude utilizando graus decimais (e valores positivos a oriente).
						</br><b>· Latitude Limítrofe Sul:</b> Coordenada meridional do limite da extensão do conjunto de dados geoespaciais, expressa em latitude, utilizando graus decimais (e valores positivos a norte).
						</br><b>· Latitude Limítrofe Norte:</b> Coordenada setentrional do limite da extensão do conjunto de dados geoespaciais, expressa em latitude, utilizando graus decimais (e valores positivos a norte).
						</br></br><b>NOTA:</b> esta informação é aproximada (2 casas decimais).
						</br>Vários retângulos podem ser utilizados para descrever detalhadamente uma extensão geográfica, como se vê na imagem abaixo. Também ilhas no interior da extensão podem ser documentadas, tendo em consideração o preenchimento do elemento "Código de Tipo de Área Geográfica" que será "0" para a não existência de dados no interior e "1" para a existência de dados.
						</br>No caso da extensão do CDG não ser contínua, da mesma forma podem ser utilizados vários retângulos envolventes.
						</br></br>A extensão geográfica pode também ser definida através de <b>identificadores geográficos</b>. Podem ser utilizados as <b>Unidades Administrativas</b> ou <b>Estatísticas (geocódigo)</b>, tendo como elementos <b>Autoridade</b> e <b>Geocódigo</b>.
						</br>A documentação da extensão geográfica através do <b>Retângulo envolvente</b>, embora menos rigorosa que a dos identificadores geográficos, é de <b>utilização preferencial</b>, porque a localização geográfica dos identificadores geográficos pode não ser resolvida em todos os sistemas de metadados.
						</br>A utilização de geocódigo é recomendada, no caso dos identificadores geográficos, já que é uma nomenclatura utilizada para geocodificar as unidades político-administrativas e operacionais (por ex., setores censitários).
						</td>
				  	</tr>
				  	<tr>
				   		<th>Exemplos</th>
				   		<td>5.6.1) <b>Retângulo Envolvente</b>
						</br>Longitude Limítrofe Oeste: -38,00
						</br>Longitude Limítrofe Este: -37,83
						</br>Latitude Limítrofe Sul: -12.63
						</br>Latitude Limítrofe Norte: -12,50
						</br></br>5.6.2) <b>Retângulo Envolvente</b>
						</br>Longitude Limítrofe Oeste: 180,00
						</br>Longitude Limítrofe Este: -180,00
						</br>Latitude Limítrofe Sul: -90,00
						</br>Latitude Limítrofe Norte: 90,00
						</br></br>5.6.6) <b>Indicador Geográfico (município de Petrópolis - RJ)</b>
						</br>Autoridade: IBGE
						</br>Geocódigo: 3303906
				   		</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Geographic Extent-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Temporal Extent-->
<div class="modal fade" id="modalTemporalExtent" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Extensão Temporal</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
				    	<th>Seção</th>
				    	<td>Extensão / Extent</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Extensão Temporal/ Temporal Extent</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Condicional</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
						<td>Período de Tempo:
						</br>data e hora início
						</br>data e hora término</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
				    	<td>Período de tempo para o qual o conjunto de dados geoespaciais é válido. Este período é definido através de uma data e hora de início e uma data e hora de fim.
						</br>O formato da data e hora é composto por quatro dígitos para o ano, dois dígitos para o mês, dois dígitos para o dia, um "T" para tempo, dois dígitos para a hora, dois dígitos para os minutos e dois dígitos para os segundos (<b>AAAA-MM-DDThh:mm:ss</b>). Tempo GMT (Greenwich Mean Time).
						</br>Esta entidade de metadados deve ser utilizada preferencialmente para CDG que tenham uma validade temporal evidente, como por exemplo, os dados meteorológicos.
						</td>
				  	</tr>
				  	<tr>
				   		<th>Exemplos</th>
				   		<td>5.6.1) e 5.6.2) - como são dados de cartografia básica (e não
						</br>meteorológicos), esta entidade não deve ser utilizada
				   		</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Temporal Extent-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Vertical Extent-->
<div class="modal fade" id="modalVerticalExtent" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Extensão Altimétrica-Batimétrica</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
				    	<th>Seção</th>
				    	<td>Extensão / Extent</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Extensão Altimétrica-Batimétrica/ Vertical Extent</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Condicional</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
						<td>Valor Mínimo
						</br>Valor Máximo
						</br>Unidades de Medida
						</br>Datum Altimétrico-Batimétrico</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
				    	<td>Extensão altimétrica ou batimétrica do conjunto de dados geoespaciais.
						</br>A documentação da extensão altimétrica-batimétrica é feita através dos seguintes elementos:
						</br><b>Valor Mínimo:</b> Valor mínimo da extensão altimétrica ou batimétrica abrangida pelo conjunto de dados geoespaciais;
						</br><b>Valor Máximo:</b> Valor máximo da extensão altimétrica ou batimétrica abrangida pelo conjunto de dados geoespaciais;
						</br><b>Unidades de Medida:</b> Unidades utilizadas na informação relativa à extensão altimétrica ou batimétrica.
						</br>Exemplos: metros, pés, milímetros;
						</br><b>Datum Altimétrico:</b> Fornece informação sobre o referencial de medida dos valores de altitudes e profundidades.
						</br>A documentação desta entidade está condicionada ao CDG conter informação altimétrica.
						</td>
				  	</tr>
				  	<tr>
				   		<th>Exemplos</th>
				   		<td>5.6.1) <b>Valor Mínimo:</b> 0
						</br><b>Valor Máximo:</b>
						</br><b>Unidades de Medida:</b> metros
						</br><b>Datum Altimétrico :</b> Marégrafo de Imbituba
						</br></br>5.6.2) <b>Valor Mínimo:</b> (não se aplica)
						</br><b>Valor Máximo:</b> (não se aplica)
						</br><b>Unidades de Medida:</b> metros
						</br><b>Datum Altimétrico :</b> (não se aplica)
				   		</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Vertical Extent-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Data Identification-->
<div class="modal fade" id="modalImportBoundingBox" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Importar Retângulo Envolvente</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
				    	<th>reSHP</th>
				    	<td>Calcula o Retângulo Envolvente de um arquivo Shapefile e salva os limites em um arquivo XML, o qual pode ser importado pelo edpMGBs para o preenchimento automático dos campos do Retângulo Envolvente. A ferramenta reSHP está disponível para download na página inicial do projeto edpMGBs (seção "Ferramenta") e/ou na barra inferior deste editor (ao lado da opção "Ajuda").</td>
				  	</tr>
				  	<tr>
				    	<th>Importar XML para Retângulo Envolvente</th>
				    	<td>
				    		<ol>
				    			<li>Clicar em "Escolher arquivo" e selecionar o arquivo XML gerado pela ferramenta reSHP ("nome_do_arquivo_re.xml")</li>
				    			<li>Clicar em "Abrir"</li>
				    		</ol>
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