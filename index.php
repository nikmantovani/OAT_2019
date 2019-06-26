<?php

//Incluindo o arquivo de conexao com o banco de dados
require_once("config/conexao_bd.php");

?>

<!DOCTYPE html>
<html>
	<head>
		<title>OAT LAST</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="./css/bootstrap_css/bootstrap.min.css">

		<script src="./js/jquery-3.3.1.slim.min.js"></script>
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap_js/bootstrap.min.js" ></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script type="text/javascript" src="js/funcoes.js"></script>

	</head>
	<body >

		<div class="container" id="cabecalho">
			
			<div class="jumbotron">
				<div id = "div_img_index">
					<img src="img/logo.jpg" width="100%" height="170">
				</div>

				<ul class="menu">
					<li><a class="btn btn-primary" role="button" href="?pg=inicio">Início</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=sobre">Sobre</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=cadastro">Cadastro</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=listagem">Listagem</a></li>
				</ul>

			</div>

		</div>

		<div class="container" id="corpo">
			<div class="jumbotron">

			<?php

				if(isset($_GET["pg"])){
					$pagina = $_GET["pg"];
				}
				else{
					$pagina = "inicio";
				}				

				include("paginas/".$pagina.".php");

			?>
			</div>
		</div>

		<div class="container" id="rodape">

			<div class="jumbotron">				

				<h4>Todos os direitos reservados.</h4>				

			</div>
		</div>


	</body>
</html>