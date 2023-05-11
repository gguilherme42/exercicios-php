<!DOCTYPE html>
<html>
<body>
<?php
//Crie uma função que recebe uma string como parâmetro, adiciona essa string a uma variável global chamada "texto" e retorna o valor atual do texto.

$texto = "Hello";

function add_text($t){
	global $texto;
    
	$texto = $texto . $t;
    return $texto;
}

$a = ", World!";

echo add_text($a); 



?>

</body>
</html>

