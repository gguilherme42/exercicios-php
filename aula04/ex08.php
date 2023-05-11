<!DOCTYPE html>
<html>
<body>
<?php
//Crie uma função recursiva que calcule a soma de 5 números.


function sum($arr, $index){
	if ($index == 0) return $arr[0];
  	$result = $arr[$index];
    return $result + sum($arr, $index - 1);
}


$numbers = array(10,10,10,5);
$last_element = count($numbers) - 1;
echo sum($numbers, $last_element); 



?>

</body>
</html>

