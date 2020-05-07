<html>
<head>
<title>QUESTION-15</title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Enter a String :<br>
<input type="text" name="a">
<input type="submit", value="GO">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$n = $_POST['a'];
	function Palindrome($string){   
		if (strrev($string) == $string){   
			return 1;   
		} 
		else{ 
			return 0; 
		} 
	}   

	if(Palindrome($n)){   
		echo "Palindrome";   
	}  
	else {   
		echo "Not a Palindrome";   
	} 
}
?>
</body>
</html>
