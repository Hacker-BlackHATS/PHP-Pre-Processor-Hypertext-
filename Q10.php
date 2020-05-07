<html>
<head>
<title>QUESTION-10</title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter the three numbers :<br>
<input type="number" name="a">
<input type="number" name="b">
<input type="number" name="c">
<input type="submit", value="GO">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$n = $_POST['a'];
	$x = $_POST['b'];
	$y = $_POST['c'];
	function largest($n, $x, $y){
		if($n > $x && $n > $y){
			echo "Largest number is ", $n;
		}
		if($x > $n && $x > $y){
			echo "Largest number is ", $x;
		}
		else{
			echo "Largest number is ", $y;
		}
	}
		largest($n, $x, $y);
}
?>
</body>
</html>
