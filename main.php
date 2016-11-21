<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro de Companhias Aéreas</title>

		<!-- CSS-->
		<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/css/main.css">

	</head>

	<body>
		<?php include('header.html') ?>

		<div class = "container">
			<!--Div para o título da página-->
			<div id="titulo-pag">
				<h1 class = "titulo">Cadastro de Companhia Aérea</h1>
			</div>

			<!--Formulário para cadastro-->
			<div id="form">
				<form action="#" method="get">

					
						<div class="form-group">
							<label for="nome" class="col-form-label">Nome da Companhia</label>
							<div class="row"><div class="col-md-12">
							<input type="text" class="form-control" name="Nome" placeholder="Ex: Tam" />
							</div></div>
						</div>

						<label for="cnpj">CNPJ</label>
							<div class="row"><div class="col-md-12">
							<input type="text" name="CNPJ" />
							</div></div>

						<label for="guiche"><br>Guiche de Atuação</label>
							<div class="row"><div class="col-md-12">
							<input type="number" name="Guiche" />
							<small id="Guiche" class="form-text text-muted"><br>O número do guiche deve ser ser válido no Aeroporto (1-100)</small>
							</div></div>
						</label>

						<label for="terminal"><br>Terminal de Atuação</label>
							<div class="row"><div class="col-md-12">
							<input type="number" name="Terminal" />
							</div></div>
						</label>

						<label for="pais"><br>País de Origem</label>
							<div class="row"><div class="col-md-12">
							<input type="text" name="Pais" />
							</div></div>
						</label>

						
						<button type="submit" class="btn btn-primary" name="Cadastrar" value="Cadastrar" onclick="alert('Companhia Cadastrada!')">Cadastrar</button>


				</form>
			</div>
		</div>


		<!-- SCRIPTS -->
		<script type="/bootstrap/js/jquery.js"></script>
		<script type="/bootstrap/js/bootstrap.min.js"></script>
		<script type="/js/main.js"></script>

	</body>
</html>
