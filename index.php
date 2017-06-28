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
<input type="radio" name="operator" value= + >Addieren
<input type="radio" name="operator" value= - >Subtrahieren
<input type="radio" name="operator" value= * >Multiplizieren
<input type="radio" name="operator" value= / >Dividieren
<br>
Zweite Zahl <br>
<input type="text" name="zweite_zahl" size="20" maxlength="30">
<br>
<input type="submit" value="Abschicken">
</form>

	<?php
	/*
	echo "{$_POST['erste_zahl']}"; 
	echo "{$_POST['operator']}";
	echo "{$_POST['zweite_zahl']}";
	echo "=";
	echo $ergebnis ;

	if ("{$_POST['operator']}" == "+" )
	{
		$ergebnis = "{$_POST['erste_zahl']}" + "{$_POST['zweite_zahl']}"
	}
	elseif ("{$_POST['operator']}" == "-" )
	{
		$ergebnis = "{$_POST['erste_zahl']}" - "{$_POST['zweite_zahl']}"
	}
	elseif ("{$_POST['operator']}" == "*" )
	{
		$ergebnis = "{$_POST['erste_zahl']}" * "{$_POST['zweite_zahl']}"
	}
	elseif ("{$_POST['operator']}" == "/" )
	{
		$ergebnis = "{$_POST['erste_zahl']}" / "{$_POST['zweite_zahl']}"
	}
	*/
	$a = 2;

	echo "$a";

	if ($a == 1) {
		echo "Endlich!!!";
		# code...
	}
?>


</body>
</html>