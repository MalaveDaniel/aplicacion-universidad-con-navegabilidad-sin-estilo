<meta charset="utf-8" />
<?php
$numero = 1;
$contador = 2;
while ($contador <= 20) 
{
	$numero *= $contador;
	echo $numero. "<br>";
	$contador++;

}
	echo "el resultado es". $numero;
?>