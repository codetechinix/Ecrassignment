<!DOCTYPE html> 
	<html> 
		<body> 
			<?php 
				$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'); 
				$zodacs = array('Rats', 'Buffalos', 'Tigers', 'Rabbits', 'Dragons', 'Snakes', 'Horses', 'Goats', 'Sheep', 'Monkeys', 'Roosters', 'Dogs', 'Swine');
				$day = date('j'); 
				$month = date('m');
				$zodac = date('m'); 
				$monthInWords = $months[$month - 1]; 
				$zodacsingle = $zodacs[$zodac - 1];
				$year = date('Y'); 
				echo("Hello DEAR, DID YOU KNOW IS $day $monthInWords, $year AND IT IS MONTH $zodacsingle");  
			?>  
		</body> 
	</html>