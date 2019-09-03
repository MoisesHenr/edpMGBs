<!DOCTYPE html>
<html lang="en">
<head>
  	<title>edpMGBs</title>
  	
  	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  	<script src="libraries/jqueryV3.3.1.js"></script>
  	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  	<script src="libraries/bootstrapV3.3.7.js"></script>

  	<link rel="stylesheet" type="text/css" href="libraries/stylesheet.css">

  	<script src="func.js"></script>
    <script src="post.js"></script>
    <script src="upload.js"></script>
    <script src="inc_dec.js"></script>
    <script src="uploadBoundingBox.js"></script>
	
</head>

<body>
	<div class="container">
		<div id="panelTop" class="panel panel-default navbar-fixed-top">
		  	<div class="panel-heading">
		  		<div class="container">
			  		<div class="row">
						<div class="col-md-6 col-xs-4">
							<a href="index.php" style=""><font color="black"><h1>edp<b>MGB</b>s</h1> 
							<p><i>Editor de Metadados do Perfil MGB Sumarizado</i></p></font></a>
						</div>
						<div class="col-md-6 col-xs-8">
							<div class="col-md-5 col-xs-4"></div>
							<div class="col-md-2 col-xs-2"><a href="https://www.ufv.br" target="_blank"><img src="logos/logo_ufv.png" width="120%" height="120%" /></a></div>
							<div class="col-md-2 col-xs-2"><a href="http://www2.dpi.ufv.br" target="_blank"><img src="logos/logo_dpi.png" width="90%" height="90%"/></a></div>	
							<div class="col-md-3 col-xs-3"><a href="http://www.inde.gov.br" target="_blank"><img src="logos/logo_inde.png" width="100%" height="100%"/></a></div>
						</div>
					</div>
			  	</div>
		  	</div>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-3">
                <div id="menu" class="pre-scrollable" style="position: fixed;">
	            	<?php include 'menus/menu_identification.php' ?>
	            	<?php include 'menus/menu_identification_cdg.php' ?>
	            	<?php include 'menus/menu_dataQuality.php' ?>
	            	<?php include 'menus/menu_distributionInfo.php' ?>
	            	<?php include 'menus/menu_referenceSystem.php' ?>
	            	<?php include 'menus/menu_metadata.php' ?>
                </div>
            </div>
            <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
            <div class="col-md-9 col-xs-9">

                <form action="" method="post" name="dados" id="form" enctype="multipart/form-data">
                    <div class="panel panel-default">

                        <!--Upload de arquivo para servidor-->
                        <div class="modal fade" id="modalSubmit" role="dialog">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<label>Favor escolher arquivo e pressionar Abrir</label>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<!---->
										<div id="oc">
				                            <input type="file" id="file" name="arquivo" class="form-control" />
				                            <!--<input type="button" value="Abrir" id="upload" class="upload"/>-->
				                            <button type="button" class="btn btn-default upload" id="upload">Abrir</button>
				                        </div>
				                        <!---->
									</div>
								</div>
							</div>
						</div>
						<!--fim Upload de arquivo para servidor-->

                        <!--identification Info-->
                        <div class="panel-body">
					      	<?php include 'identificationInfo/identificationInfo.php' ?>
					      	<script src="identificationInfo/inc_dec_identificationInfo.js"></script>
					      	<script src="identificationInfo/post_identificationInfo.js"></script>
					      	<script src="identificationInfo/autocomplete_identificationInfo.js"></script>
					      	<?php include 'identificationInfo/modal_identificationInfo.php' ?>
                        </div>
                        <!--fim identification Info-->
                        <!--identification info cdg-->
                        <div class="panel-body">
                        	<?php include 'identificationInfoCDG/identificationInfoCDG.php' ?>
                        	<script src="identificationInfoCDG/inc_dec_identificationInfoCDG.js"></script>
                        	<script src="identificationInfoCDG/post_identificationInfoCDG.js"></script>
                        	<script src="identificationInfoCDG/autocomplete_identificationInfoCDG.js"></script>
                        	<?php include 'identificationInfoCDG/modal_identificationInfoCDG.php' ?>
                        </div>
                        <!--fim identification info cdg-->
                        <!--data quality info-->
                        <div class="panel-body">
                        	<?php include 'dataQualityInfo/dataQualityInfo.php' ?>
                        	<script src="dataQualityInfo/inc_dec_dataQualityInfo.js"></script>
                        	<script src="dataQualityInfo/post_dataQualityInfo.js"></script>
                        	<script src="dataQualityInfo/autocomplete_dataQualityInfo.js"></script>
                        	<?php include 'dataQualityInfo/modal_dataQualityInfo.php' ?>
                        </div>
                        <!--fim data quality info-->
                        <!--distribution info-->
                        <div class="panel-body">
                        	<?php include 'distributionInfo/distributionInfo.php' ?>
                        	<script src="distributionInfo/inc_dec_distributionInfo.js"></script>
                        	<script src="distributionInfo/post_distributionInfo.js"></script>
                        	<script src="distributionInfo/autocomplete_distributionInfo.js"></script>
                        	<?php include 'distributionInfo/modal_distributionInfo.php' ?>
                        </div>
                        <!--fim distribution info-->
                        <!--reference system-->
                        <div class="panel-body">
                        	<?php include 'referenceSystem/referenceSystem.php' ?>
                        	<script src="referenceSystem/inc_dec_referenceSystem.js"></script>
                        	<script src="referenceSystem/post_referenceSystem.js"></script>
                        	<script src="referenceSystem/autocomplete_referenceSystem.js"></script>
                        	<?php include 'referenceSystem/modal_referenceSystem.php' ?>
                        </div>
                        <!--fim reference system-->
                        <!--metadata-->
                        <div class="panel-body">
                        	<?php include 'metadata/metadata.php' ?>
                        	<script src="metadata/inc_dec_metadata.js"></script>
                        	<script src="metadata/post_metadata.js"></script>
                        	<script src="metadata/autocomplete_metadata.js"></script>
                        	<?php include 'metadata/modal_metadata.php' ?>
                        </div>
                        <!--fim metadata-->
                    </div>

					<nav id="menu_navbar" class="navbar navbar-inverse navbar-fixed-bottom">
					  	<div class="container-fluid">
					    	<ul class="nav navbar-nav">
					      		<li class="active"><a class="navbar-brand" tabindex="-1">edpMGBs</a></li>
					      		<li><button type="button" class="btn btn-link navbar-btn" data-toggle="modal" data-target="#modalSubmit">Importar XML</button></li>
					      		<li><button type="button" class="btn btn-link navbar-btn" data-toggle="modal" data-target="#modalReset">Limpar Campos</button></li>
					      		<li><button name="Submit" type="button" id="Submit" class="btn btn-link navbar-btn">Gerar Metadado</button></li>

						      	<li id="viewDocument" style="display: none;">
						      		<div class="btn-group dropup">
									  	<button type="button" class="btn btn-link dropdown-toggle navbar-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Visualizar Metadado</button>
									  	<div class="dropdown-menu">
									    	<button type="button" class="btn btn-link navbar-btn"><a id="viewXML" style="text-decoration: none;" target="_blank" href="">Visualizar XML</a></button>
									    	<button type="button" class="btn btn-link navbar-btn"><a id="viewHTML" style="text-decoration: none;" target="_blank" href="">Visualizar HTML</a></button>
									  	</div>
									</div>
								</li>
								<li id="exportDocument" style="display: none;">
						      		<div class="btn-group dropup">
									  	<button type="button" class="btn btn-link dropdown-toggle navbar-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exportar Metadado</button>
									  	<div class="dropdown-menu">
									    	<button type="button" class="btn btn-link navbar-btn"><a id="exportXML" style="text-decoration: none;" target="_blank" href="" download>Exportar XML</a></button>
									    	<button type="button" class="btn btn-link navbar-btn"><a id="exportHTML" style="text-decoration: none;" target="_blank" href="" download>Exportar HTML</a></button>
									  	</div>
									</div>
								</li>
						      	<!--fim Visualizaçao de arquivo e download--> 			      	
					    	</ul>
					    	<ul class="nav navbar-nav navbar-right">
					    		<li><button type="button" class="btn btn-link navbar-btn"><a id="download_reSHP" style="color: grey" target="_blank" href="reSHP.exe" download>Download reSHP</a></button></li>
					    		<li><button type="button" class="btn btn-link navbar-btn" data-toggle="modal" data-target="#modalAbout">Ajuda</button></li>
					   			<li><a type="button" tabindex="-1" href="#form"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a></li>
					   		</ul>
					  	</div>
					</nav>
                </form>

				<?php include 'modal_edpmgbs.php' ?>

                <br>
                <br>
            </div>
        </div>
    </div>

</body>
</html>
