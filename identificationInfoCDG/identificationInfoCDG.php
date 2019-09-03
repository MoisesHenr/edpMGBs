<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="center"><label>IDENTIFICAÇÃO DO CDG</label></h4>
    </div>
</div>

<!--////////////////////////////////////////////////////-->
<!--tipo de representaçao espacial-->
<div id="spatial_rep" class="spatial_rep list-group-item" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <label>Tipo de representação espacial: </label>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalDataIdentification"><span class="glyphicon glyphicon-question-sign "></span></button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11">
            <select name="spatialRepresentationType" id="spatialRepresentationType" class="spatialRepresentationType form-control">
                <option value=""></option>
                <option value="vector">vector</option>
                <option value="grid">grid</option>
                <option value="textTable">textTable</option>
                <option value="tin">tin</option>
                <option value="stereoModel">stereoModel</option>
                <option value="video">video</option>
            </select>
        </div>
        <div class="col-md-1">
            <button type="button" id="menosSpatial" class="btn btn-outline-primary">-</button>
        </div>
    </div>
</div>

<div id="inc_dec_spatial_rep" class="list-group">
    <button type="button" id="maisSpatial" class="btn btn-outline-primary">+</button>
</div>
<!--fim tipo de representaçao espacial-->


<!--////////////////////////////////////////////////////-->
<!--escala-->
<div id="spatial_res" class="spatial_res list-group-item" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <label>Escala equivalente: </label>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalResolutionIdentificationCDG"><span class="glyphicon glyphicon-question-sign "></span></button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11">
            <input type="number" name="spatialResolution" id="spatialResolution" class="spatialResolution form-control">
        </div>
        <div class="col-md-1">
            <button type="button" id="menosSpatialRes" class="btn btn-outline-primary">-</button>
        </div>
    </div>
</div>

<div id="inc_dec_spatial_res" class="list-group">
    <label>Escala: </label>
    <button type="button" id="maisSpatialRes" class="btn btn-outline-primary">+</button>
</div>
<!--fim escala-->


<!--////////////////////////////////////////////////////-->
<!--language-->
<div id="langCdg" class="langCdg list-group-item" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <label>Idioma: </label>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLanguageCdg"><span class="glyphicon glyphicon-question-sign"></span></button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11">
            <select name="languageCdg[]" id="languageCdg" class="languageCdg form-control">
                <option value=""></option>
                <option value="por">por</option>
                <option value="eng">eng</option>
            </select>
        </div>
        <div class="col-md-1">
            <button type="button" id="menosLangCdg" class="btn btn-outline-primary">-</button>
        </div>
    </div>
</div>
<div id="inc_dec_languageCdg" class="list-group">
    <button type="button" id="maisLangCdg" class="btn btn-outline-primary">+</button>
</div>
<!--fim language-->


<!--////////////////////////////////////////////////////-->
<!--norma de codificaçao de caracteres-->
<div class="list-group">
    <label>Norma de codificação de caracteres: </label>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalCharacterSet"><span class="glyphicon glyphicon-question-sign "></span></button>
    <select name="characterSet" id="characterSet" class="characterSet form-control">
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
<!--fim norma de codificaçao de caracteres-->


<!--////////////////////////////////////////////////////-->
<!--categoria tematica-->
<div id="topic_cat" class="topic_cat list-group-item" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <label>Categoria temática: </label>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalTopicCategory"><span class="glyphicon glyphicon-question-sign "></span></button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11">
            <select name="topicCategory" id="topicCategory" class="topicCategory form-control">
                <option value=""></option>
                <option value="farming">farming</option>
                <option value="biota">biota</option>
                <option value="boundaries">boundaries</option>
                <option value="climatologyMeteorologyAtmosphere">climatologyMeteorologyAtmosphere</option>
                <option value="economy">economy</option>
                <option value="elevation">elevation</option>
                <option value="environment">environment</option>
                <option value="geoscientificInformation">geoscientificInformation</option>
                <option value="health">health</option>
                <option value="imageryBaseMapsEarthCover">imageryBaseMapsEarthCover</option>
                <option value="intelligenceMilitary">intelligenceMilitary</option>
                <option value="islandWaters">islandWaters</option>
                <option value="location">location</option>
                <option value="oceans">oceans</option>
                <option value="planningCadastre">planningCadastre</option>
                <option value="society">society</option>
                <option value="structure">structure</option>
                <option value="transportation">transportation</option>
                <option value="utilitiesCommunication">utilitiesCommunication</option>
                <option value="extraTerrestrial">extraTerrestrial</option>
                <option value="disaster">disaster</option>
            </select>
        </div>
        <div class="col-md-1">
            <button type="button" id="menosTopicCat" class="btn btn-outline-primary">-</button>
        </div>
    </div>
</div>

<div id="inc_dec_topic_cat" class="list-group">
    <button type="button" id="maisTopicCat" class="btn btn-outline-primary">+</button>
</div>
<!--fim categoria tematica-->

<!--extensão-->
<?php include 'extent.php' ?>
<div id="inc_dec_extent" class="list-group">
    <label>Extensão: </label>
    <button type="button" id="maisExtent" class="btn btn-outline-primary">+</button>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalExtent"><span class="glyphicon glyphicon-question-sign "></span></button>
</div>
<!--fim extensão-->
