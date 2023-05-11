<!DOCTYPE html>
<html>
<body>

<?php
$age = 20;

switch ($age) {
	case ($age < 16):
    	echo "Acesso negado!";
        break;
    case ($age >= 16 && $age <= 18):
    	echo "Acesso permitido apenas com acompanhante";
        break;
    default:
    	echo "Acesso permitido";
    	break;
}


?>

</body>
</html>

