<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="center"><label>SISTEMA DE REFERÊNCIA</label></h4>
    </div>
</div>

<!--md_crs-->
<div id="md_crs" class="md_crs list-group">
	<label>Sistema de Coordenadas de Referência: </label>
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalReferenceSystem"><span class="glyphicon glyphicon-question-sign"></span></button>
	<!--projection-->
	<div id="proj" class="proj list-group-item">
		<label>Projeção: </label>
		<input type="text" name="projection" id="projection" class="projection form-control">
	</div>
	<!--fim projection-->
	<!--ellipsoid-->
	<div id="elip" class="elip list-group-item">
		<label>Elipsóide: </label>
		<input type="text" name="ellipsoid" id="ellipsoid" class="ellipsoid form-control">
	</div>
	<!--fim ellipsoid-->
	<!--datum-->
	<div id="referenceDatum" class="referenceDatum list-group-item" style="display: none;">
		<div class="row">
			<div class="col-md-12">
				<label>Datum: </label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-11">
				<input type="text" name="datum" id="datum" class="datum form-control">
			</div>
			<div class="col-md-1">
				<button type="button" id="menosDatum" class="btn btn-outline-primary">-</button>
			</div>
		</div>
	</div>
	<div id="inc_dec_datum" class="list-group-item">
		<button type="button" id="maisDatum" class="btn btn-outline-primary">+</button>
	</div>
	<!--fim datum-->
	<!--Ellipsoid Parameters-->
	<div id="ellipsoidParameters" class="ellipsoidParameters list-group-item" style="display: none;">
		<div class="row">
			<div class="col-md-11">
				<div class="list-group-item">
					<div>
						<label>Semi Eixo Maior: </label>
						<input type="text" name="semiMajorAxis" id="semiMajorAxis" class="semiMajorAxis form-control">
					</div>
					<div>
						<label>Unidade Semi Eixo Maior: </label>
						<input type="text" name="axisUnits" id="axisUnits" class="axisUnits form-control">
					</div>
					<div>
						<label>Achatamento: </label>
						<input type="text" name="denominatorOfFlatteningRatio" id="denominatorOfFlatteningRatio" class="denominatorOfFlatteningRatio form-control">
					</div>
				</div>
			</div>
			<div class="col-md-1">
				<button type="button" id="menosEllipsoidParameters" class="btn btn-outline-primary">-</button>
			</div>
		</div>
	</div>
	<div id="inc_dec_ellipsoidParameters" class="list-group-item">
		<label>Parâmetros do Elipsóide: </label>
		<button type="button" id="maisEllipsoidParameters" class="btn btn-outline-primary">+</button>
	</div>
	<!--fim Ellipsoid Parameters-->
	<!--projection Parameters-->
	<div id="projParam" class="projParam list-group-item" style="display: none;">
		<div class="row">
			<div class="col-md-12">
				<label>Parâmetros de Projeção: </label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-11">
				<input type="text" name="projectionParameters" id="projectionParameters" class="projectionParameters form-control">
			</div>
			<div class="col-md-1">
				<button type="button" id="menosProjParam" class="btn btn-outline-primary">-</button>
			</div>
		</div>
	</div>
	<div id="inc_dec_projParam" class="list-group-item">
		<button type="button" id="maisProjParam" class="btn btn-outline-primary">+</button>
	</div>
	<!--fim projection Parameters-->
</div>
<!--fim md_crs-->

<!--Identifier-->
<div id="identifier" class="identifier list-group">
	<label>Identificador: </label>
	<!--code-->
	<div class="list-group-item">
		<label>Código: </label>
		<input type="text" name="code" id="code" class="code form-control">
	</div>
	<!--fim code-->
	<!--spatial identifier-->
	<div class="spatialidentifier list-group-item">
		<label>Identificador Espacial: </label>
		<!--version-->
		<div class="list-group-item">
			<label>Versão de Sistema de Referência: </label>
			<input type="text" name="version" id="version" class="version form-control">
		</div>
		<!--fim version-->
		<!--codeSpace-->
		<div class="list-group-item">
			<label>Organização: </label>
			<input type="text" name="codeSpace" id="codeSpace" class="codeSpace form-control">
		</div>
		<!--fim codeSpace-->
	</div>
	<!--fim spatial identifier-->
</div>
<!--fim Identifier-->