<!DOCTYPE html>
<html>
<body>
<?php
//Crie uma função recursiva que calcule o fatorial do número 6.

function fat($n){
	if ($n <= 1) return 1;
    $result = $n;
    return $result * fat($n - 1);
}


$a = 6;
echo fat($a); 



?>

</body>
</html>

