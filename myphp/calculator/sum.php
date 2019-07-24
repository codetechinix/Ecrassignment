<!DOCTYPE html> 
<html>     
	<head>         
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">         
		<title>Calculator</title>     
	</head>     
	<body>         
		<?php             
		$sum = $_POST['number1'] + $_POST['number2'];             
		echo("Sum: $sum");         
		?>     
	</body> 
</html>