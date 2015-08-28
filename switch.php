	<?php
	
	?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title></title>
	
		<meta name="description" content="Opis w Google" />
		<meta name="keywords" content="słowa, kluczowe, wypisane, po, porzecinku" />
	
</head>
<body>
	<?php
	$a = 1;
	
	switch ($a) {
		case '0': echo "a equals 0<br />"; break;
		case '1': echo "a equals 1<br />"; break;
		case '2': echo "a equals 2<br />"; break;
		case '3': echo "a equals 3<br />"; break; 
		default: echo "{$a} is not eaqual to 1,2,3";
	}
	
	
	?>
</body>
</html>