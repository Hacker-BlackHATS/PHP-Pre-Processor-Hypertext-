<html>
<head><title>QUESTION-3</title></head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<h5>ENTER A STRING ::</h5>

<input type="text", name="v"><br>

<br>Enter the operation number to perform<br>
<ol>
	<li>Remove the white spaces</li>
	<li>Check if a string contains another string</li>
	<li>Check if a string is all lower case</li>
	<li>Replace the first 'the' of the following string with 'That'</li>
</ol>
<br>
<input type="number", name="N">
<input type="submit", value="GO">

</fieldset>
</form>
<br>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$n = $_POST['v'];
	$opt = $_POST['N'];
	switch($opt){
		case 1:{
			echo "Result = ".preg_replace('/\s/','',$n);
			break;
			}
		case 2:{
			$st="BOLT";
			if(strpos($n,$st)){
				echo "String contains another string<br>";
			}
			else{
				echo "String does not contains another string<br>";
			}
			break;
		}
		case 3:{
			if(ctype_lower($n)){
				echo "String is all lower case<br>";
			}
			else{
				echo "String is not all lower case<br>";
			}
			break;
		}
		case 4:{
			echo "Result = ".preg_replace('/the/','That',$n,1);
			break;
		}
		default:{
			echo "Invalid Input!!!<br>";
		}
	}

}
?>
</body>
</html>
