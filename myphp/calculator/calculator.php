<!DOCTYPE html> 
<html>     
<head>         
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">         
	<title>Calculator</title>     
</head>     
<body>         
	<?php  
		$number1 = 10;
		$number2 = 20;         
		$sum = $_GET['number1'] + $_GET['number2'];             
		echo("Sum: $sum");         
	?>  
	<?php 
		$a = 16; 
		$b = 30; 
		$sum = $a + $b; 
		echo $sum; 
	?>   
</body> 
</html>