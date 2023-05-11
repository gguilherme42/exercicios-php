<!DOCTYPE html>
<html>
<body>
<?php
//Crie uma função que receba um número como parâmetro e retorne se ele é par ou ímpar.

function even_or_odd($n){
	return ($n % 2) == 0 ? "par": "impar";
}

$test = 6;

echo "O número $test é: " . even_or_odd($test);

?>

</body>
</html>

