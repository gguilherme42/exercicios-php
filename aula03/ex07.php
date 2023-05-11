<!DOCTYPE html>
<html>
<body>
<?php
//Crie um array multidimensional contendo duas matérias,
//cada uma com seus respectivos alunos. Em seguida, exiba na
//tela o nome do segundo aluno da primeira matéria.

$content = array(
	"Epistemologia" => array(
    	1 => array("Joana", "1931341"),
        2 => array("Taldo", "3191249")
    ),
    "Psicologia" => array(
    	1 => array("Kauna", "1911341"),
        2 => array("Taldo", "3141249")
    ),
);

echo $content["Epistemologia"][1][0];


?>

</body>
</html>

