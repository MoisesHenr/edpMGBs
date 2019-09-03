<div id="contact" class="contact list-group-item" style="display: none;">
    <div class="row">
        <div class="col-md-11">
            <!--name-->
            <div class="list-group-item">
                <label>Nome: </label>
                <input type="text" name="individualName" id="individualName" class="date form-control">
            </div>
            <!--fim name-->
            <!--organization name-->
            <div id="metadataOrgName" class="metadataOrgName list-group-item" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <label>Nome da Organização: </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <input type="text" name="metadataOrganisationName" id="metadataOrganisationName" class="metadataOrganisationName form-control" value="">
                    </div>
                    <div class="col-md-1">
                        <button type="button" id="menosMetadataOrgName" class="btn btn-outline-primary">-</button>
                    </div>
                </div>
            </div>
            <div id="inc_dec_metadataOrgName" class="list-group-item">
                <button type="button" id="maisMetadataOrgName" class="btn btn-outline-primary">+</button>
            </div>
            <!--fim organization name-->
            <!--role-->
            <div id="rol" class="rol list-group-item" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <label>Função: </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <select name="role" id="role" class="role date form-control">
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
                        <button type="button" id="menosRol" class="btn btn-outline-primary">-</button>
                    </div>
                </div>
            </div>
            <div id="inc_dec_rol" class="list-group-item">
                <button type="button" id="maisRol" class="btn btn-outline-primary">+</button>
            </div>
            <!--fim role-->
            <!--contact-->
            <?php include 'contactInfo.php' ?>
            <!--fim contact-->
        </div>
        <div class="col-md-1">
            <button type="button" id="menosContact" class="btn btn-outline-primary">-</button>
        </div>
    </div>
</div>