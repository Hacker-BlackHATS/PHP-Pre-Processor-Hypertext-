<html>
<head>
<title>QUESTION-1</title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter the string:<br>
<input type="string" name="a">
<input type="submit", value="GO">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$str1=$_POST['a'];
	$l=strlen($str1)-1;
	$temp=0;
	for($i=0;$i<$l;$i++){
		$temp=$str1[$i];
		$str1[$i]=$str1[$l];
		$str1[$l]=$temp;
		$l--;
	}
	echo"Reversed string is  $str1";
}
?>
</body>
</html>
