<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Teste Heroku</title>
</head>
<body>
   <input id="senha1" type="password">
   <input id="senha2" type="password">

<?php $senha1 = $_POST["senha1"];
$senha2 = $_POST["senha2"];

if($senha1 == $senha2) {
	echo "As senhas digitadas são iguais.";
} else {
	echo "As senhas digitadas não batem.";
}
?>

</body>
</html>