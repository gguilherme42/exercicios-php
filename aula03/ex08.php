<!DOCTYPE html>
<html>
<body>
<?php
//Crie um array multidimensional contendo o nome, a idade e o
//e-mail de duas pessoas. Em seguida, exiba na tela o e-mail
//da segunda pessoa.

$people = array(
	1 => array("Cleo", 12, "cleo@email.com"),
    2 => array("Bleo", 10, "bleo@mail.com")
);

echo $people[2][2];


?>

</body>
</html>

