<div id="pointOfContact" class="pointOfContact list-group-item" style="display: none;">
    <div class="row">
        <div class="col-md-11">
            <!--name-->
            <div class="list-group-item">
                <label>Nome: </label>
                <input type="text" name="individualNamePoint" id="individualNamePoint" class="individualNamePoint form-control">
            </div>
            <!--fim name-->
            <!--organization name-->
            <div id="metadataOrgNamePoint" class="metadataOrgNamePoint list-group-item" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <label>Nome da Organização: </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <input type="text" name="metadataOrganisationNamePoint" id="metadataOrganisationNamePoint" class="metadataOrganisationNamePoint form-control" value="">
                    </div>
                    <div class="col-md-1">
                        <button type="button" id="menosMetadataOrgNamePoint" class="btn btn-outline-primary">-</button>
                    </div>
                </div>
            </div>
            <div id="inc_dec_metadataOrgNamePoint" class="list-group-item">
                <button type="button" id="maisMetadataOrgNamePoint" class="btn btn-outline-primary">+</button>
            </div>
            <!--fim organization name-->
            <!--role-->
            <div id="rolPoint" class="rolPoint list-group-item" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <label>Função: </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <select name="rolePoint" id="rolePoint" class="rolePoint date form-control">
                            <option value=""></option>
                            <option value="author">author</option>
                            <option value="custodian">custodian</option>
                            <option value="distributor">distributor</option>
                            <option value="originator">originator</option>
                            <option value="owner">owner</option>
                            <option value="pointOfContact">pointOfContact</option>
                            <option value="principalInvestigator">principalInvestigator</option>
                            <option value="processor">processor</option>
                            <option value="publisher">publisher</option>
                            <option value="resourceProvider">resourceProvider</option>
                            <option value="sponsor">sponsor</option>
                            <option value="user">user</option>
                            <option value="coAuthor">coAuthor</option>
                            <option value="collaborator">collaborator</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <button type="button" id="menosRolPoint" class="btn btn-outline-primary">-</button>
                    </div>
                </div>
            </div>
            <div id="inc_dec_rolPoint" class="list-group-item">
                <button type="button" id="maisRolPoint" class="btn btn-outline-primary">+</button>
            </div>
            <!--fim role-->
            <!--contact-->
            <?php include 'pointOfContactInfo.php' ?>
            <!--fim contact-->
        </div>
        <div class="col-md-1">
            <button type="button" id="menosPointOfContact" class="btn btn-outline-primary">-</button>
        </div>
    </div>
</div>