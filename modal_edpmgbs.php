<div class="modal fade" id="modalReset" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<label>Realmente deseja limpar todos os campos?</label>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<button type="button" class="btn btn-outline-primary" onclick="reset();" data-dismiss="modal">SIM</button>
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">NÃO</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalAbout" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<label>Informações</label>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<table class="table">
				    <tbody>
				      	<tr>
				        	<td><button class="btn btn-default" data-toggle="collapse" data-target="" type="button" aria-expanded="false">Identificação <span class="glyphicon glyphicon-menu-down"></span></button></td>
				        	<td>Menu expansível que pode auxiliar na navegação</td>
				      	</tr>
				      	<tr>
				        	<td><button type="button" class="btn btn-default" data-toggle="modal" data-target=""><span class="glyphicon glyphicon-question-sign"></span></button></td>
				        	<td>Tabela com informações e exemplos sobre o campo ou seção</td>
				      	</tr>
				      	<tr>
				        	<td><button type="button" id="" class="btn btn-outline-primary">+</button></td>
				        	<td>Acrescenta um respectivo campo ou seção</td>
				      	</tr>
				      	<tr>
				        	<td><button type="button" id="menosDate" class="btn btn-outline-primary">-</button></td>
				        	<td>Remove um respectivo campo ou seção</td>
				      	</tr>
				      	<tr>
				        	<td>Importar XML</td>
				        	<td>Permite importar arquivos do usuário</td>
				      	</tr>
				      	<tr>
				        	<td>Limpar Campos</td>
				        	<td>Permite limpar todo o formulário</td>
				      	</tr>
				      	<tr>
				        	<td>Gerar Metadado</td>
				        	<td>Permite criar o arquivo XML e HTML</td>
				      	</tr>
				      	<tr>
				        	<td>Visualizar Metadado</td>
				        	<td>Permite visualizar o arquivo XML e/ou HTML gerado</td>
				      	</tr>
				      	<tr>
				        	<td>Exportar Metadado</td>
				        	<td>Permite salvar o arquivo XML e/ou HTML gerado</td>
				      	</tr>
				      	<tr>
				        	<td>Download reSHP</td>
				        	<td>Permite baixar a ferramenta reSHP para cálculo do Retângulo Envolvente</td>
				      	</tr>
				      	<tr>
				        	<td>Fale conosco</td>
				        	<td>suporteedpmgbs@gmail.com</td>
				      	</tr>
				    </tbody>
				  </table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalErrosAlerts" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<center><label>XML gerado: Inválido</label></center>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<label>Log de Erros: </label>
				<div id="errosModal"></div>
			</div>
			<div class="modal-body">
				<label>Mensagens de Alerta: </label>
				<div id="alertsModal"></div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalValid" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<center><label>XML gerado: Válido</label></center>
			</div>
		</div>
	</div>
</div>