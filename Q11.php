<html>
<head>
<title>QUESTION-11</title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter a number :<br>
<input type="number" name="a">
<input type="submit", value="GO">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$n = $_POST['a'];
	function factorial($fnum){
		$z = 1;
		for($i = $fnum; $i > 0; $i--){
			$z *= $i;
		}
		echo "Factorial is ", $z;
	}
	factorial($n);
}
?>
</body>
</html>
