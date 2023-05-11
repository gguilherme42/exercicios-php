<!DOCTYPE html>
<html>
<body>

<?php
$produto = array(
	1 => array(
    	"nome" => "PC",
        "preco" => 12,
        "descricao" => "bom"
    	),
    2 => array(
    	"nome" => "Notebook",
        "preco" => 13,
        "descricao" => "regular"
    ),
    3 => array(
    	"nome" => "Celular",
        "preco" => 1,
        "descricao" => "ruim"
    )
	
);

$cliente = 1;

echo "Nome: " . $produto[$cliente]["nome"] . "</br>";
echo "Preço: " . $produto[$cliente]["preco"] . "</br>";
echo "Descricao: " . $produto[$cliente]["descricao"] . "</br>";



?>

</body>
</html>

