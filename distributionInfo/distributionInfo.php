<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="center"><label>DISTRIBUIÇÃO</label></h4>
    </div>
</div>

<!--distribution-->
<div id="distribution" class="distribution list-group-item" style="display: none;">
	<div class="row">
		<div class="col-md-11">
			<!--name format-->
			<div id="nameFor" class="nameFor list-group-item" style="display: none;">
				<div class="row">
					<div class="col-md-12">
						<label>Nome do formato: </label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-11">
						<input type="text" name="nameFormat" id="nameFormat" class="nameFormat form-control">
					</div>
					<div class="col-md-1">
						<button type="button" id="menosNameFor" class="btn btn-outline-primary">-</button>
					</div>
				</div>
			</div>
			<div id="inc_dec_nameFor" class="list-group-item">
				<button type="button" id="maisNameFor" class="btn btn-outline-primary">+</button>
			</div>
			<!--fim name format-->
			<!--version format-->
			<div id="versionFor" class="versionFor list-group-item" style="display: none;">
				<div class="row">
					<div class="col-md-12">
						<label>Versão do formato: </label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-11">
						<input type="text" name="versionFormat" id="versionFormat" class="versionFormat form-control">
					</div>
					<div class="col-md-1">
						<button type="button" id="menosVersionFor" class="btn btn-outline-primary">-</button>
					</div>
				</div>
			</div>
			<div id="inc_dec_versionFor" class="list-group-item">
				<button type="button" id="maisVersionFor" class="btn btn-outline-primary">+</button>
			</div>
			<!--fim version format-->
		</div>
		<div class="col-md-1">
			<button type="button" id="menosDistribution" class="btn btn-outline-primary">-</button>
		</div>
	</div>
</div>
<div id="inc_dec_distribution" class="list-group">
	<label>Formato de distribuição: </label>
	<button type="button" id="maisDistribution" class="btn btn-outline-primary">+</button>
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalDistributionFormat"><span class="glyphicon glyphicon-question-sign"></span></button>
</div>
<!--fim distribution-->
<!--linkage-->
<div id="link" class="link list-group-item" style="display: none;">
	<div class="row">
		<div class="col-md-12">
			<label>Acesso Online: </label>
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalOnline"><span class="glyphicon glyphicon-question-sign"></span></button>
		</div>
		<div class="col-md-11">
			<div class="list-group-item">
				<label>Endereço URL: </label>
				<input type="text" name="linkage" id="linkage" class="linkage form-control">
				<label>Protocolo: </label>
				<input type="text" name="protocol" id="protocol" class="protocol form-control">
			</div>
		</div>
		<div class="col-md-1">
			<button type="button" id="menosLink" class="btn btn-outline-primary">-</button>
		</div>
	</div>
</div>
<div id="inc_dec_link" class="list-group">
	<label>Opções de Transferência Digital: </label>
	<button type="button" id="maisLink" class="btn btn-outline-primary">+</button>
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalDigitalTransferOptions"><span class="glyphicon glyphicon-question-sign"></span></button>
</div>
<!--fim linkage-->