<!--Distribution Format-->
<div class="modal fade" id="modalDistributionFormat" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Formato de Distribuição</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
						<td>Distribuição/ Distribution.</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Formato de Distribuição/ Distribution Format</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Obrigatório</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
						<td>Nome do Formato
						</br>Versão do Formato</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Descrição da estrutura que especifica a representação dos dados num registro, arquivo, mensagem, dispositivo de armazenamento e canal de transmissão.
						</br>O objetivo deste elemento é conhecer o formato em que o CDG se encontra disponível aos usuários.
						</br>Este elemento deve ser documentado através do <b>"Nome do Formato"</b> e <b>"Versão do Formato"</b>.
						</br>O acrônimo ou extensão por que é conhecido o formato deve, sempre que possível, constar no nome. Por exemplo, Shapefile SHP.
						</br>Se a versão for desconhecida ou não se aplicar, fazer essa indicação.
						</br>Este elemento pode ter múltiplas ocorrências, conforme o número de formatos diferentes em que o CDG está disponibilizado.</td>
				  	</tr>
				  	<tr>
				    	<th>Exemplos</th>
				    	<td>5.6.1) <b>Nome Formato:</b> Microstation DGN; <b>Versão:</b> 8 </br>5.6.2) <b>Nome Formato:</b> multimídia; <b>Versão:</b> não se aplica
						</td>
				  	</tr>	
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Distribution Format-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Digital Transfer Options-->
<div class="modal fade" id="modalDigitalTransferOptions" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Opções de Transferência Digital</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
						<td>Distribuição/ Distribution.</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Opções de Transferência Digital/ Digital Transfer Options</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Opcional</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
						<td>Acesso OnLine
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Mídia e meios técnicos para o fornecimento do CDG pelo distribuidor.</td>
				  	</tr>	
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Digital Transfer Options-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Online-->
<div class="modal fade" id="modalOnline" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Opções de Transferência Digital</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th colspan="2"><h2>Acesso OnLine</h2></th>
				  	</tr>
				  	<tr>
				    	<th>Seção</th>
						<td>Distribuição/ Distribution.</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Acesso Online/ Online</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Condicional</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
						<td>Protocolo e Vínculo (endereço URL) do CDG</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Informação relativa a fonte <i>online</i> a partir das quais pode ser obtido o CDG, ou informação sobre o mesmo.
						</br>Para a documentação do "Acesso Online" deve ser preenchido o "<b>Vínculo (Endereço URL)</b>".
						</br>O <b>"Endereço URL"</b> deve ser preenchido com um endereço de uma página de internet (http, ftp) onde se possa fazer o <i>download</i> do CDG, ou acessar um serviço.
						</br>O <b>"Protocolo"</b> deve ser preenchido de modo a informar o tipo de recurso online do <b>"Endereço URL"</b>.</td>
				  	</tr>
				  	<tr>
				    	<th>Exemplos</th>
						<td>5.6.1) <b>Endereço URL:</b>
						</br>http://www.ibge.gov.br/home/geociencias/default_prod.shtm#TOPO
						</br><b>Protocolo:</b> WWW:LINK-1.0-http--link
						</br>5.6.2) <b>Endereço URL:</b>
						</br>http://www.ibge.gov.br/home/geociencias/geografia/atlas
						</br><b>Protocolo:</b> WWW:DOWNLOAD-1.0-http--download</td>
				  	</tr>  
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Online-->