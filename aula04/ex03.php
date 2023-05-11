<!DOCTYPE html>
<html>
<body>
<?php
//Crie uma função que receba um array de números como parâmetro e retorne a média desses números..

function sum($arr){
	$result = 0;
    forEach($arr as $e){
    	$result += $e;
    }
    return $result;

}

function len($arr){
	$result = 0;
    forEach($arr as $a){
    	$result++;
    }
    return $result;
}

function mean($arr){
	return sum($arr) / len($arr);
}


$numbers = array(10,31,1,1,1,1,1,1);
echo "A média é: " . mean($numbers);

?>

</body>
</html>

