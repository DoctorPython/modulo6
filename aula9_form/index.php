<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<?php
	/*
	if (isset($_POST['acao'])) {
		$nome = @$_POST['nome'];
		$email = @$_POST['email'];
		echo $nome;
		echo "</br>";
		echo $email;	
	};
	if (isset($_POST['acao'])) {
		//echo $_POST['numero1']+ $_POST['numero2'];
		echo $_POST['nome'];
		
	};*/

	if (isset($_POST['acao'])) {
		echo $_POST['nome'];
		$array = $_POST['valor'];
		foreach ($array as $key => $value) {
			echo $value;
			echo "<br/>";
		}
		
	}

	?>
	

	<form method="post">
		<p>Digite um número:</p>
		<input type="text" name="numero1">
		<p>Digite outro número:</p>
		<input type="text" name="numero2">
		<select name="nome">
			<option>escolha</option>
			<option value="bruno">bruno</option>
			<option value="conti">conti</option>
		</select>
		<input type="checkbox" name="valor[]"value="10">10
		<input type="checkbox" name="valor[]"value="20">20
		<input type="checkbox" name="valor[]"value="30">30
		<input type="submit" name="acao"value="Enviar">
	</form>
</body>
</html>