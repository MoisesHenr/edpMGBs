<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="center"><label>IDENTIFICAÇÃO</label></h4>
    </div>
</div>

<!--Citacao-->
<div id="citation" class="citation list-group-item" style="display: none">
    <div class="row">
        <div class="col-md-11">
            <div class="list-group-item">
                <label>Título: </label>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalTitle"><span class="glyphicon glyphicon-question-sign"></span></button>
                <input type="text" name="title" id="title" class="title form-control">
            </div>
            <div id="dateType" class="dateType" style="display: none;">
                <div class="row">
                    <div class="col-md-11">
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Data: </label>
                                    <input type="date" name="date[]" id="date" class="date form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Tipo: </label>
                                    <select name="type[]" id="type" class="type form-control">
                                        <option value="creation">creation</option>
                                        <option value="publication">publication</option>
                                        <option value="update">update</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button type="button" id="menosDate" class="btn btn-outline-primary">-</button>
                    </div>
                </div>
            </div>
            <div id="inc_dec_date" class="list-group-item">
                <label>Data: </label>
                <button type="button" id="maisDate" class="btn btn-outline-primary">+</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalDateTipe"><span class="glyphicon glyphicon-question-sign "></span></button>
            </div>
        </div>
        <div class="col-md-1">
            <button type="button" id="menosCit" class="btn btn-outline-primary">-</button>
        </div>
    </div>
</div>
<div id="inc_dec_citation" class="list-group">
    <label>Citações: </label>
    <button type="button" id="maisCit" class="btn btn-outline-primary">+</button>
    <!--Recebe os clones de citation-->
</div>
<!--Citacao-->

<!--resumo-->
<div id="abst" class="list-group">
    <label>Resumo: </label>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalResume"><span class="glyphicon glyphicon-question-sign "></span></button>
    <textarea name="abstract" id="abstract" class="form-control"></textarea>
</div>
<!--fim resumo-->

<!--status-->
<div class="list-group">
    <label>Status: </label>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalStatus"><span class="glyphicon glyphicon-question-sign "></span></button>
    <select name="status" id="status" class="status form-control">
        <option value=""></option>
        <option value="completed">completed</option>
        <option value="historicalArchive">historicalArchive</option>
        <option value="obsolete">obsolete</option>
        <option value="onGoing">onGoing</option>
        <option value="planned">planned</option>
        <option value="required">required</option>
        <option value="underDevelopment">underDevelopment</option>
        <option value="pending">pending</option>
    </select>
</div>
<!--fim status-->

<!--point of contact-->
<?php include 'pointOfContact.php' ?>
<div id="inc_dec_pointOfContact" class="list-group">
    <label>Responsável pelo Recurso: </label>
    <button type="button" id="maisPointOfContact" class="btn btn-outline-primary">+</button>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalPointOfContact"><span class="glyphicon glyphicon-question-sign"></span></button>
</div>
<!--point of contact-->

<!--descriptiveKeywords-->
<div id="descKeywords" class="descKeywords list-group-item" style="display: none;">
    <div class="row">
        <div class="col-md-11">
            <div class="list-group-item">
                <!--keyword-->
                <div id="keyw" class="keyw list-group-item" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Palavra-chave: </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <input type="text" name="keyword" id="keyword" class="keyword form-control">
                        </div>
                        <div class="col-md-1">
                            <button type="button" id="menoskeyw" class="btn btn-outline-primary">-</button>
                        </div>
                    </div>
                </div>
                <div id="inc_dec_keyw" class="list-group-item">
                    <button type="button" id="maisKeyw" class="btn btn-outline-primary">+</button>
                </div>
                <!--fim keyword-->
                <!--typeKeyword-->
                <div class="list-group-item">
                    <label>Tipo de Palavra-chave: </label>
                    <select name="typeKeyword" id="typeKeyword" class="typeKeyword form-control">
                        <option value=""></option>
                        <option value="discipline">discipline</option>
                        <option value="place">place</option>
                        <option value="stratum">stratum</option>
                        <option value="temporal">temporal</option>
                        <option value="theme">theme</option>
                    </select>
                </div>
                <!--fim typeKeyword-->
            </div>
        </div>
        <div class="col-md-1">
            <button type="button" id="menosDescriptiveKeywords" class="btn btn-outline-primary">-</button>
        </div>
    </div>
</div>
<div id="inc_dec_descriptiveKeywords" class="list-group">
    <label>Palavras-chave Descritivas: </label>
    <button type="button" id="maisDescriptiveKeywords" class="btn btn-outline-primary">+</button>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalDescriptiveKeywords"><span class="glyphicon glyphicon-question-sign"></span></button>
</div>
<!--fim descriptiveKeywords-->

<!--graphicOverview-->
<div id="graphicOverview" class="graphicOverview list-group-item" style="display: none;">
    <div class="row">
        <div class="col-md-11">
            <div class="list-group-item">
                <label>Nome do Arquivo:</label>
                <input type="text" name="fileName" id="fileName" class="fileName form-control">
                <label>Descrição do Arquivo:</label>
                <input type="text" name="fileDescription" id="fileDescription" class="fileDescription form-control">
                <label>Tipo do Arquivo:</label>
                <input type="text" name="fileType" id="fileType" class="fileType form-control">
            </div>
        </div>
        <div class="col-md-1">
            <button type="button" id="menosGraphicOverview" class="btn btn-outline-primary">-</button>
        </div>
    </div>
</div>
<div id="inc_dec_graphicOverview" class="list-group">
    <label>Pré Visualização Gráfica: </label>
    <button type="button" id="maisGraphicOverview" class="btn btn-outline-primary">+</button>
</div>
<!--fim graphicOverview-->