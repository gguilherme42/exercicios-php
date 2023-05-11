<!DOCTYPE html>
<html>
<body>

<?php
$age = 18;
 
if ($age <= 18)
	echo "adolescente";
else if ($age > 18 && $age < 24)
	echo "jovem adulto";
else if ($age >= 25 && $age <= 59 )
	echo "Adulto";
else if ($age > 60)
	echo "Velho";
 
?>

</body>
</html>

