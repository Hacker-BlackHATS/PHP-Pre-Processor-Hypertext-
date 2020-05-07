<html>
<head>
<title>QUESTION-12</title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter a number :<br>
<input type="number" name="a">
<input type="submit", value="GO">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$n = $_POST['a'];
	function CheckPrime($number){
		if ($number == 1){
			return 0;
		}
		for ($i = 2; $i <= $number/2; $i++){ 
		    if ($number % $i == 0) 
		        return 0; 
		} 
		return 1; 
	}
	$flag = CheckPrime($n);
	if ($flag == 1){
		echo "Prime Number.";
	}
	else{
		echo "Not a Prime Number.";
	}
}
?>
</body>
</html>
