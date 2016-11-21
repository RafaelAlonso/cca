<!DOCTYPE php>
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
		<?php include('validation.php') ?>
		<!-- Menu das páginas -->
		<?php include('header.html') ?>

		<div class = "container">
			<!--Div para o título da página-->
			<div id="titulo-pag">
				<h1 class = "titulo">Cadastro de Companhia Aérea</h1>
			</div>

			<!--Formulário para cadastro-->
			<div id="form">
				<form action="bdcomp.php" method="post" data-toggle="validator" role="form">

					
						<div class="form-group">
							<span class="obg">* Campo Obrigatório<br></span>
							<label for="nome" class="col-form-label">Nome da Companhia <span class="obg">*<? echo $compErr ?></span></label>
							<div class="row"><div class="col-md-12">
							<input type="text" class="form-control" name="Comp" placeholder="Ex: Tam"   pattern="^[_A-z0-9]{1,}$" required />
							</div></div>
						</div>

						<label for="cnpj">CNPJ <span class="obg">*</span></label>
							<div class="row"><div class="col-md-12">
							<input type="text" name="CNPJ" pattern="11111111//1111-11" placeholder="12.345.678/1234-12" required />
							</div></div>

						<label for="guiche"><br>Guiche de Atuação <span class="obg">*</span></label>
							<div class="row"><div class="col-md-12">
							<input type="number" max="100" min="1" name="Guiche" placeholder="1" required />
							<small id="Guiche" class="form-text text-muted"><br>O número do guiche deve ser ser válido no Aeroporto (1-100)</small>
							</div></div>
						</label>

						<label for="terminal"><br>Terminal de Atuação <span class="obg">*</span></label>
							<div class="row"><div class="col-md-12">
							<input type="number" max="25" min="1" name="Terminal" placeholder="1" required />
							</div></div>
						</label>

						<label for="pais"><br>País de Origem <span class="obg">*</span></label>
							<div class="row"><div class="col-md-12">
							<input type="text" class="form-control" name="Pais" placeholder="Ex: Brasil" required />
							</div></div>
						</label>

						
						<button type="submit" class="btn btn-primary" name="Cadastrar" value="Cadastrar" onclick="">Cadastrar</button>


				</form>
			</div>
		</div>

		<!-- SCRIPTS -->
		<script type="/bootstrap/js/jquery.js"></script>
		<script type="/bootstrap/js/bootstrap.min.js"></script>
		<script type="/js/main.js"></script>

	</body>
</html>
