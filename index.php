<!DOCTYPE html>
<html>
<head>
	<title>Educação Conectada</title>
	<meta charset="utf-8" />
	<meta name="author" content="Carlos Sousa" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="essets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="essets/css/bootstrap-grid.css" />
	<link rel="stylesheet" type="text/css" href="essets/css/header.css" />
	<link rel="stylesheet" type="text/css" href="essets/css/footer.css" />
	<link rel="stylesheet" type="text/css" href="essets/css/content.css" />
	<link rel="stylesheet" type="text/css" href="essets/css/img.css" />
	<link rel="icon" type="image/png" href="essets/pix/icone.png" />
	<script type="text/javascript" src="essets/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="essets/js/bootstrap.js"></script>
</head>
<body>
	<header class="header-page">
		<class class="container">
			<div class="row">
				<div class="col-md-4 logo">
					<img src="essets/pix/logo.png" />
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4 logo box-logos">
					<img src="essets/pix/prefeitura.jpeg" />
					<img src="essets/pix/semed.jpg" />
				</div>
			</div>
		</class>
	</header>
	<nav class="navbar navbar-expand-md bg-green">
		<ul class="nav">
			<li class="navitem"><a href="?lnk=home" class="navlink">Home</a></li>
			<li class="navitem"><a href="?lnk=sobre" class="navlink">Sobre</a></li>
			<!--li class="navitem"><a href="?lnk=nossa_rede" class="navlink">Nossa Rede</a></li>
			<li class="navitem"><a href="?lnk=plano_local" class="navlink">Plano Local</a></li>
			<li class="navitem"><a href="?lnk=cronograma" class="navlink">Cronograma</a></li-->
			<li class="navitem"><a href="?lnk=faleconosco" class="navlink">Faleconosco</a></li>
		</ul>
	</nav>
	<div class="container-fluid">
		<div class="content">
			<?php 

				$lnk = $_GET['lnk'];

				switch ($lnk) {
					
					case 'home':
						include 'pages/home.php';
						break;
					
					case 'sobre':
						include 'pages/sobre.php';
						break;
						
					case 'nossa_rede':
						include 'pages/nossa_rede.php';
						break;
					
					case 'plano_local':
						include 'pages/plano_local.php';
						break;

					case 'cronograma':
						include 'pages/cronograma.php';
						break;
					
					case 'faleconosco':
						include 'pages/faleconosco.php';
						break;
					
					default:
						include 'pages/home.php';
						break;
				}

			 ?>
		</div>
		<footer class="footer-page">
			<p>&copy;2018-2019 Todos os direitos reservados</p>
			<p>SEMED - Pirabas/PA</p>
		</footer>
	</div>
</body>
</html>