
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>EXERCICIO 01</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 

/*
	[EXERCICIOS]
	
1. Elaborar um programas para receber valores, via teclado, nas variaveis
"a" e "b". Apos isso, o programa, utilizando-se de uma 3a variavel "c" ,
deverá trocar o conteudo das variaveis "a" e "b".

*/
$a="";
$b="";


echo "<form method='POST' action='home.php'>";
echo "<fieldset>";
echo "<legend> Exercicio 01 </legend>" ;
echo 	"<label for='vara'> Varlo a </label>";
echo 	"<input type='text' name='vara' id='vara'><br>";
echo 	"<label for='varb'> Varlo b </label>";
echo 	"<input type='text' name='varb' id='varb'><br>";
echo 	"<button type='submit'> Enviar</button><br>";
echo "</fieldset>";
echo "</form>";


 ?>
</body>
</html>
