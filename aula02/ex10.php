<!DOCTYPE html>
<html>
<body>

<?php
$grade = 10;

switch ($grade) {
	case 0:
    case 1:
    case 2: 
    case 3:
    case 4:
    	echo "Ruim!";
        break;
    case 5:
    case 6:
    	echo "Regular!";
        break;
    case 7:
    case 8:
    	echo "Bom!";
        break;
    case 9:
    case 10:
    	echo "Excelente!";
        break;
    default:
    	break;
}


?>

</body>
</html>

