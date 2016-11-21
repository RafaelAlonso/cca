<?php 
	// testes de erro
	$comp = $cnpj = $guiche = $terminal = $pais = "";
	$compErr = $cnpjErr = $guicheErr = $terminalErr = $paisErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["comp"])) {
	    	$compErr = "O campo é obrigatório!";
		} elseif (!preg_match("/^[a-zA-z]*$/", $_POST["comp"])) {
			$compErr = "O nome deve possuir apenas letras e espaços em branco";
		} else {
	    	$comp = test_comp($_POST["comp"]);
		}

		if (empty($_POST["cnpj"])) {
	    	$cnpjErr = "O campo é obrigatório!";
		} else {
	    	$cnpj = test_cnpj($_POST["cnpj"]);
		}

		if (empty($_POST["guiche"])) {
	    	$guicheErr = "O campo é obrigatório!";
		} else {
	    	$guiche = test_guiche($_POST["guiche"]);
		}

		if (empty($_POST["terminal"])) {
	    	$terminalErr = "O campo é obrigatório!";
		} else {
	    	$terminal = test_terminal($_POST["terminal"]);
		}

		if (empty($_POST["pais"])) {
	    	$paisErr = "O campo é obrigatório!";
		} else {
	    	$pais = test_pais($_POST["pais"]);
		}
	}

	function test_comp($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		if(!preg_match("/^[a-zA-Z ]*$", $data)){
			$compErr = "Nome inválido";
		}
		return $data;
	}
	function test_cnpj($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	function test_guiche($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	function test_terminal($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	function test_pais($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>