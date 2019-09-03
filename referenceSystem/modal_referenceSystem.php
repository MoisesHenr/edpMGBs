<!--Reference System-->
<div class="modal fade" id="modalReferenceSystem" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Sistema de Coordenadas de Referência</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
				  	<tr>
				    	<th>Seção</th>
						<td>Sistema de Referência/ Reference System Info</td>
				  	</tr>
				  	<tr>
				    	<th>Nome</th>
				    	<td>Sistema de Referência/ Reference System</td>
				  	</tr>
				  	<tr>
				    	<th>Obrigatoriedade</th>
				    	<td>Obrigatório</td>
				  	</tr>
				  	<tr>
				    	<th>Elementos</th>
				    	<td>Identificador do sistema de referência;
						</br>Projeção;
						</br>Elipsóide;
						</br>Datum;
						</br>Parâmetros do Elipsoide;
						</br>Parâmetros da Projeção;
						</td>
				  	</tr>
				  	<tr>
				    	<th>Definição/Comentários</th>
						<td>Sistema de referência por coordenadas do CDG.
						</br>Este elemento pode ser documentado através de várias formas:
						</br><b>· Identificador do sistema de referência (com projeção); ou</b>
						</br><b>· Identificação do Datum, Elipsóide e Projeção (nome ou identificador); ou</b>
						</br><b>· Identificaçao do Datum, Elipsóide e Projeção e respectivos parâmetros.</b>
						</br>Sempre que for utilizado um identificador, ele deverá ser composto por um código, mais a identificação da autoridade responsável pelo mesmo.
						</br>Recomenda-se a utilização dos identificadores (nomes) preconizados no Sistema Cartográfico Nacional/CONCAR (www.concar.ibge.gov.br).
						</br>Deve dar-se preferência à utilização de identificadores ou nomes harmonizados.
						</br>Inclusão dos parâmetros do Elipsoide e Projeção é recomendada. É possível documentar vários sistemas de referência para um CDG.
				    	</td>
				  	</tr>	
				  	<tr>
				    	<th>Exemplos</th>
						<td>5.6.1) <b>sistema de referência:</b> SAD69; <b>elipsóide:</b> UGGI 67, <b>parâmetros:</b> 6378160,00 e 298.25 (km); <b>sistema de projeção:</b> UTM, zona 24
						</br></br>5.6.2) <b>sistema de referência (Brasil):</b> SAD69; <b>elipsóide:</b> UGGI 67, <b>parâmetros:</b> 6378160,00 e 298.25 (km); <b>sistema de projeção:</b> policônica, meridiano central -54º e Latitude origem 0o</td>
				  	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim Reference System-->