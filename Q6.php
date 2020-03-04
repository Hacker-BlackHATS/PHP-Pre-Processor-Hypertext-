<html>
<head><title>QUESTION-6</title></head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<!--<h1>Enter a number ::</h1>
<input type="text", name='A'>
<input type="submit">-->
<select name="lang">
<option value="1">ENGLISH</option>
<option value="2">HINDI</option>
<option value="3">JAPANESE</option>
<input type="submit", value="GO">
</select>
</fieldset>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	//$a = $_POST['A'];
	//$B = explode(' ', $a);
	//$sum = 0;
	//for($i=0;$i<count($B);$i++){
	//	$sum += $B[$i];
	//}
	//echo "Sum = $sum<br>";
	$L = $_POST['lang'];
	switch($L){
		case "1":{
			echo "HELLO!!!<br>";
			break;
		}
		case "2":{
			echo "NAMASKAR!!!<br>";
			break;
		}
		case "3":{
			echo "KONICHIVA!!!<br>";
			break;
		}
		default:{
			echo "GET LOST!!!<br>";
		}
	}
}
?>
</body>
</html>
