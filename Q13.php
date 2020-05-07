<html>
<head>
<title>QUESTION-13</title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter a number :<br>
<input type="number" name="a">
<input type="submit", value="GO">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$n = $_POST['a'];
	function nEven($n){
		$curr = 0;
		for ($i = 0; $i < $n; $i++)  
		{
		    $curr += 2;
		    echo "$curr ";
		}
	}
	$flag = nEven($n);
}
?>
</body>
</html>
