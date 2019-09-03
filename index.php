<!DOCTYPE html>
<html lang="en">
<head>
  	<title>edpMGBs: Editor de Metadados do Perfil MGB Sumarizado</title>
  	
  	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  	<script src="libraries/jqueryV3.3.1.js"></script>
  	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  	<script src="libraries/bootstrapV3.3.7.js"></script>

  	<link rel="stylesheet" type="text/css" href="libraries/stylesheet.css">

  	<script src="func.js"></script>
    <script src="post.js"></script>
    <script src="upload.js"></script>

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
	
</head>

<body>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="container">
		<div class="row">
			<div class="navbar-right">
				<button type="button" class="btn btn-outline-primary" onclick="window.location.href='edpMGBs.php';"><label>Ir para o editor</label></button>
			</div>

			<div class="col-md-12">
				<h1>Editor de Metadados do Perfil MGB Sumarizado</h1>
				<p>Com o intuito de simplificar a elaboração de metadados, foi proposta a ideia de montar um editor de metadados para o perfil de Metadados Geoespaciais do Brasil da versão sumarizada. Neste editor é possivel criar, editar, validar e salvar metadados no formato XML de forma simples e rápida. O projeto emprega tecnologias Web que facilitam seu manuseio ao não necessitar de nenhum conhecimento sobre instalação local de aplicações, precisando apenas de um navegador e acesso à Internet. <br>Com um editor disponível na nuvem, o usuário pode criar um novo metadado ou carregar (Importar XML) um metadado para edição e posteriormente salvá-lo em seu computador (Exportar Metadado em XML ou HTML).</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<video width="640" controls="controls">
					<source src="edpmgbsVideo.mp4" type="video/mp4">
					<object data="" width="640">
						<embed width="640" src="Yes Bank Advertisment.mp4">
					</object>
				</center>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h3>Equipe:</h3>
				<div>
					<label>Jugurta Lisboa Filho (Coordenador)</label>
				</div>
				<div>
					<label>Moises Henrique Pereira (Bolsista CNPq)</label>
				</div>
				<div>
					<label>Vitor Eduardo Concesso Dias</label>
				</div>
				<div>
					<label>Layane Beatriz Silva Loti</label>
				</div>
			</div>
			<div class="col-md-4">
				<h3>Suporte:</h3>
				<label>suporteedpmgbs@gmail.com</label>
			</div>
			<div class="col-md-4">
				<h3>Ferramenta:</h3>
				<label><a id="download_reSHP" style="color: black" target="_blank" href="reSHP.exe" download>Download reSHP</a></label>
			</div>
		</div>
	</div>
</body>
</html>
