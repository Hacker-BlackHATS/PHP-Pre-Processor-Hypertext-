<html>
<head>
<title>QUESTION-16</title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter a number :<br>
<input type="number" name="a">
<input type="submit", value="GO">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$number = $_POST['a'];
	function Fibonacci($number){ 
		  

		if ($number == 0) 
		    return 0;     
		else if ($number == 1) 
		    return 1;     
		  

		else
		    return (Fibonacci($number-1) +  
		            Fibonacci($number-2)); 
	} 
	  

	for ($counter = 0; $counter < $number; $counter++){   
		echo Fibonacci($counter),' '; 
	} 
}
?>
</body>
</html>
