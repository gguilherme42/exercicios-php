<!DOCTYPE html>
<html>
<body>

<?php
$produto = array(
	"nome" => "Sabonente azul", 
	"preço" => 13.5, 
	"desc" => "Sabonete de glicerina azul para bebês", 
	"img" => "./imagens/sabonete_azul.jpg");

echo "Produto: " . $produto["nome"] . </br>;
echo "Preço: " . $produto["preco"] . </br>;
echo "Descrição: " . $produto["desc"] . </br>;
echo "Imagem: " . $produto["img"] . </br>;
?>

</body>
</html>

