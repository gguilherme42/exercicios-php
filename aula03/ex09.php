<!DOCTYPE html>
<html>
<body>
<?php
//Crie um array multidimensional contendo duas categorias de
//produtos, cada uma com dois produtos e seus respectivos
//preços. Em seguida, exiba na tela o preço do segundo
//produto da segunda categoria..

$product = array(
	"Celular" => array(
    	"Motorola G4" => 13.5,
        "Nokia Z4" => 14.4
    ),
    "Luva de boxe" => array(
    	"Luva adidas" => 13,
        "Luva Gladiador" => 33
    
    )
);

echo $product["Luva de boxe"]["Luva Gladiador"];

?>

</body>
</html>

