<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="center"><label>METAMETADADOS</label></h4>
    </div>
</div>

<!--language-->
<div id="lang" class="lang list-group-item" style="display: none;">
	<div class="row">
		<div class="col-md-12">
			<label>Idioma: </label>
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLanguage"><span class="glyphicon glyphicon-question-sign"></span></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-11">
			<select name="language[]" id="language" class="language form-control">
                <option value=""></option>
                <option value="por">por</option>
                <option value="eng">eng</option>
            </select>
		</div>
		<div class="col-md-1">
			<button type="button" id="menosLang" class="btn btn-outline-primary">-</button>
		</div>
	</div>
</div>
<div id="inc_dec_language" class="list-group">
	<button type="button" id="maisLang" class="btn btn-outline-primary">+</button>
</div>
<!--fim language-->

<!--Character Set Code-->
<div id="character" class="character list-group-item" style="display: none;">
	<div class="row">
		<div class="col-md-12">
			<label>Norma de Codificação de Caracteres: </label>
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalDataIdentification"><span class="glyphicon glyphicon-question-sign"></span></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-11">
			<select name="characterSetCode[]" id="characterSetCode" class="characterSetCode form-control">
				<option value=""></option>
                <option value="ucs2">ucs2</option>
                <option value="ucs4">ucs4</option>
                <option value="utf7">utf7</option>
                <option value="utf8">utf8</option>
                <option value="utf16">utf16</option>
                <option value="8859part1">8859part1</option>
                <option value="8859part2">8859part2</option>
                <option value="8859part3">8859part3</option>
                <option value="jis">jis</option>
                <option value="shiftJIS">shiftJIS</option>
                <option value="eucJP">eucJP</option>
                <option value="usAscii">usAscii</option>
                <option value="ebcdic">ebcdic</option>
                <option value="eucKR">eucKR</option>
                <option value="big5">big5</option>
            </select>
		</div>
		<div class="col-md-1">
			<button type="button" id="menosCharacter" class="btn btn-outline-primary">-</button>
		</div>
	</div>
</div>
<div id="inc_dec_character" class="list-group">
	<button type="button" id="maisCharacter" class="btn btn-outline-primary">+</button>
</div>
<!--fim Character Set Code-->

<!--contact-->
<?php include 'contact.php' ?>
<div id="inc_dec_contact" class="list-group">
	<label>Responsável pelo Metadado: </label>
	<button type="button" id="maisContact" class="btn btn-outline-primary">+</button>
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalMetadataContact"><span class="glyphicon glyphicon-question-sign"></span></button>
</div>
<!--fim contact-->

<!--metadata Standard Name-->
<div id="standardName" class="standardName list-group">
	<label>Designação da Norma e Perfil de Metadados: </label>
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalMetadataStandardName"><span class="glyphicon glyphicon-question-sign"></span></button>
	<input type="text" name="metadataStandardName" id="metadataStandardName" class="metadataStandardName form-control" value="ISO 19115:2003/19139">
</div>
<!--fim metadata Standard Name-->

<!--metadata Standard version-->
<div id="standardVersion" class="standardVersion list-group">
	<label>Versão da Norma dos Metadados: </label>
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalMetadataStandardVersion"><span class="glyphicon glyphicon-question-sign"></span></button>
	<input type="text" name="metadataStandardVersion" id="metadataStandardVersion" class="metadataStandardVersion form-control">
</div>
<!--fim metadata Standard version-->

<!--date Stamp-->
<div id="metadataDate" class="metadataDate list-group">
	<label>Data dos Metadados: </label>
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalDateStamp"><span class="glyphicon glyphicon-question-sign"></span></button>
	<div class="list-group-item">
		<label>Campo Gerado Automaticamente</label>
	</div>
	<?php 
		date_default_timezone_set('America/Sao_Paulo');
		$date = date('Y-m-d');
		$hour = date('H:i:s');
	?>
	<input type="hidden" name="dateStamp" id="dateStamp" value="<?php echo $date . 'T' . $hour; ?>">
</div>
<!--fim date Stamp-->

<!--fileIdentifier-->
<div id="fileIden" class="list-group">
	<label>Identificador dos Metadados: </label>
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalFileIdentifier"><span class="glyphicon glyphicon-question-sign"></span></button>
	<div id="hideDiv" class="list-group-item">
		<label>Campo Gerado Automaticamente</label>
	</div>
	<input type="text" name="fileIdentifier" id="fileIdentifier" class="fileIdentifier form-control" value="" disabled style="display: none;">
</div>
<!--fim fileIdentifier-->