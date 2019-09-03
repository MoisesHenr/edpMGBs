<!--modal XML retangulo envolvente
<div class="modal fade" id="modalImportBoundingBox" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<label>Favor escolher arquivo XML e pressionar Abrir</label>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				
				<div id="uploadXMLBoundingBox">
                    <input type="file" id="fileBoundingBox" name="fileBoundingBox" />
                    <input type="button" value="Abrir" id="uploadBoundingBox" class="uploadBoundingBox"/>
                </div>
                
			</div>
		</div>
	</div>
</div>-->

<!--extend-->
<div id="extent" class="extent list-group" style="display: none;">
	<div class="row">
		<div class="col-md-11">
			<div class="list-group-item">
				<!--extensao geografica-->
				<div id="geog_elem" class="geog_elem" style="display: none;">
					<div class="row">
						<div class="col-md-11">
							<div class="list-group-item">
								<!--poligono delimitador-->
								<div id="poli_bound" class="poli_bound list-group-item" style="display: none;">
									<div class="row">
										<div class="col-md-12">
											<label>Polígono delimitador: </label>
										</div>
									</div>
									<div class="row">
										<div class="col-md-11">
											<input type="text" name="polygon" id="polygon" class="polygon form-control">
										</div>
										<div class="col-md-1">
											<button type="button" id="menosPoli" class="btn btn-outline-primary">-</button>
										</div>
									</div>
								</div>
								<div id="inc_dec_poli" class="list-group">
									<button type="button" id="maisPoli" class="btn btn-outline-primary">+</button>
								</div>
								<!--fim poligono delimitador-->
								<!--retangulo envolvente-->
								<div id="geog_bound_box" class="geog_bound_box list-group-item" style="display: none;">
									<div class="row">
										<div class="col-md-12">
											<label>Retângulo envolvente: <!--<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalImportBoundingBox">Importar XML Retângulo Envolvente</button>--></label>

											<!--<input type="file" id="fileBoundingBox" name="fileBoundingBox" class="form-control"/>
											<button type="button" class="btn btn-default uploadBoundingBox" id="uploadBoundingBox">Abrir</button>-->
										</div>
										<div class="col-md-9">
											<input type="file" id="fileBoundingBox" name="fileBoundingBox" class="form-control"/>
										</div>
										<div class="col-md-3">
											<button type="button" class="btn btn-default uploadBoundingBox" id="uploadBoundingBox">Abrir</button>
										</div>
									</div>
									<div class="row">
										<div class="col-md-11">
											<div class="list-group-item">
												<label>Longitude limítrofe oeste: </label>
												<input type="number" step="any" name="westBoundLongitude" id="westBoundLongitude" class="westBoundLongitude form-control">
												<label>Longitude limítrofe leste: </label>
												<input type="number" step="any" name="eastBoundLongitude" id="eastBoundLongitude" class="eastBoundLongitude form-control">
												<label>Latitude limítrofe sul: </label>
												<input type="number" step="any" name="southBoundLatitude" id="southBoundLatitude" class="southBoundLatitude form-control">
												<label>Latitude limítrofe norte: </label>
												<input type="number" step="any" name="northBoundLatitude" id="northBoundLatitude" class="northBoundLatitude form-control">
											</div>
										</div>
										<div class="col-md-1">
											<button type="button" id="menosGeogBoundBox" class="btn btn-outline-primary">-</button>
										</div>
									</div>
								</div>
								<div id="inc_dec_geog_bound_box" class="list-group">
									<button type="button" id="maisGeogBoundBox" class="btn btn-outline-primary">+</button>
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalImportBoundingBox"><span class="glyphicon glyphicon-question-sign "></span>
								</div>
								<!--fim retangulo envolvente-->
								<!--identificadores geograficos-->
								<div>
									<label>Identificadores geográficos: </label>
									<input type="text" name="geographicIdentifier" id="geographicIdentifier" class="geographicIdentifier form-control">
								</div>
								<!--fim identificadores geograficos-->
							</div>
						</div>
						<div class="col-md-1">
							<button type="button" id="menosGeogElem" class="btn btn-outline-primary">-</button>
						</div>
					</div>
				</div>
				<div id="inc_dec_geog_elem" class="list-group">
					<label>Extensão geográfica: </label>
					<button type="button" id="maisGeogElem" class="btn btn-outline-primary">+</button>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalGeographicExtent"><span class="glyphicon glyphicon-question-sign "></span></button>
				</div>
				<!--fim extensao geografica-->
				<!--extensao temporal-->
				<div class="list-group-item">
					<!--é necessario colocar a hora?-->
					<label>Extensão temporal: </label>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalTemporalExtent"><span class="glyphicon glyphicon-question-sign "></span></button>
					<div>
						<label>Data inicial: </label>
						<input type="datetime-local" name="temporalElementInitial" id="temporalElementInitial" class="temporalElementInitial form-control">
						<label>Data final: </label>
						<input type="datetime-local" name="temporalElementLast" id="temporalElementLast" class="temporalElementLast form-control">
					</div>
				</div>
				<!--fim extensao temporal-->
				<!--extensao altimetrica-batimetrica-->
				<div class="list-group-item">
					<label>Extensão altimétrica-batimétrica: </label>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalVerticalExtent"><span class="glyphicon glyphicon-question-sign "></span></button>
					<div>
						<label>Valor mínimo: </label>
						<input type="number" step="any" name="minimumValue" id="minimumValue" class="minimumValue form-control">
						<label>Valor máximo: </label>
						<input type="number" step="any" name="maximumValue" id="maximumValue" class="maximumValue form-control">
						<label>Unidade de medida: </label>
						<input type="text" name="unitOfMeasure" id="unitOfMeasure" class="unitOfMeasure form-control">
						<label>Datum altimétrico: </label>
						<input type="text" name="verticalDatum" id="verticalDatum" class="verticalDatum form-control">
					</div>
				</div>
				<!--fim extensao altimetrica-batimetrica-->
			</div>
		</div>
		<div class="col-md-1">
			<button type="button" id="menosExtent" class="btn btn-outline-primary">-</button>
		</div>
	</div>
</div>
<!--extend-->