<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Banco de Dados de Companhias Aéreas</title>

		<!-- CSS-->
		<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/css/main.css">

	</head>

	<body>
		<!-- Menu das páginas -->
		<?php include('header.html') ?>

		<div class = "container">
			<!--Div para o título da página-->
			<div id="titulo-pag">
				<h1 class = "titulo">Banco de Dados de Companhias Aéreas</h1>
			</div>

			<!--Div da Tabela -->
			<div class="tbd">
				<table class="table">
					<thead>
						<tr>
							<th>Nome da Companhia</th>
							<th>CNPJ</th>
							<th>Guiche de Atuação</th>
							<th>Terminal de Atuação</th>
							<th>País de Origem</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <?php echo $_POST["Comp"]; ?> </td>
							<td> <?php echo $_POST["CNPJ"]; ?> </td>
							<td> <?php echo $_POST["Guiche"]; ?> </td>
							<td> <?php echo $_POST["Terminal"]; ?> </td>
							<td> <?php echo $_POST["Pais"]; ?> </td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>


		<!-- SCRIPTS -->
		<script type="/bootstrap/js/jquery.js"></script>
		<script type="/bootstrap/js/bootstrap.min.js"></script>
		<script type="/js/main.js"></script>

	</body>
</html>
