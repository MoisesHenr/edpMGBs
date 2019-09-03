<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="center"><label>QUALIDADE</label></h4>
    </div>
</div>

<div id="lineage" class="lineage list-group">
    <label>Linhagem: </label>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalLineage"><span class="glyphicon glyphicon-question-sign"></span></button>
    <!--statement-->
    <div class="list-group-item">
        <label>Declaração: </label>
        <!--<input type="text" name="statement" id="statement" class="statement form-control">-->
        <textarea name="statement" id="statement" class="statement form-control"></textarea>
    </div>
    <!--statement-->
    <!--source-->
    <div id="source" class="source list-group-item" style="display: none;">
        <div class="row">
            <div class="col-md-11">
                <div class="list-group-item">
                    <div>
                        <label>Extensão da fonte: </label>
                        <input type="text" name="sourceExtent" id="sourceExtent" class="sourceExtent form-control">
                    </div>
                    <div>
                        <label>Descrição: </label>
                        <input type="text" name="descriptionSource" id="descriptionSource" class="descriptionSource form-control">
                    </div>
                    <div>
                        <label>Denominador da escala da fonte: </label>
                        <input type="number" name="scaleDenominator" id="scaleDenominator" class="scaleDenominator form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <button type="button" id="menosSource" class="btn btn-outline-primary">-</button>
            </div>
        </div>
    </div>
    <div id="inc_dec_source" class="list-group-item">
        <label>Fonte de dados: </label>
        <button type="button" id="maisSource" class="btn btn-outline-primary">+</button>
    </div>
    <!--source-->
    <!--Process Step-->
    <div id="proc_step" class="proc_step" style="display: none;">
        <div class="list-group-item">
            <div class="row">
                <div class="col-md-12">
                    <label>Descrição: </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <!--<input type="text" name="descriptionStep" id="descriptionStep" class="descriptionStep form-control">-->
                    <textarea name="descriptionStep" id="descriptionStep" class="descriptionStep form-control"></textarea>
                </div>
                <div class="col-md-1">
                    <button type="button" id="menosProcStep" class="btn btn-outline-primary">-</button>
                </div>
            </div>
        </div>
    </div>
    <div id="inc_dec_proc_step" class="list-group-item">
        <label>Etapas do processo: </label>
        <button type="button" id="maisProcStep" class="btn btn-outline-primary">+</button>
    </div>
    <!--Process Step-->
</div>