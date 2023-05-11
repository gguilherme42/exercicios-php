<!DOCTYPE html>
<html>
<body>
<?php
//Crie uma função que recebe um número como parâmetro, adiciona esse número a uma variável global chamada "soma" e retorna o valor atual da soma.

$soma = 12;

function sum($n){
	global $soma;
    
	$soma += $n;
    return $soma;
}

$a = 5;

echo "Somando $a de $soma o resultado é: " . sum($a); 



?>

</body>
</html>

