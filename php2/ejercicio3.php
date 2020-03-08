<?php

for ($i=0; $i <= 30 ; $i++) 
{ 
	$cuadrado = $i * $i;
	echo "el cuadrado de ". $i ." es ".$cuadrado; 
	

	if ($cuadrado%2 == 0 ) 
	{
		echo " y es par";
	}
	else 
	{

		echo " y es impar";
	}
	echo"<br>";
}
?>