<html>
<head>
<title>QUESTION-14</title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter a number :<br>
<input type="number" name="a">
<input type="submit", value="GO">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$n = $_POST['a'];
	function oddSum($n) 
	{ 
		$sum = 0; $curr = 1;
		for ($i = 0; $i < $n; $i++)  
		{ 
		    $sum += $curr;
		    $curr += 2;
		} 
		return $sum;
	}
	echo " Sum of first ", $n
     , " Odd Numbers is: ", oddSum($n); 
}
?>
</body>
</html>
