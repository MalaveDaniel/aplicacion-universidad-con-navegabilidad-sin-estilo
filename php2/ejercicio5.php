<?php

if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) 
{
	$numero = $_GET["numero"];	
}else
{
	$numero = 5;
	echo "<p>numero por defecto</p>";
}






echo "<h2> tabla de multiplicar de ". $numero. "</h2>";

for ($i=1; $i <=10 ; $i++) 
{ 
	echo $i." x ". $numero." = ". ($i*$numero). "<br>";
}

?>