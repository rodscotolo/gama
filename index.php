
<?php

include 'config.php';

if(isset($_POST['Submit'])) {
	$nome = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$telefone = mysqli_real_escape_string($mysqli, $_POST['telefone']);
	$curso = mysqli_real_escape_string($mysqli, $_POST['curso']);

		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,telefone,curso) VALUES('$nome','$email','$telefone','$curso')");

		throw new Exception($result);
	}

?>
