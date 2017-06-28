<!DOCTYPE html>
<html>
<head>
	<title>Erstes PHP Projekt</title>
</head>
<body>
<h>
Rechner
</h>
<form action="index.php" method="post">
Erste Zahl <br>
<input type="text" name="erste_zahl" size="20" maxlength="30">	
<br>
<input type="radio" name="operator" value= "+" >Addieren
<input type="radio" name="operator" value= "-" >Subtrahieren
<input type="radio" name="operator" value= "*" >Multiplizieren
<input type="radio" name="operator" value= "/" >Dividieren
<br>
Zweite Zahl <br>
<input type="text" name="zweite_zahl" size="20" maxlength="30">
<br>
<input type="submit" value="Ausrechnen">
</form>

	<?php
	
	echo "{$_POST['erste_zahl']}"; 
	echo "{$_POST['operator']}";
	echo "{$_POST['zweite_zahl']}";
	echo "=";

	switch ("{$_POST['operator']}") {
		case "+":
			echo "{$_POST['erste_zahl']}" + "{$_POST['zweite_zahl']}";
			break;
		case "-":
			echo "{$_POST['erste_zahl']}" - "{$_POST['zweite_zahl']}";
			break;
		case "*":
			echo "{$_POST['erste_zahl']}" * "{$_POST['zweite_zahl']}";
			break;
		case "/":
			echo "{$_POST['erste_zahl']}" / "{$_POST['zweite_zahl']}";
			break;
		default:
			echo "Bitte mache mal ein paar Angaben";
			break;
	}






/*
	if ("{$_POST['operator']}" === "+" )
	{
		echo "{$_POST['erste_zahl']}" + "{$_POST['zweite_zahl']}";
	}
	else if ("{$_POST['operator']}" === "-" )
	{
		echo "{$_POST['erste_zahl']}" - "{$_POST['zweite_zahl']}";
	}
	else if ("{$_POST['operator']}" === "*" )
	{
		echo "{$_POST['erste_zahl']}" * "{$_POST['zweite_zahl']}";
	}
	else if ("{$_POST['operator']}" === "/" )
	{
		echo "{$_POST['erste_zahl']}" / "{$_POST['zweite_zahl']}";
	}
	else
	{
		echo "Bitte mache mal ein paar Angaben";
	}	
*/

?>


</body>
</html>