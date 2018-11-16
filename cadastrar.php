<?php
	$nome = $_POST["nome"];
	$username = $_POST["username"];
	$senha = $_POST["senha"];
	$data_nascimento = $_POST["dtNascimento"];
	$genero = $_POST["genero"];

		$con = mysqli_connect("localhost", "root", "", "agendadb");

		if($con){
			$sql = "Insert into users(nome, username, senha, data_nascimento, sexo) values ('$nome', '$username', '$senha', '$data_nascimento', '$genero')";
			
			mysqli_query($con, $sql);
			mysqli_close($con);
		}
?>

<html>
<head>
	<title></title>
</head>
<body>
		<a href="cadastroUsuario.html">Voltar</a>
</body>
</html>
