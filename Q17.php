<html>
<head>
<title>QUESTION-17</title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter a number :<br>
<input type="number" name="a">
<input type="submit", value="GO">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$n = $_POST['a'];
	function Pattern($number){ 
		for($i = $number; $i >= 0; $i--){
			for($j = $i; $j < $number; $j++){
				echo "*";
			}echo "<br>";
		}
	}
	Pattern($n);
}
?>
</body>
</html>
